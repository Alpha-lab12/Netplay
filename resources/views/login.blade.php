<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WanaSupport - Jiunge Nasi</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #4361ee;
            --secondary-color: #3f37c9;
            --accent-color: #4cc9f0;
            --light-color: #f8f9fa;
            --dark-color: #212529;
            --success-color: #4bb543;
            --warning-color: #ffcc00;
            --danger-color: #ff3333;
            --border-radius: 12px;
            --box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--light-color);
        }

        .auth-container {
            min-height: 100vh;
            display: flex;
        }

        .auth-image-side {
            flex: 1;
            background: linear-gradient(135deg, rgba(67, 97, 238, 0.9), rgba(63, 55, 201, 0.9)),
                        url('https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 3rem;
        }

        .auth-form-side {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
            background-color: white;
        }

        .auth-card {
            background-color: white;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            width: 100%;
            max-width: 500px;
            padding: 2.5rem;
            border: none;
        }

        .form-control {
            padding: 0.8rem 1rem;
            border-radius: var(--border-radius);
        }

        .btn {
            padding: 0.8rem 1.5rem;
            border-radius: var(--border-radius);
            font-weight: 500;
        }

        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        @media (max-width: 992px) {
            .auth-container {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <div class="auth-container">
        <!-- Left Side with Image -->
        <div class="auth-image-side">
            <div class="text-center">
                <img src="https://via.placeholder.com/300x100?text=WanaSupport+Logo" alt="WanaSupport Logo" class="mb-4" style="max-height: 80px;">
                <h2>Karibu WanaSupport</h2>
                <p class="lead">Pata masada wa ada na rasilimali za kitaaluma</p>
            </div>
        </div>

        <!-- Right Side with Registration Form -->
        <div class="auth-form-side">
            <div class="auth-card">
                <div class="auth-header text-center mb-4">
                    <h3 class="text-primary">Jiunge na WanaSupport</h3>
                    <p class="text-muted">Unda akaunti yako kwa dakika chache</p>
                </div>

                <form method="POST" action="{{ url('signin') }}">
                    @csrf
        <div class="mb-3">
        <label for="email" class="form-label">Barua Pepe</label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
               name="email" value="{{ old('email') }}" required autofocus>
        @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

                    <!-- Password -->
                    <div class="mb-3">
                        <label for="password" class="form-label">Nenosiri</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <!-- Admin Code (only shown when admin is selected) -->
                    <div id="adminFields" style="{{ old('role') == 'admin' ? '' : 'display: none;' }}">
                        <div class="mb-3">
                            <label for="admin_code" class="form-label">Msimbo wa Admin</label>
                            <input id="admin_code" type="text" class="form-control @error('admin_code') is-invalid @enderror" name="admin_code" value="{{ old('admin_code') }}" {{ old('role') == 'admin' ? 'required' : '' }}>
                            @error('admin_code')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" id="terms" required>
                        <label class="form-check-label" for="terms">
                            Nakubali <a href="#" data-bs-toggle="modal" data-bs-target="#termsModal">Sheria na Masharti</a>
                        </label>
                    </div>

                    <div class="d-grid mb-3">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-user-plus me-2"></i> Jiunge Sasa
                        </button>
                    </div>

                    <div class="text-center">
                        <p class="mb-0">Sina akaunti? <a href="{{ route('welcome') }}" class="text-primary">Jiunge nasi hapa</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            // Show/hide admin fields based on role selection
            $('input[name="role"]').change(function() {
                if ($(this).val() === 'admin') {
                    $('#adminFields').show();
                    $('#admin_code').prop('required', true);
                } else {
                    $('#adminFields').hide();
                    $('#admin_code').prop('required', false);
                }
            });
        });
    </script>
</body>
</html>