@extends('partials.bodyPages')
@section('sidebar')
    @include('partials.sidebar')
@endsection
@section('container')
    <h2>Edit Profile</h2>
    <hr>
    <form method="POST" action="/profile/{{ $user->id }}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="username">Username</label>
                @if (Auth::user()->group_id == 3 || Auth::user()->group_id == 4)
                    <input type="text" class="form-control @error('username') is-invalid @enderror" id="username"
                        value="{{ old('username', $user->username) }}" name="username" required autofocus>
                @else
                    <input type="text" class="form-control @error('username') is-invalid @enderror" id="username"
                        value="{{ old('username', $user->username) }}" name="username" required autofocus disabled>
                @endif
                @error('username')
                    <div class="invalid-feedback mb-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="displayName">Display Name</label>
                {{-- @if ((Auth::user()->group_id != 4 && $user->group_id != 4) || Auth::user()->group_id == 4) --}}
                    <input type="displayName" class="form-control @error('displayName') is-invalid @enderror"
                        id="displayName" value="{{ old('displayName', $user->displayName) }}" name="displayName" required>
                {{-- @else
                    <input type="displayName" class="form-control @error('displayName') is-invalid @enderror"
                        id="displayName" value="{{ old('displayName', $user->displayName) }}" name="displayName" required
                        disabled>
                @endif --}}
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
                {{-- @if ((Auth::user()->group_id != 4 && $user->group_id != 4) || Auth::user()->group_id == 4) --}}
                    <textarea class="form-control @error('address') is-invalid @enderror" id="address" rows="3" name="address">{{ old('address', $user->address) }}</textarea>
                {{-- @else
                    <textarea class="form-control @error('address') is-invalid @enderror" id="address" rows="3" name="address"
                        disabled>{{ old('address', $user->address) }}</textarea>
                @endif --}}
                @error('address')
                    <div class="invalid-feedback mb-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                    value="{{ $user->email }}">
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
                {{-- @if ((Auth::user()->group_id != 4 && $user->group_id != 4) || Auth::user()->group_id == 4) --}}
                    <input type="text" class="form-control @error('phoneNumber') is-invalid @enderror" id="phoneNumber"
                        value="{{ old('phoneNumber', $user->phoneNumber) }}" name="phoneNumber">
                {{-- @else
                    <input type="text" class="form-control @error('phoneNumber') is-invalid @enderror" id="phoneNumber"
                        value="{{ old('phoneNumber', $user->phoneNumber) }}" name="phoneNumber" disabled>
                @endif --}}
                @error('phoneNumber')
                    <div class="invalid-feedback mb-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-6">
                @if (Auth::user()->group_id == 3 || Auth::user()->group_id == 4)
                    <label for="exampleFormControlSelect1">Status</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="status">
                        <option value="1" {{ $user->status == 1 ? 'selected' : '' }}>Active</option>
                        <option value="2" {{ $user->status == 2 ? 'selected' : '' }}>Non-Active</option>
                    </select>
                {{-- @else
                    <label for="exampleFormControlSelect1">Status</label>
                    <select disabled class="form-control" id="exampleFormControlSelect1" name="status">
                        <option value="1" {{ $user->status == 1 ? 'selected' : '' }}>Active</option>
                        <option value="2" {{ $user->status == 2 ? 'selected' : '' }}>Non-Active</option>
                    </select> --}}
                @endif
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                @if (Auth::user()->group_id == 3 || Auth::user()->group_id == 4)
                    <label for="group_id">Role</label>
                    <select class="form-control" id="group_id" name="group_id">
                        <option value="1" {{ $user->group_id == 1 ? 'selected' : '' }}>Buyer</option>
                        <option value="2" {{ $user->group_id == 2 ? 'selected' : '' }}>Laundry</option>
                        <option value="3" {{ $user->group_id == 3 ? 'selected' : '' }}>Admin</option>
                        @if (Auth::user()->group_id == 4)
                            <option value="4" {{ $user->group_id == 4 ? 'selected' : '' }}>Super Admin</option>
                        @endif
                    </select>
                @else
                    {{-- <label for="group_id">Role</label>
                    <select disabled class="form-control" id="group_id" name="group_id">
                        <option value="1" {{ $user->group_id == 1 ? 'selected' : '' }}>Buyer</option>
                        <option value="2" {{ $user->group_id == 2 ? 'selected' : '' }}>Laundry</option>
                        <option value="3" {{ $user->group_id == 3 ? 'selected' : '' }}>Admin</option>
                        <option value="4" {{ $user->group_id == 4 ? 'selected' : '' }}>Super Admin</option>
                    </select> --}}
                @endif
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary my-3">Update Profile</button>
        </div>
    </form>
@endsection
