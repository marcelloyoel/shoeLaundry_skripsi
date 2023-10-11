@extends('partials.bodyPages')
@section('sidebar')
    @include('partials.sidebar')
@endsection
@section('container')
    <div class="row d-flex flex-row">
        <div class="col-sm-6 bagianKiri d-flex justify-content-center align-items-center">
            <div class="bagianDalem">
                <img src="image/shopimagedummy.png">
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
            </div>
            <div class="row1 my-3">
                <h6><Strong>Alamat</Strong></h6>
                {{-- <br> --}}
                <p>{{ $laundry->Address }}</p>
            </div>
            <div class="row1 my-3">
                <h6><Strong>Contact</Strong></h6>
                <p>{{ $laundry->Contact }}</p>
            </div>
            <div class="row1 my-3">
                <h6><Strong>Distance</Strong></h6>
                <p>{{ $laundry->distance }}</p>
            </div>
            <div class="row1 my-3">
                <h6><Strong>Services</Strong></h6>
                {{-- <h5>{{ $service->id }}</h5> --}}
                <div class="rowhori my-3">
                    @foreach ($services as $service)
                        <a href="/serviceDetail/{{$service->id}}">
                            <button class="serviceBtn">
                            <h6>{{ $service->serviceName }}</h6>
                        </a>
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
