<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password as PasswordRule;

class WanasupportController extends Controller
{
    // Show registration form
    public function ShowRegisterForm()
    {
        return view('welcome');
    }

    // Show login form
    public function ShowLoginPage()
    {
        return view('login');
    }

    // Handle registration
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'regex:/^[A-Za-z]+(?:\s[A-Za-z]+)*$/'],
            'email' => [
                'required',
                'email',
                'regex:/^[A-Za-z]+\.[A-Za-z]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/',
                'unique:students,email',
            ],
            'phone' => ['required', 'regex:/^\+255\d{9}$/'],
'password' => [
    'required',
            'regex:/^(?=.*[0-9])(?=.*[@!?#$%^&*])[A-Z][a-zA-Z0-9@!?#$%^&*]{7,}$/'
],
            'role' => ['required', 'in:student,donor,admin'],
        ], [
            'name.regex' => 'Name must contain only letters and spaces.',
            'email.regex' => 'Email must be in format firstname.lastname@example.com.',
            'phone.regex' => 'Phone must start with +255 followed by 9 digits.',
            'password.regex' => 'Password must start with 8 digits, then an uppercase letter, followed by lowercase letters.',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $student = Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        return redirect()->route('login')->with('success', 'Account created successfully! You may now login.');

    }

    public function login(Request $request)
    {
        // Validate input
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Attempt login
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); // Prevent session fixation

            $user = Auth::user();

            // Redirect based on role
            if ($user->role === 'admin') {
                return redirect()->route('admin.dashboard')->with('success', 'Welcome Admin!');
            } elseif ($user->role === 'student') {
                return redirect()->route('student.dashboard')->with('success', 'Welcome Student!');
            } elseif ($user->role === 'donor') {
                return redirect()->route('donor.dashboard')->with('success', 'Welcome Donor!');
            }

            return redirect()->intended('/'); // fallback
        }

        // Invalid credentials
        return back()->withErrors([
            'email' => 'Invalid credentials. Please check your email and password.',
        ])->onlyInput('email');
    }

    // Dashboards
    public function ShowStudentDashboard()
    {
        $student = Auth::guard('student')->user();
        return view('student.dashboard', compact('student'));
    }

    public function ShowDonorDashboard()
    {
        $donor = Auth::guard('donor')->user();
        return view('donor.dashboard', compact('donor'));
    }

    public function ShowAdminDashboard()
    {
        $admin = Auth::guard('admin')->user();
        return view('admin.dashboard', compact('admin'));
    }
}
