@extends('partials.bodyPages')
@section('sidebar')
    @include('partials.sidebar')
@endsection
@section('container')
    <h2>Create Account</h2>
    <hr>
    <form method="POST" action="/profile" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="username">Username</label>
                <input type="text" class="form-control @error('username') is-invalid @enderror" id="username"
                    value="{{ old('username') }}" name="username" required autofocus>
                @error('username')
                    <div class="invalid-feedback mb-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="displayName">Display Name</label>
                <input type="displayName" class="form-control @error('displayName') is-invalid @enderror" id="displayName"
                    value="{{ old('displayName') }}" name="displayName" required>
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
                <textarea class="form-control @error('address') is-invalid @enderror" id="address" rows="3" name="address">{{ old('address') }}</textarea>
                @error('address')
                    <div class="invalid-feedback mb-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                    value="{{ old('email') }}" name="email">
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
                    value="{{ old('phoneNumber') }}" name="phoneNumber">
                @error('phoneNumber')
                    <div class="invalid-feedback mb-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="picture">Profile Picture</label>
                <input type="file" class="form-control @error('picture') is-invalid @enderror" id="picture"
                value="{{ old('picture') }}" name="picture">
                @error('picture')
                    <div class="invalid-feedback mb-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="group_id">Role</label>
                <select class="form-control" id="group_id" name="group_id">
                    <option value="1">Buyer</option>
                    <option value="2">Laundry</option>
                    <option value="3">Admin</option>
                    <option value="4">Super Admin</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="exampleFormControlSelect1">Status</label>
                <select class="form-control" id="exampleFormControlSelect1" name="status">
                    <option value="1">Active</option>
                    <option value="2">Non-Active</option>
                </select>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary my-3">Add Profile</button>
        </div>
    </form>
@endsection
