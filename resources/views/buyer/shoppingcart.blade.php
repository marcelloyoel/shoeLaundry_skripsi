@extends('partials.bodyPages')
@section('sidebar')
    @include('partials.sidebar')
@endsection
@section('container')
    {{-- <section>
        <div>
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-10">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h3 class="fw-normal mb-0 text-black">Shopping Cart</h3>
                        <div>
                            <p class="mb-0"><span class="text-muted">Sort by:</span> <a href="#!" class="text-body">price
                                    <i class="fas fa-angle-down mt-1"></i></a></p>
                        </div>
                    </div>
                    @if ($isEmpty == true)
                        <h5 class=" d-flex justify-content-center align-items-center">There are no data!</h5>
                    @endif
                    @foreach ($shops as $shopName => $items)
                        <div class="card">
                            <div class="card-header">
                                {{ $shopName }}
                            </div>

                            <ul class="list-group list-group-flush">
                                @foreach ($items as $item)
                                    <li class="list-group-item">{{ $item->name }} - {{ $item->price }} - Quantity:
                                        {{ $item->quantity }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section> --}}
    <section>
        <div class="container py-5">
            <div class="row d-flex justify-content-center my-4">
                <div class="col-md-8">
                    @if ($isEmpty == true)
                        <h5 class=" d-flex justify-content-center align-items-center">There are no data!</h5>
                    @endif
                    @foreach ($shops as $shopName => $items)
                        <div class="card mb-4">
                            <div class="card-header py-3">
                                <h5 class="mb-0">{{ $shopName }}</h5>
                            </div>
                            <div class="card-body">
                                <!-- Single item -->
                                @foreach ($items as $item)
                                    <div class="row">
                                        <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                                            <!-- Image -->
                                            <div class="bg-image hover-overlay hover-zoom ripple rounded"
                                                data-mdb-ripple-color="light">
                                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/12a.webp"
                                                    class="w-100" alt="Blue Jeans Jacket" />
                                                <a href="#!">
                                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)">
                                                    </div>
                                                </a>
                                            </div>
                                            <!-- Image -->
                                        </div>

                                        <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                                            <!-- Data -->
                                            <p><strong>{{ $item->name }}</strong></p>
                                            {{-- <p>Color: blue</p>
                                            <p>Size: M</p> --}}
                                            <button type="button" class="btn btn-primary btn-sm me-1 mb-2"
                                                data-mdb-toggle="tooltip" title="Remove item">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                            <button type="button" class="btn btn-danger btn-sm mb-2"
                                                data-mdb-toggle="tooltip" title="Move to the wish list">
                                                <i class="fas fa-heart"></i>
                                            </button>
                                            <!-- Data -->
                                        </div>

                                        {{-- <div class="col-lg-4 col-md-6 mb-4 mb-lg-0"> --}}
                                        <div class="col-lg-4 col-md-6 my-auto">
                                            <!-- Quantity -->
                                            <div class="d-flex mb-4">
                                                <button class="btn btn-primary mx-2"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                    <i class="fas fa-minus"></i>
                                                </button>

                                                <div class="form-outline mx-2">
                                                    <input id="form1" min="0" name="quantity"
                                                        value="{{ $item->quantity }}" type="number" class="form-control"
                                                        style="text-align: center;" />
                                                    {{-- <label class="form-label" for="form1">Quantity</label> --}}
                                                </div>

                                                <button class="btn btn-primary mx-2"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- Quantity -->

                                            <!-- Price -->
                                            <p class="text-start text-md-center">
                                                <strong>{{ $item->price }}</strong>
                                            </p>
                                            <!-- Price -->
                                        </div>
                                    </div>
                                    <!-- Single item -->

                                    <hr class="my-4" />
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-header py-3">
                            <h5 class="mb-0">Summary</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li
                                    class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                    Products
                                    <span>$53.98</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                    Shipping
                                    <span>Gratis</span>
                                </li>
                                <li
                                    class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                    <div>
                                        <strong>Total amount</strong>
                                        <strong>
                                            <p class="mb-0">(including VAT)</p>
                                        </strong>
                                    </div>
                                    <span><strong>$53.98</strong></span>
                                </li>
                            </ul>

                            <button type="button" class="btn btn-primary btn-lg btn-block">
                                Go to checkout
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
