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
            <div class="row my-3">
                <h4><strong>{{ $service->serviceName }}</strong></h4>
            </div>
            <div class="row my-3">
                <p><Strong>Description : </Strong></p>
                <p>{{ $service->serviceDescription}}</p>
            </div>
            <div class="row my-3">
                <p><Strong>Price : </Strong></p>
                <p>{{ $service->servicePrice}}</p>
            </div>
        </div>
@endsection
