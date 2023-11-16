@extends('partials.bodyPages')
@section('sidebar')
    @include('partials.sidebar')
@endsection
@section('container')
    <div class="row d-flex flex-row">
        <div class="col-sm-6 bagianKiri d-flex justify-content-center align-items-center">
            <div class="bagianDalem">
                @if ($service->servicePicture)
                    <img src="{{ asset('images/' . $service->servicePicture) }}" class="card-img-top">
                @else
                    <img src="{{ asset('images/servicedummy.jpg') }}" class="card-img-top">
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
                <h6 id="price">{{ $service->servicePrice }}</h6>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form method="POST" action="/buyNow">
                        @csrf
                        <input type="hidden" name="service" id="service" value="{{ $service }}">
                        <button type="submit" class="btn btn-primary ml-4" id="buynow" style="width: 50%;">
                            Buy Now
                        </button>
                    </form>
                </div>
                <div class="col-lg-12">
                    <button style="width: 50%;" type="button" onclick="addToCart()" id="btnAddToCart"
                        class="btn btn-primary ml-4">Add to
                        Cart</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <?php
        echo "<script>
                                                                                                                                                                                                                                                                                                                                                                                                    var authId = " .
            Auth::id() .
            ";
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        var servicePrice = '" .
            $service->servicePrice .
            "';
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            var service = '" .
            json_encode($service) .
            "';
                                                                                                                                                                                                                                                                                                                                                                                                            var laundrySepatuName = '" .
            $service->laundrySepatu->laundrySepatuName .
            "';
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </script>";
        ?>
    </div>
    <div class="row mt-4">
        <div class="col-12 ngetest">
            <button type="button" onclick="window.history.back()" id="btnSubmit" class="btn btn-primary">Back</button>
        </div>
    </div>
@endsection
