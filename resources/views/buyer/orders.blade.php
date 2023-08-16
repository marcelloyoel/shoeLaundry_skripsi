@extends('partials.bodyPages')
@section('sidebar')
    @include('partials.sidebar')
@endsection
@section('container')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Order List</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official
            DataTables documentation</a>.</p>

    @if (session()->has('update'))
        <div class="alert alert-success" role="alert">
            {{ session('update') }}
        </div>
    @endif
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Order List</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered display" id="myTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Order's Id</th>
                                    <th>Ordered By</th>
                                    <th>Assigned To</th>
                                    <th>Max Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td class="sorting_1">{{ $order->id }}</td>
                                        <td>{{ $order->user->username }}</td>
                                        {{-- <td>{{ $order->laundrySepatu['laundrySepatuName'] }}</td> --}}
                                        <td>{{ $order->laundrySepatu->laundrySepatuName }}</td>
                                        <td>{{ $order->created_at->addWeek()->format('Y-m-d') }}</td>
                                        <td>
                                            @if ($order->status == 1)
                                                {{ 'Waiting' }}
                                            @elseif ($order->status == 2)
                                                {{ 'Accepted' }}
                                            @elseif ($order->status == 3)
                                                {{ 'Process' }}
                                            @elseif ($order->status == 4)
                                                {{ 'Done' }}
                                            @elseif ($order->status == 5)
                                                {{ 'Rejected' }}
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <a href="/orderlist/{{ $order->id }}"
                                                class="btn btn-primary btn-circle mx-2">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
