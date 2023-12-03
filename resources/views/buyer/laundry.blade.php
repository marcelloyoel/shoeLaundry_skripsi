@extends('partials.bodyPages')
@section('sidebar')
    @include('partials.sidebar')
@endsection
@section('container')
    <div class="row d-flex flex-row">
        <div class="col-sm-6 bagianKiri d-flex justify-content-center align-items-center">
            <div class="bagianDalem">
                @if ($laundry->picture)
                    <img src="{{ asset('images/' . $laundry->picture) }}" class="card-img-top">
                @else
                    <img src="{{ asset('images/shopimagedummy.png') }}" class="card-img-top">
                @endif
                {{-- <img src={{url('storage/image/shopimagedummy.png')}}> --}}
            </div>
        </div>
        <div class="col-sm-6 bagianKanan">
            <div class="row1 my-3">
                <h4><strong>{{ $laundry->laundrySepatuName }}</strong></h4>
            </div>
            <div class="row1 my-3">
                <h6><Strong>Description</Strong></h6>
                <p>{{ $laundry->bio }}</p>
                <h6><Strong>Alamat</Strong></h6>
                {{-- <br> --}}
                <p>{{ $laundry->Address }}</p>
                <h6><Strong>Contact</Strong></h6>
                <p>{{ $laundry->Contact }}</p>
                {{-- <h6><Strong>Distance</Strong></h6>
                <p>{{ $laundry->distance }}</p> --}}
            </div>
            <div class="row1 my-3">
                <h6><Strong>Services</Strong></h6>
                <div class="row my-3">
                    @foreach ($services as $service)
                        {{-- <h5>{{ $service->id }}</h5> --}}
                        <div class="col-sm-4">
                            <div class="card mt-3" style="width: 10rem;">
                                <div class="card-body">
                                    <a href="/serviceDetail/{{ $service->id }}">
                                        <button class="serviceBtn">
                                            <h6 class="card-title">{{  $service->serviceName }}</h6>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-12 ngetest">
            <button type="button" onclick="window.history.back()" id="btnSubmit" class="btn btn-primary">Back</button>
        </div>
    </div>
@endsection
