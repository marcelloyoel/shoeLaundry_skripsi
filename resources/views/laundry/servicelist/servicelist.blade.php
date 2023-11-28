@extends('partials.bodyPages')
@section('sidebar')
    @include('partials.sidebar')
@endsection
@section('container')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Service List</h1>
    @if (session()->has('update'))
        <div class="alert alert-success" role="alert">
            {{ session('update') }}
        </div>
    @elseif (session()->has('delete'))
        <div class="alert alert-success" role="alert">
            {{ session('delete') }}
        </div>
    @elseif (session()->has('new'))
        <div class="alert alert-success" role="alert">
            {{ session('new') }}
        </div>
    @endif
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        {{-- <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Service List</h6>
        </div> --}}
        <div class="card-body">
            <div class="table-responsive">
                <div class="d-flex justify-content-end">
                    <a href="laundryservice/create" class="btn btn-primary mb-3">Add New Service</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered display" id="myTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Service's Id</th>
                                    <th>Service Name</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($services as $service)
                                    <tr>
                                        <td class="sorting_1">{{ $service->id }}</td>
                                        <td>{{ $service->serviceName }}</td>
                                        {{-- <td>{{ $service->laundrySepatu['laundrySepatuName'] }}</td> --}}
                                        <td>{{ $service->servicePrice }}</td>
                                        <td>
                                            @if ($service->status == true)
                                                {{ 'Active' }}
                                            @else
                                                {{ 'Non-Active' }}
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <a href="/laundryservice/{{ $service->id }}/edit"
                                                class="btn btn-warning btn-circle mx-2">
                                                <i class="fa fa-edit" aria-hidden="true"></i>
                                            </a>
                                            <form action="/laundryservice/{{ $service->id }}" method="POST"
                                                class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-danger btn-circle" type="submit"
                                                    onclick="return confirm('Are you sure?')"><i
                                                        class="fas fa-trash"></i></button>
                                            </form>
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
