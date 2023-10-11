<!-- @extends('partials.bodyPages')
@section('sidebar')
    @include('partials.sidebar')
@endsection
@section('container')
    <div class="card-body">
        <div class="table-responsive">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered display" id="myTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Service Name</th>
                                <th>Service Price</th>
                                <th>Quantity</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($database as $item)
                                <tr>
                                    <td class="sorting_1">{{ $item->service_id }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td>{{ $item->quantity }}</td>
                                    <td>{{ $item->price }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection -->