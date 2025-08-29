@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">WanaSupport - Jiunge Nasi</h4>
                    <p class="small mb-0">Usaidizi wa kifedha na kitaaluma kwa wanafunzi wa vyuo</p>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Role Selection -->
                        <div class="mb-4 text-center">
                            <div class="btn-group" role="group">
                                <input type="radio" class="btn-check" name="role" id="student" value="student" checked>
                                <label class="btn btn-outline-primary" for="student">Mwanafunzi</label>

                                <input type="radio" class="btn-check" name="role" id="donor" value="donor">
                                <label class="btn btn-outline-primary" for="donor">Mfadhili</label>
                            </div>
                        </div>

                        <!-- Personal Information -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label">Jina Kamili</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="email" class="form-label">Barua Pepe</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Contact Information -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Namba ya Simu</label>
                                <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required>
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="password" class="form-label">Nenosiri</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="password-confirm" class="form-label">Thibitisha Nenosiri</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <!-- Student Specific Fields (shown by default) -->
                        <div id="studentFields">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="university" class="form-label">Chuo Kikuu</label>
                                    <select id="university" class="form-control @error('university') is-invalid @enderror" name="university">
                                        <option value="">Chagua Chuo Kikuu</option>
                                        <option value="Catholic University of Mbeya" {{ old('university') == 'Catholic University of Mbeya' ? 'selected' : '' }}>Catholic University of Mbeya</option>
                                        <option value="University of Dar es Salaam" {{ old('university') == 'University of Dar es Salaam' ? 'selected' : '' }}>University of Dar es Salaam</option>
                                        <option value="Mzumbe University" {{ old('university') == 'Mzumbe University' ? 'selected' : '' }}>Mzumbe University</option>
                                        <option value="Sokoine University of Agriculture" {{ old('university') == 'Sokoine University of Agriculture' ? 'selected' : '' }}>Sokoine University of Agriculture</option>
                                    </select>
                                    @error('university')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="course" class="form-label">Kozi</label>
                                    <input id="course" type="text" class="form-control @error('course') is-invalid @enderror" name="course" value="{{ old('course') }}">
                                    @error('course')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="year" class="form-label">Mwaka wa Masomo</label>
                                    <select id="year" class="form-control @error('year') is-invalid @enderror" name="year">
                                        <option value="">Chagua Mwaka</option>
                                        <option value="1" {{ old('year') == '1' ? 'selected' : '' }}>Mwaka wa Kwanza</option>
                                        <option value="2" {{ old('year') == '2' ? 'selected' : '' }}>Mwaka wa Pili</option>
                                        <option value="3" {{ old('year') == '3' ? 'selected' : '' }}>Mwaka wa Tatu</option>
                                        <option value="4" {{ old('year') == '4' ? 'selected' : '' }}>Mwaka wa Nne</option>
                                    </select>
                                    @error('year')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Donor Specific Fields (hidden by default) -->
                        <div id="donorFields" style="display: none;">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="organization" class="form-label">Shirika/Organisation (Ikipo)</label>
                                    <input id="organization" type="text" class="form-control @error('organization') is-invalid @enderror" name="organization" value="{{ old('organization') }}">
                                    @error('organization')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="occupation" class="form-label">Kazi yako</label>
                                    <input id="occupation" type="text" class="form-control @error('occupation') is-invalid @enderror" name="occupation" value="{{ old('occupation') }}">
                                    @error('occupation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Jiunge Sasa
                                </button>
                            </div>
                        </div>

                        <div class="text-center mt-3">
                            <p>Tayari una akaunti? <a href="{{ route('login') }}">Ingia hapa</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        // Show/hide fields based on selected role
        $('input[name="role"]').change(function() {
            if ($(this).val() === 'student') {
                $('#studentFields').show();
                $('#donorFields').hide();
            } else {
                $('#studentFields').hide();
                $('#donorFields').show();
            }
        });
    });
</script>
@endsection