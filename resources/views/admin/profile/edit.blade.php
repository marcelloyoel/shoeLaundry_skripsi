@extends('partials.bodyPages')
@section('sidebar')
    @include('partials.sidebar')
@endsection
@section('container')
    <h2>User's Account</h2>
    <hr>
    <form method="POST" action="/admin/profile/{{ $user->id }}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="username">Username</label>
                <input type="text" class="form-control @error('username') is-invalid @enderror" id="username"
                    value="{{ old('username', $user->username) }}" name="username" required autofocus>
                @error('username')
                    <div class="invalid-feedback mb-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="displayName">Display Name</label>
                <input type="displayName" class="form-control @error('displayName') is-invalid @enderror" id="displayName"
                    value="{{ old('displayName', $user->displayName) }}" name="displayName" required>
                @error('displayName')
                    <div class="invalid-feedback mb-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="address">Address</label>
                <textarea class="form-control @error('address') is-invalid @enderror" id="address" rows="3" name="address">{{ old('address', $user->address) }}</textarea>
                @error('address')
                    <div class="invalid-feedback mb-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                    value="{{ $user->email }}" disabled>
                @error('email')
                    <div class="invalid-feedback mb-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="phoneNumber">Phone Number</label>
                <input type="text" class="form-control @error('phoneNumber') is-invalid @enderror" id="phoneNumber"
                    value="{{ old('phoneNumber', $user->phoneNumber) }}" name="phoneNumber">
                @error('phoneNumber')
                    <div class="invalid-feedback mb-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="exampleFormControlSelect1">Status</label>
                <select class="form-control" id="exampleFormControlSelect1" name="status">
                    <option value="1" {{ $user->status == 1 ? 'selected' : '' }}>Active</option>
                    <option value="2" {{ $user->status == 2 ? 'selected' : '' }}>Non-Active</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="group_id">Role</label>
                <select class="form-control" id="group_id" name="group_id">
                    <option value="1" {{ $user->group_id == 1 ? 'selected' : '' }}>Buyer</option>
                    <option value="2" {{ $user->group_id == 2 ? 'selected' : '' }}>Laundry</option>
                    <option value="3" {{ $user->group_id == 3 ? 'selected' : '' }}>Admin</option>
                    <option value="4" {{ $user->group_id == 4 ? 'selected' : '' }}>Super Admin</option>
                </select>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary my-3">Update Profile</button>
        </div>
    </form>
@endsection
