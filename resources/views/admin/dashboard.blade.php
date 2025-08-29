@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">

        {{-- Sidebar --}}
        <div class="col-md-2 bg-light min-vh-100 p-3">
            <h4 class="text-primary mb-4">WanaSupport</h4>
            <ul class="nav flex-column">
                <li class="nav-item mb-2">
                    <a class="nav-link active text-white bg-primary rounded" href="#">Dashboard</a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link" href="#">Users</a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link" href="#">Materials</a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link" href="#">Payments</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Settings</a>
                </li>
            </ul>
        </div>

        {{-- Main Content --}}
        <div class="col-md-10 p-4">
            {{-- Top Navbar --}}
            <div class="d-flex justify-content-between mb-4">
                <h4 class="mb-0">ADMIN DASHBOARD</h4>
                <div>
                    <select class="form-select d-inline w-auto me-2">
                        <option>English</option>
                        <option>Swahili</option>
                    </select>
                    <span class="fw-bold">Admin</span>
                </div>
            </div>

            {{-- Stats Cards --}}
            <div class="row mb-4">
                <div class="col-md-3">
                    <div class="card text-center p-3">
                        <i class="fas fa-user-graduate fa-2x text-primary mb-2"></i>
                        <h5>{{ number_format($studentsCount) }} Students</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-center p-3">
                        <i class="fas fa-user fa-2x text-primary mb-2"></i>
                        <h5>{{ number_format($donorsCount) }} Donors</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-center p-3">
                        <i class="fas fa-book fa-2x text-primary mb-2"></i>
                        <h5>{{ $materialsCount }} Materials</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-center p-3">
                        <i class="fas fa-dollar-sign fa-2x text-primary mb-2"></i>
                        <h5>Tsh {{ number_format($totalPayments) }}</h5>
                    </div>
                </div>
            </div>

            {{-- Tables --}}
            <div class="row">
                {{-- User Management --}}
                <div class="col-md-6">
                    <div class="card p-3">
                        <h5>User Management</h5>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Role</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($recentUsers as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ ucfirst($user->role) }}</td>
                                    <td>{{ $user->email }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a href="#" class="text-primary">View All</a>
                    </div>
                </div>

                {{-- Recent Payments --}}
                <div class="col-md-6">
                    <div class="card p-3">
                        <h5>Recent Payments</h5>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Donor</th>
                                    <th>Amount</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($recentPayments as $payment)
                                <tr>
                                    <td>{{ $payment->donor_name }}</td>
                                    <td>Tsh {{ number_format($payment->amount) }}</td>
                                    <td>{{ $payment->date }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a href="#" class="text-primary">View All</a>
                    </div>
                </div>
            </div>

            {{-- Buttons --}}
            <div class="d-flex justify-content-between mt-4">
                <a href="#" class="btn btn-primary">MANAGE MATERIALS</a>
                <a href="#" class="btn btn-primary">SYSTEM SETTINGS</a>
            </div>
        </div>
    </div>
</div>
@endsection
