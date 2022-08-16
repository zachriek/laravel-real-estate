<x-guest-layout title="Register">
    <div class="card">
        <div class="card-body">
            <h2 class="text-primary text-center mb-3" style="font-weight: 600;">Register</h2>
            <form action="{{ route('register.store') }}" method="POST">
                @csrf
                {{-- Name Input --}}
                <div class="form-group">
                    <label for="name" class="form-label text-light">Full Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        id="name" placeholder="Your name" value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Username Input --}}
                <div class="form-group">
                    <label for="username" class="form-label text-light">Username</label>
                    <input type="text" class="form-control @error('username') is-invalid @enderror" name="username"
                        id="username" placeholder="Your username" value="{{ old('username') }}">
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Email Input --}}
                <div class="form-group">
                    <label for="email" class="form-label text-light">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                        id="email" placeholder="Your email" value="{{ old('email') }}">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Password Input --}}
                <div class="form-group">
                    <label for="password" class="form-label text-light">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                        id="password" placeholder="Your password">
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Password Confirmation Input --}}
                <div class="form-group">
                    <label for="password_confirmation" class="form-label text-light">Confirm Password</label>
                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
                        name="password_confirmation" id="password_confirmation" placeholder="Confirm your password">
                    @error('password_confirmation')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-block btn-primary mt-5">Register</button>
                <a href="{{ route('login.index') }}" class="btn btn-block btn-outline-primary">Already have an
                    account?</a>
            </form>
        </div>
    </div>
</x-guest-layout>
