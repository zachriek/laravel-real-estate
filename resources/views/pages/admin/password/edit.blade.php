<x-admin-layout title="Change Password">
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Change Password</h1>
        </div>

        <div class="row">
            <div class="col-lg-6 col-md-8 col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('password.update') }}" method="POST">
                            @csrf
                            @method('PATCH')

                            {{-- Current Password --}}
                            <div class="form-group">
                                <label for="current_password">Current Password</label>
                                <input type="password"
                                    class="form-control @error('current_password') is-invalid @enderror"
                                    name="current_password" id="current_password">
                                @error('current_password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- New Password --}}
                            <div class="form-group">
                                <label for="password">New Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    name="password" id="password">
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- Confirm Password --}}
                            <div class="form-group">
                                <label for="password_confirmation">Confirm Password</label>
                                <input type="password"
                                    class="form-control @error('password_confirmation') is-invalid @enderror"
                                    name="password_confirmation" id="password_confirmation">
                                @error('password_confirmation')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="row mt-4 d-none d-md-flex">
                                <div class="col-12 d-md-flex justify-content-end align-items-center">
                                    <button type="submit" class="btn btn-sm btn-primary shadow-sm">
                                        <i class="fas fa-wrench fa-sm"></i>
                                        <span class="mx-1">Update</span>
                                    </button>
                                </div>
                            </div>
                            <div class="row mt-4 d-md-none">
                                <div class="col-12 mb-2">
                                    <button type="submit" class="btn btn-block btn-primary shadow-sm">
                                        <i class="fas fa-wrench fa-sm"></i>
                                        <span class="mx-1">Update</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
