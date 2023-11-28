@extends('partials.bodyPages')
@section('sidebar')
    @include('partials.sidebar')
@endsection
@section('container')
    @if (session()->has('delete'))
        <div class="alert alert-success" role="alert">
            {{ session('delete') }}
        </div>
    @endif
    <section>
        <div class="container py-5">
            @if ($isEmpty == false)
                <div class="form-check">
                    <input class="form-check-input select-all-checkbox" type="checkbox" value="" id="select-all">
                    <label class="form-check-label" for="select-all">
                        Select All
                    </label>
                </div>
            @endif
            <div class="row d-flex justify-content-center my-4">
                <div class="col-md-8">
                    @if ($isEmpty == true)
                        <h5 class=" d-flex justify-content-center align-items-center">There are no data!</h5>
                    @endif
                    @foreach ($shops as $shopName => $shopDetails)
                        <?php
                        $shopName = $shopName;
                        $shopSlug = $shopDetails['shopSlug'];
                        $items = $shopDetails['items'];
                        ?>
                        <div class="card mb-4">
                            <div class="card-header py-3">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input shop-checkbox"
                                        id="shop-{{ $shopSlug }}">
                                    <label class="custom-control-label"
                                        for="shop-{{ $shopSlug }}">{{ $shopName }}</label>
                                </div>
                            </div>
                            <div class="card-body">
                                <!-- Single item -->
                                @foreach ($items as $item)
                                    <div class="row">
                                        <div class="col-lg-1 m-auto">
                                            <input type="checkbox" id="item-{{ $item->id }}" class="item-checkbox"
                                                data-shop="shop-{{ $shopSlug }}" data-price="{{ $item->price }}"
                                                data-qty="{{ $item->quantity }}" data-servicename="{{ $item->name }}"
                                                data-laundryname="{{ $shopName }}">
                                            <label style="display: none;"
                                                for="item-{{ $item->id }}">{{ $item->name }}</label>
                                        </div>
                                        <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                                            <!-- Image -->
                                            <div class="bg-image hover-overlay hover-zoom ripple rounded"
                                                data-mdb-ripple-color="light">
                                                <img src="/images/servicedummy.jpg" class="w-100" alt="service" />
                                                <a href="#!">
                                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)">
                                                    </div>
                                                </a>
                                            </div>
                                            <!-- Image -->
                                        </div>

                                        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                                            <!-- Data -->
                                            <p><strong>{{ $item->name }}</strong></p>
                                            {{-- <p>Color: blue</p>
                                            <p>Size: M</p> --}}
                                            <a type="button" href="/deleteCart/{{ $item->id }}/{{ Auth::id() }}"
                                                class="btn btn-danger btn-sm me-1 mb-2" data-mdb-toggle="tooltip"
                                                title="Remove item">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                            <!-- Data -->
                                        </div>

                                        {{-- <div class="col-lg-4 col-md-6 mb-4 mb-lg-0"> --}}
                                        <div class="col-lg-4 col-md-6 my-auto">
                                            <!-- Quantity -->
                                            <div class="d-flex mb-4">
                                                <button class="btn btn-primary mx-2"
                                                    onclick="buttonDown(this,{{ Auth::id() }},{{ $item->id }})">
                                                    <i class="fas fa-minus"></i>
                                                </button>

                                                <div class="form-outline mx-2">
                                                    <input id="form1" min="0" name="quantity"
                                                        value="{{ $item->quantity }}" type="number" class="form-control"
                                                        style="text-align: center;" />
                                                    {{-- <label class="form-label" for="form1">Quantity</label> --}}
                                                </div>

                                                <button class="btn btn-primary mx-2"
                                                    onclick="buttonUp(this,{{ Auth::id() }},{{ $item }})">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- Quantity -->

                                            <!-- Price -->
                                            <p class="text-start text-md-center">
                                                <strong class="price">{{ $item->price }}</strong>
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
                                    <span id="subtotal">{{ $subtotal }}</span>
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
                                    <span><strong id="total">{{ $total }}</strong></span>
                                </li>
                            </ul>
                            <form method="POST" action="/checkout">
                                @csrf
                                <input type="hidden" name="shopOrders" id="shopOrders">
                                <input type="hidden" name="totalOrder" id="totalOrder">
                                <button type="submit" class="btn btn-primary btn-lg btn-block" id="checkout">
                                    Go to checkout
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
