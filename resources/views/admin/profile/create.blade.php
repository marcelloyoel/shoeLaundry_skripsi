@extends('partials.bodyPages')
@section('sidebar')
    @include('partials.sidebar')
@endsection
@section('container')
    <h2>Create Account</h2>
    <hr>
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="role">Role</label>
            <select class="form-control" id="role" name="group_id">
                <option value="1">Buyer</option>
                <option value="2">Shoe Laundry Store</option>
            </select>
        </div>
    </div>

    {{-- BUYER FORM --}}
    <div id="buyer-form">
        <form method="POST" action="/profile" enctype="multipart/form-data">
            @csrf
            <div class="text-left">
                <h1 class="h4 text-gray-900 mb-4">User Data</h1>
            </div>
            <input type="hidden" name="group_id" id="hidden_group_id" value="1">
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
                    <label for="password">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                        value="{{ old('password') }}" name="password">
                </div>
            </div>
            <div class="form-row">
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
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary my-3">Register</button>
            </div>
        </form>
    </div>

    {{-- LAUNDRY FORM --}}
    <div id="laundry-form" style="display: none">
        <form method="POST" action="/profile" enctype="multipart/form-data">
            @csrf
            <div class="text-left">
                <h1 class="h4 text-gray-900 mb-4">User Data</h1>
            </div>
            <input type="hidden" name="group_id" id="hidden_group_id" value="2">
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
                    <label for="password">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                        value="{{ old('password') }}" name="password">
                </div>
            </div>
            <div class="form-row">
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
            <div class="text-left">
                <h1 class="h4 text-gray-900 mt-4">Shoe Laundry Store Data</h1>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="laundry-laundrySepatuName">Laundry Sepatu Name</label>
                    <input type="text" class="form-control @error('laundry-laundrySepatuName') is-invalid @enderror" id="laundry-laundrySepatuName"
                    value="{{ old('laundry-laundrySepatuName') }}" name="laundry-laundrySepatuName">
                    @error('laundry-laundrySepatuName')
                        <div class="invalid-feedback mb-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="laundry-laundrySepatuSlug">Laundry Sepatu Slug</label>
                    <input type="text" class="form-control @error('laundry-laundrySepatuSlug') is-invalid @enderror" id="laundry-laundrySepatuSlug"
                    value="{{ old('laundry-laundrySepatuSlug') }}" name="laundry-laundrySepatuSlug">
                    @error('laundry-laundrySepatuSlug')
                        <div class="invalid-feedback mb-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="laundry-bio">Laundry Sepatu Bio</label>
                    <textarea class="form-control @error('laundry-bio') is-invalid @enderror" id="laundry-bio"
                    value="{{ old('laundry-bio') }}" name="laundry-bio"></textarea>
                    @error('laundry-bio')
                        <div class="invalid-feedback mb-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="laundry-address">Laundry Sepatu Address</label>
                    <textarea class="form-control @error('laundry-address') is-invalid @enderror" id="laundry-address"
                    value="{{ old('laundry-address') }}" name="laundry-address"></textarea>
                    @error('laundry-address')
                        <div class="invalid-feedback mb-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="laundry-contact">Laundry Sepatu Contact</label>
                    <input type="text" class="form-control @error('laundry-contact') is-invalid @enderror" id="laundry-contact"
                    value="{{ old('laundry-contact') }}" name="laundry-contact">
                    @error('laundry-contact')
                        <div class="invalid-feedback mb-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="laundry-picture">Laundry Sepatu Picture</label>
                    <input type="file" class="form-control @error('laundry-picture') is-invalid @enderror" id="laundry-picture"
                    value="{{ old('laundry-picture') }}" name="laundry-picture">
                    @error('laundry-picture')
                        <div class="invalid-feedback mb-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary my-3">Register</button>
            </div>
        </form>
    </div>
@endsection
