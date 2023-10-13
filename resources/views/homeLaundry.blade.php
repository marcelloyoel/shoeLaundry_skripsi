@extends('partials.bodyPages')
@section('sidebar')
    @include('partials.sidebar')
@endsection
@section('container')
    <div class="row d-flex flex-row">
        <div class="col-sm-6 bagianKiri d-flex justify-content-center align-items-center">
            <div class="bagianDalem">
                @if ($laundry->picture)
                    <img src="{{ asset('image/' . $laundry->picture) }}" class="card-img-top">
                @else
                    <img src="{{ asset('image/shopimagedummy.png') }}" class="card-img-top">
                @endif
            </div>
        </div>
        <div class="col-sm-6 bagianKanan">
            <div class="row my-3">
                <h4><strong>{{ $laundry->laundrySepatuName }}</strong></h4>
            </div>
            <div class="row1 my-3">
                <h6><Strong>Slug</Strong>:</h6>
                <h6>{{ $laundry->laundrySepatuSlug }}</h6>
            </div>
            <div class="row1 my-3">
                <h6><Strong>Description</Strong>:</h6>
                <h6>{{ $laundry->bio }}</h6>
            </div>
            <div class="row1 my-3">
                <h6><Strong>Contact</Strong>:</h6>
                <h6>{{ $laundry->Contact }}</h6>
            </div>
            <div class="row1 my-3">
                <h6><Strong>Distance</Strong>:</h6>
                <h6>{{ $laundry->distance }}</h6>
            </div>
            <div class="row1 my-3">
                <h6><Strong>Address</Strong>:</h6>
                <h6>{{ $laundry->Address }}</h6>
            </div>
            <div class="row1 my-3">
                <h6><Strong>Services</Strong></h6>
                <div class="rowhori my-3">
                    @foreach ($services as $service)
                        {{-- <h5>{{ $service->id }}</h5> --}}
                        <div>
                            <a href="/service/{{$service->id}}">
                                <button class="serviceBtn">
                                <h6>{{ $service->serviceName }}</h6>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
