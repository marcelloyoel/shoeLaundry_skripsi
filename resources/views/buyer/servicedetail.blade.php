@extends('partials.bodyPages')
@section('sidebar')
    @include('partials.sidebar')
@endsection
@section('container')
    <div class="row d-flex flex-row">
        <div class="col-sm-6 bagianKiri d-flex justify-content-center align-items-center">
            <div class="bagianDalem">
                @if ($service->servicePicture)
                    <img src="{{ asset('image/' . $service->servicePicture) }}" class="card-img-top">
                @else
                    <img src="{{ asset('image/servicedummy.jpg') }}" class="card-img-top">
                @endif
            </div>
        </div>
        <div class="col-sm-6 bagianKanan">
            <div class="row1 my-3">
                <h4><strong>{{ $service->serviceName }}</strong></h4>
            </div>
            <div class="row1 my-3">
                <h6><Strong>Description : </Strong></h6>
                <h6>{{ $service->serviceDescription }}</h6>
            </div>
            <div class="row1 my-3">
                <h6><Strong>Service Slug : </Strong></h6>
                <h6>{{ $service->serviceSlug }}</h6>
            </div>
            <div class="row1 my-3">
                <h6><Strong>Price : </Strong></h6>
                <h6>{{ $service->servicePrice }}</h6>
            </div>
            <div class="row my-3">
                <a href="#" class="btn btn-primary">Buy Now</a>
                <a href="#" class="btn btn-primary ml-4">Add to Cart</a>
            </div>
        </div>
    </div>
@endsection
