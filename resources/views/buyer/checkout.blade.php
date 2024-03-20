@extends('partials.bodyPages')
@section('sidebar')
    @include('partials.sidebar')
@endsection
@section('container')
    <?php
    $keys = array_keys($shops);
    ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Checkout Menu</h6>
        </div>
        <form action="/makeOrder" method="POST" enctype="multipart/form-data" id="submitForm">
            @csrf
            <input type="hidden" name="paymentStatus" id="paymentStatus-hidden" />
            <div class="card-body alertNih">
                <?php $jumlahToko = 0; ?>
                <script>
                    var jumlahToko = 0;
                </script>
                @foreach ($shops as $shopName => $shopData)
                    <?php $services = ''; ?>
                    <?php $jumlahToko += 1; ?>
                    <script>
                        jumlahToko += 1;
                    </script>
                    @foreach ($shopData as $index => $serviceData)
                        <?php
                        $services .= $serviceData['name'] . ', ';
                        ?>
                    @endforeach
                    <?php
                    $services = substr($services, 0, -2);
                    ?>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">{{ $shopName }}</h6>
                        </div>
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="merkSepatu-{{ $jumlahToko }}">Merk Sepatu</label>
                                    <input type="text" class="form-control merkSepatu"
                                        id="merkSepatu-{{ $jumlahToko }}" name="merkSepatu-{{ $jumlahToko }}"
                                        placeholder="Nike, Adidas, Atau Merk Sepatu Lainnya">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="jenisSepatu-{{ $jumlahToko }}">Jenis Sepatu</label>
                                    <input type="text" class="form-control jenisSepatu"
                                        id="jenisSepatu-{{ $jumlahToko }}" name="jenisSepatu-{{ $jumlahToko }}"
                                        placeholder="Misal Merk Sepatu Nike, Jenis Sepatu: Air Jordan">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="address-{{ $jumlahToko }}">Address</label>
                                    <textarea class="form-control address" id="address-{{ $jumlahToko }}" rows="3"
                                        name="address-{{ $jumlahToko }}">{{ Auth::user()->address }}</textarea>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="services-{{ $jumlahToko }}">Services</label>
                                    <textarea class="form-control" id="services-{{ $jumlahToko }}" rows="3" name="services-{{ $jumlahToko }}"
                                        disabled>{{ $services }}</textarea>
                                    <?php $serviceIds = []; ?>
                                    <?php $serviceTotalPrice = 0; ?>
                                    @foreach ($shopData as $index => $serviceData)
                                        <?php
                                        $serviceIds[] = $serviceData['idService'];
                                        $serviceTotalPrice = $serviceTotalPrice + $serviceData['price'];
                                        ?>
                                    @endforeach
                                    <input type="hidden" name="service_ids-{{ $jumlahToko }}"
                                        value="{{ json_encode($serviceIds) }}">
                                    <input type="hidden" name="tokoPrice-{{ $jumlahToko }}"
                                        value={{ $serviceTotalPrice }}>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="description-{{ $jumlahToko }}">Description</label>
                                    <textarea class="form-control" name="description-{{ $jumlahToko }}" id="description-{{ $jumlahToko }}"
                                        rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                        Products
                        <span id="subtotal">{{ $total }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                        Shipping
                        <span>Gratis</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                        <div>
                            <strong>Total amount</strong>
                            <strong>
                                <p class="mb-0">(including VAT)</p>
                            </strong>
                        </div>
                        <span><strong id="total">{{ $total }}</strong></span>
                        <input type="hidden" id="totalJs" name="totalOrderValue" value={{ intval($total) }}>
                        <input type="hidden" name="jumlahToko" value="{{ $jumlahToko }}">
                    </li>
                </ul>
                <button type="button" class="btn btn-primary btn-lg btn-block" id="orderButton">
                    Place Order
                </button>
            </div>
        </form>
    </div>
@endsection
