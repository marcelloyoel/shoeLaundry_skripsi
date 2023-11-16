@extends('partials.bodyPages')
@section('sidebar')
    @include('partials.sidebar')
@endsection
@section('container')
    <h2>Edit Laundry Store</h2>
    <hr>
    {{-- <div id="laundry-edit-form"> --}}
        <form method="POST" action="/laundrysepatu/{{ $laundry->id }}" enctype="multipart/form-data">
            @csrf
            @method('put')
            {{-- <input type="hidden" name="group_id" id="hidden_group_id" value="2"> --}}
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="laundrySepatuName">Laundry Sepatu Name</label>
                    <input type="text" class="form-control @error('laundrySepatuName') is-invalid @enderror" id="laundrySepatuName"
                    value="{{ old('laundrySepatuName', $laundry->laundrySepatuName) }}" name="laundrySepatuName">
                    @error('laundrySepatuName')
                        <div class="invalid-feedback mb-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="laundrySepatuSlug">Laundry Sepatu Slug</label>
                    <input type="text" class="form-control @error('laundrySepatuSlug') is-invalid @enderror" id="laundrySepatuSlug"
                    value="{{ old('laundrySepatuSlug', $laundry->laundrySepatuSlug) }}" name="laundrySepatuSlug">
                    @error('laundrySepatuSlug')
                        <div class="invalid-feedback mb-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="bio">Laundry Sepatu Bio</label>
                    <textarea class="form-control @error('bio') is-invalid @enderror" rows="3" id="bio" name="bio">{{ old('bio', $laundry->bio) }}</textarea>
                    @error('bio')
                        <div class="invalid-feedback mb-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="Address">Laundry Sepatu Address</label>
                    <textarea class="form-control @error('Address') is-invalid @enderror" rows="3" id="Address"
                    name="Address">{{ old('Address', $laundry->Address) }}</textarea>
                    @error('Address')
                        <div class="invalid-feedback mb-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="Contact">Laundry Sepatu Contact</label>
                    <input type="text" class="form-control @error('Contact') is-invalid @enderror" id="Contact"
                    value="{{ old('Contact', $laundry->Contact) }}" name="Contact">
                    @error('Contact')
                        <div class="invalid-feedback mb-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="picture">Laundry Sepatu Picture</label>
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
                <button type="submit" class="btn btn-primary my-3">Update Laundry</button>
            </div>
        </form>
    {{-- </div> --}}
@endsection
