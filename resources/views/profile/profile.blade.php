<x-app-layout>
    <x-slot:title>
        Profile
    </x-slot>

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Account Profile</h3>
                    <p class="text-subtitle text-muted">A page where users can change profile information</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Profile</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        @session('status')
            <div class="alert alert-success alert-dismissible show fade"><i class="bi bi-check-circle"></i> Profile
                updated!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endsession
        <section class="section">
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-center align-items-center flex-column">
                                <div class="avatar avatar-2xl">
                                    @if ($user->avatar)
                                        <img src="{{ $user->avatar }}" alt="avatar" class="avatar-img rounded-circle">
                                    @else
                                        <img src="assets/static/images/faces/2.jpg" alt="Avatar">
                                    @endif
                                </div>

                                <h3 class="mt-3">{{ $user->name }}</h3>
                                <p class="text-small">{{ $user->email }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('profile.update', $user->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="form-group">
                                    <label for="avatar" class="form-label">Avatar</label>
                                    <input type="file" name="avatar" id="avatar" class="form-control"
                                        accept="image/*">
                                    @error('avatar')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        placeholder="Your Name" value="{{ $user->name }}">
                                    @error('name')
                                        @if ($message == 'The name field is required.')
                                            <span class="text-danger">{{ $message }}</span>
                                        @else
                                            <span class="text-danger">The name field must be at least 3
                                                characters.</span>
                                        @endif
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" name="email" id="email" class="form-control"
                                        placeholder="Your Email" value="{{ $user->email }}">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="text" name="phone" id="phone" class="form-control"
                                        placeholder="Your Phone" value="{{ $user->phone }}">
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" name="address" id="address" class="form-control"
                                        placeholder="Your Address" value="{{ $user->address }}">
                                    @error('address')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>
