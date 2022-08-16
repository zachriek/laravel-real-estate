<x-guest-layout title="Login">
    <div class="card">
        <div class="card-body">
            <h2 class="text-primary text-center mb-3" style="font-weight: 600;">Login</h2>
            <form action="{{ route('login.store') }}" method="POST">
                @csrf
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

                <button type="submit" class="btn btn-block btn-primary mt-5">Login</button>
                <a href="{{ route('register.index') }}" class="btn btn-block btn-outline-primary">Don't have an
                    account?</a>
            </form>
        </div>
    </div>
</x-guest-layout>
