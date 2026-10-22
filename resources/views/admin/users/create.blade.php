@extends('admin.layout')

@section('content')
    <div class="row">
        <!-- Column 2: Selection & Validation -->
        <div class="col-12 col-lg-6">
            <form action="{{ route('users.store') }}" method="POST">

                @csrf

                <div class="card border-light shadow-sm p-4 h-100">
                    <h5 class="card-title mb-4">Tambah User</h5>

                    {{-- Username --}}
                    <div class="mb-0">
                        <label for="invalidInput" class="form-label-custom">Username</label>
                        <input name="name" type="text" placeholder="Username"
                            class="form-control-custom @error('name')
                        is-invalid-custom
                    @enderror"
                            id="invalidInput" value="{{ old('name') }}">
                        @error('name')
                            <div class="form-feedback-custom invalid-custom">
                                <i class="bi bi-exclamation-circle-fill"></i> {{ $message }}
                            </div>
                        @enderror

                    </div>

                    {{-- Email --}}
                    <div class="mb-0">
                        <label for="invalidInput" class="form-label-custom">Email</label>
                        <input type="email" placeholder="Email"
                            class="form-control-custom @error('email')
                        is-invalid-custom
                    @enderror"
                            id="invalidInput" name="email" value="{{ old('email') }}">
                        @error('email')
                            <div class="form-feedback-custom invalid-custom">
                                <i class="bi bi-exclamation-circle-fill"></i> {{ $message }}
                            </div>
                        @enderror

                    </div>

                    <!-- Password input -->
                    <div class="mb-3">
                        <label for="basicPassword" class="form-label-custom">Password</label>
                        <input type="password" placeholder="Password"
                            class="form-control-custom @error('password')
                            is-invalid-custom
                        @enderror"
                            id="basicPassword" name="password" value="{{ old('password') }}"
                            placeholder="Enter your secure password">
                        @error('password')
                            <div class="form-feedback-custom invalid-custom">
                                <i class="bi bi-exclamation-circle-fill"></i> {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <!-- Password Confirmation input -->
                    <div class="mb-3">
                        <label for="basicPassword" class="form-label-custom">Konfirmasi Password</label>
                        <input type="password" name="password_confirmation" placeholder="Password Confirmation"
                            value="{{ old('password_confirmation') }}"
                            class="form-control-custom @error('password_confirmation')
                            is-invalid-custom
                        @enderror"
                            id="basicPassword" placeholder="Enter your secure password">
                        @error('password_confirmation')
                            <div class="form-feedback-custom invalid-custom">
                                <i class="bi bi-exclamation-circle-fill"></i> {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- Role --}}
                    <div class="mb-3">
                        <label for="selectControl" class="form-label-custom">Role</label>
                        <select class="form-select-custom is-invalid-custom" name="role" id="selectControl">
                            <option selected disabled value="">Pilih Role</option>
                            <option value="admin">Admin</option>
                            <option value="super-admin">Super Admin</option>
                        </select>
                    </div>

                    {{-- Actions --}}
                    <div class="d-flex justify-content-end gap-2 border-top pt-4">
                        <a href="{{ route('users.index') }}" class="btn btn-light border">
                            <i class="bi bi-arrow-left me-1"></i>
                            Kembali
                        </a>

                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-check-circle me-1"></i>
                            Simpan User
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('togglePassword1').addEventListener('click', function() {
            const password = document.getElementById('password');
            const icon = document.getElementById('passwordIcon1');
            const isPassword = password.type === 'password';

            password.type = isPassword ? 'text' : 'password';
            icon.classList.toggle('bi-eye', !isPassword);
            icon.classList.toggle('bi-eye-slash', isPassword);

            this.setAttribute(
                'aria-label',
                isPassword ? 'Sembunyikan password' : 'Tampilkan password'
            );
        });

        document.getElementById('togglePassword2').addEventListener('click', function() {
            const password = document.getElementById('passwordConfirmation');
            const icon = document.getElementById('passwordIcon2');
            const isPassword = password.type === 'password';

            password.type = isPassword ? 'text' : 'password';
            icon.classList.toggle('bi-eye', !isPassword);
            icon.classList.toggle('bi-eye-slash', isPassword);

            this.setAttribute(
                'aria-label',
                isPassword ? 'Sembunyikan password' : 'Tampilkan password'
            );
        });
    </script>
@endsection
