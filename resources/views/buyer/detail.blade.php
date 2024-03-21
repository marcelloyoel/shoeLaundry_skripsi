@extends('partials.bodyPages')
@section('sidebar')
    @include('partials.sidebar')
@endsection
@section('container')
    <h2>Order Detail</h2>
    <hr>
    <form method="POST" action="/orderlist/{{ $order->id }}" enctype="multipart/form-data" id="submitForm">
        @method('put')
        @csrf
        <input type="hidden" name="paymentStatus" id="paymentStatus-hidden" />
        <input type="hidden" value="{{ $order->harga }}" name="price">
        <input type="hidden" value="{{ $order->id }}" name="orderId">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="username">Ordered By</label>
                <input type="text" class="form-control" id="username" value="{{ $order->user->username }}"
                    name="username" disabled>
            </div>
            <div class="form-group col-md-6">
                <label for="timestamp">Tanggal Berlaku Sampai</label>
                <input type="timestamp" class="form-control" id="timestamp"
                    value="{{ $order->created_at->addWeek()->format('Y-m-d') }}" name="timestamp" disabled>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="selectMultipleStatus">Services</label>
                <select disabled name="service" multiple class="form-control selectpicker" id="selectMultipleStatus"
                    data-live-search="true" required>
                    {{-- <option value="option1">1</option> --}}
                    @foreach ($allService as $s)
                        @php
                            $isSelected = false;
                        @endphp

                        @foreach ($services as $service)
                            @if ($service->id == $s->id)
                                @php
                                    $isSelected = true;
                                @endphp
                            @endif
                        @endforeach

                        <option {{ $isSelected ? 'selected' : '' }} value="{{ $s->id }}">{{ $s->serviceName }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="address">Address</label>
                <textarea class="form-control" id="address" rows="3" name="address" disabled>{{ $order->address }}</textarea>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="merkSepatu">Merk Sepatu</label>
                <input type="text" class="form-control" id="merkSepatu" value="{{ $order->merkSepatu }}"
                    name="merkSepatu" disabled>
            </div>
            <div class="form-group col-md-6">
                <label for="jenisSepatu">Jenis Sepatu</label>
                <input type="text" class="form-control" id="jenisSepatu" value="{{ $order->jenisSepatu }}"
                    name="jenisSepatu" disabled>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" rows="3" name="description" disabled>{{ $order->description }}</textarea>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="totalHarga">Total Harga</label>
                <input type="text" class="form-control" id="totalHarga" value="{{ $order->harga }}" name="price"
                    disabled>
            </div>
            <div class="form-group col-md-6">
                <label for="status">Status</label>
                <select class="form-control" id="group_id" name="group_id" disabled>
                    <option value="9" {{ $order->status == -1 ? 'selected' : '' }}>Waiting for Payment</option>
                    <option value="1" {{ $order->status == 1 ? 'selected' : '' }}>Waiting</option>
                    <option value="2" {{ $order->status == 2 ? 'selected' : '' }}>Accepted</option>
                    <option value="3" {{ $order->status == 3 ? 'selected' : '' }}>Brushing Sole</option>
                    <option value="4" {{ $order->status == 4 ? 'selected' : '' }}>Brushing Insole and Shoelace
                    </option>
                    <option value="5" {{ $order->status == 5 ? 'selected' : '' }}>Removing Stains</option>
                    <option value="6" {{ $order->status == 6 ? 'selected' : '' }}>Quality Control</option>
                    <option value="7" {{ $order->status == 7 ? 'selected' : '' }}>Awaiting Pickup</option>
                    <option value="8" {{ $order->status == 8 ? 'selected' : '' }}>Finished</option>
                    <option value="9" {{ $order->status == 9 ? 'selected' : '' }}>Rejected</option>
                </select>
            </div>
        </div>
        @if ($order->status != -1)
            <div class="form-row mt-4">
                <div class="col-12 ngetest">
                    <button type="button" onclick="window.history.back()" id="btnSubmit"
                        class="btn btn-primary">Back</button>
                </div>
            </div>
        @else
            <div class="d-flex justify-content-center mt-4">
                <button type="button" id="btnPayment" class="btn btn-primary">Payment</button> &nbsp;
                <button type="button" id="btnCancel" onclick="cancelOrder()" class="btn btn-danger">Cancel Order</button>
            </div>
        @endif
    </form>

    <script>
        console.log('wkwk malas baru');

        var totalHargaAjax = document.getElementById('totalHarga').value;
        console.log(totalHargaAjax);

        function generateToken() {
            $.ajax({
                url: '/generateToken',
                type: 'POST',
                data: {
                    price: totalHargaAjax
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    tokenHasil = response;
                    window.snap.pay(tokenHasil, {
                        onSuccess: function(result) {
                            /* You may add your own implementation here */
                            alert("payment success!");
                            console.log(result);
                            document.getElementById('btnPayment').disabled = true;
                            document.getElementById('btnCancel').disabled = true;
                            document.getElementById('paymentStatus-hidden').value = 1;
                            document.getElementById('submitForm').submit();
                        },
                        onPending: function(result) {
                            /* You may add your own implementation here */
                            alert("wating your payment!");
                            console.log(result);
                        },
                        onError: function(result) {
                            /* You may add your own implementation here */
                            alert("payment failed!");
                            console.log(result);
                        },
                        onClose: function() {
                            /* You may add your own implementation here */
                            alert('you closed the popup without finishing the payment');
                        }
                    })
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(jqXHR);
                    alert('There was an error generating the transaction token.');
                    // token = 0;
                }
            });

            // return token;
        }

        document.getElementById('btnPayment').addEventListener('click', function() {
            generateToken();
        });
        document.getElementById('btnCancel').addEventListener('click', function() {
            document.getElementById('btnPayment').disabled = true;
            document.getElementById('btnCancel').disabled = true;
            document.getElementById('paymentStatus-hidden').value = -99;
            document.getElementById('submitForm').submit();
        });
    </script>
@endsection
