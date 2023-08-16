@extends('partials.bodyPages')
@section('sidebar')
    @include('partials.sidebar')
@endsection
@section('container')
    <h2>Service Detail</h2>
    <hr>
    <form method="POST" action="/laundryservice/{{ $service->id }}" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="serviceName">Service Name</label>
                <input type="text" class="form-control" id="serviceName"
                    value="{{ old('serviceName', $service->serviceName) }}" name="serviceName">
            </div>
            <div class="form-group col-md-6">
                <label for="servicePrice">Service Price</label>
                <input type="text" class="form-control" id="servicePrice"
                    value="{{ old('servicePrice', $service->servicePrice) }}" name="servicePrice">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="status">Status</label>
                <select name="status" class="form-control" id="status">
                    <option value="1">Active</option>
                    <option value="0">Non-Active</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="serviceDescription">Service Description</label>
                <textarea class="form-control" id="serviceDescription" rows="3" name="serviceDescription">{{ old('serviceDescription', $service->serviceDescription) }}</textarea>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-4">
            <button type="submit" class="btn btn-primary my-3">Update Order</button>
        </div>
    </form>
@endsection
