@extends('partials.bodyPages')
@section('sidebar')
    @include('partials.sidebar')
@endsection
@section('container')
    <h2>Order Detail</h2>
    <hr>
    <form method="POST" action="/admin/order/{{ $order->id }}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="username">Ordered By</label>
                <input type="text" class="form-control" id="username" value="{{ $order->user->username }}" name="username"
                    disabled>
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
            <div class="form-group col-md-6">
                <label for="totalHarga">Total Harga</label>
                <input type="text" class="form-control" id="totalHarga" value="{{ $total }}" name="totalHarga"
                    disabled>
            </div>
            <div class="form-group col-md-6">
                <label for="status">Status</label>
                <select class="form-control" id="group_id" name="group_id" disabled>
                    <option value="1">Waiting</option>
                    <option value="2">Accepted</option>
                    <option value="3">Processing</option>
                    <option value="4">Done</option>
                    <option value="4">Rejected</option>
                </select>
            </div>
        </div>
        <div class="form-row mt-4">
            <div class="col-12 ngetest">
                <button type="button" onclick="window.history.back()" id="btnSubmit" class="btn btn-primary">Back</button>
            </div>
        </div>
    </form>
@endsection
