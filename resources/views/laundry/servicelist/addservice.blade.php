@extends('partials.bodyPages')
@section('sidebar')
    @include('partials.sidebar')
@endsection
@section('container')
    <h2>Add New Service</h2>
    <hr>
    <form method="POST" action="/laundryservice" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="serviceName">Service Name</label>
                <input type="text" class="form-control @error('serviceName') is-invalid @enderror" id="serviceName"
                    value="{{ old('serviceName') }}" name="serviceName">
                @error('serviceName')
                    <div class="invalid-feedback mb-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="servicePrice">Service Price</label>
                <input type="text" class="form-control" id="servicePrice" value="{{ old('servicePrice') }}"
                    name="servicePrice">
                @error('servicePrice')
                    <div class="invalid-feedback mb-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="serviceDescription">Service Description</label>
                <textarea class="form-control @error('serviceDescription') is-invalid @enderror" id="serviceDescription" rows="3"
                    name="serviceDescription">{{ old('serviceDescription') }}</textarea>
                @error('serviceDescription')
                    <div class="invalid-feedback mb-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="status">Status</label>
                <select name="status" class="form-control" id="status">
                    <option value="1">Active</option>
                    <option value="0">Non-Active</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="serviceSlug">Service Slug</label>
                <input type="text" class="form-control" id="serviceSlug" value="{{ old('serviceSlug') }}"
                    name="serviceSlug">
                @error('serviceSlug')
                    <div class="invalid-feedback mb-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="servicePicture">Service Picture</label>
                <input type="file" class="form-control @error('servicePicture') is-invalid @enderror" id="servicePicture"
                value="{{ old('servicePicture') }}" name="servicePicture">
                @error('servicePicture')
                    <div class="invalid-feedback mb-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="d-flex justify-content-center mt-4">
            <button type="submit" class="btn btn-primary my-3">Add Service</button>
        </div>
    </form>
@endsection
