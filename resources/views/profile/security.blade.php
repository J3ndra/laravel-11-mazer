<x-app-layout>
    <x-slot:title>
        Profile
    </x-slot>

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Account Security</h3>
                    <p class="text-subtitle text-muted">A page where this page can change account security settings</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Security</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        @session('status')
            <div class="alert alert-success alert-dismissible show fade"><i class="bi bi-check-circle"></i> Password
                updated!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>
        @endsession
        <section class="section">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Change Password</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('password.update') }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group my-2">
                                    <label for="current_password" class="form-label">Current Password</label>
                                    <input type="password" name="current_password" id="current_password"
                                        class="form-control" placeholder="Enter your current password">
                                    @error('current_password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group my-2">
                                    <label for="password" class="form-label">New Password</label>
                                    <input type="password" name="password" id="password" class="form-control"
                                        placeholder="Enter new password" value="">
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group my-2">
                                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                                    <input type="password" name="password_confirmation" id="password_confirmation"
                                        class="form-control" placeholder="Enter confirm password" value="">
                                    @error('password_confirmation')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group my-2 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Two Factor Authentication</h5>
                        </div>
                        <div class="card-body">
                            <form action="#" method="get">
                                <div class="form-group my-2">
                                    <label for="email" class="form-label">Current Email</label>
                                    <input type="email" name="email" id="email" class="form-control"
                                        placeholder="Enter your current email" value="john.doe@example.net">
                                </div>

                                <div class="form-group my-2 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Delete Account</h5>
                        </div>
                        <div class="card-body">
                            <form action="#" method="get">
                                <p>Your account will be permanently deleted and cannot be restored, click "Touch me!" to
                                    continue</p>
                                <div class="form-check">
                                    <div class="checkbox">
                                        <input type="checkbox" id="iaggree" class="form-check-input">
                                        <label for="iaggree">Touch me! If you agree to delete permanently</label>
                                    </div>
                                </div>
                                <div class="form-group my-2 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-danger" id="btn-delete-account"
                                        disabled>Delete</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>
