@extends('partials.bodyPages')
@section('sidebar')
    @include('partials.sidebar')
@endsection
@section('container')
    <button id="getLocation">Get My Location</button>
    <div class="row">
        <div class="col-md-6">
            <form action="{{ route('update-address') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="address">Enter Address:</label>
                    <input type="text" class="form-control" id="address" name="address">
                </div>
                <button type="submit" class="btn btn-primary">Update Address</button>
            </form>
        </div>
    </div>
    <div class="row">
        @foreach ($laundries->sortBy(function ($laundry) use ($calculatedDistances) {
            return (float) str_replace(',', '', $calculatedDistances[$laundry->user_id] ?? PHP_INT_MAX);
        }) as $laundry)
            <div class="col-sm-3">
                <div class="card mt-3" style="width: 18rem;">
                    @if ($laundry->picture)
                        <img src="{{ asset('images/' . $laundry->picture) }}" class="card-img-top">
                    @else
                        <img src="{{ asset('images/shopimagedummy.png') }}" class="card-img-top">
                    @endif
                    {{-- <img src={{url('storage/image/shopimagedummy.png')}} class="card-img-top"> --}}
                    <div class="card-body">
                        <h5 class="card-title" style="font-weight: bold">{{ $laundry->laundrySepatuName }}</h5>
                        <h6 class="card-text">📌 : {{ Str::words($laundry->Address, 6, '...') }}</h6>
                        {{-- <h6 class="card-text">📌 : {{ $laundry->Address }}</h6> --}}
                        <h6 class="card-text">☎ : {{ $laundry->Contact }}</h6>
                        <h6 class="card-text">📍 : {{ $calculatedDistances[$laundry->user_id] ?? 'Not available' }} </h6>
                        <a href="laundry/{{ $laundry->id }}" class="btn btn-primary mt-2">Laundry Detail</a>
                    </div>
                </div>
            </div>
        @endforeach

        <div class="col-md-12 d-flex justify-content-center mt-4">
            <nav aria-label="Page navigation">
                <ul class="pagination">

                    <!-- Previous Page Link -->
                    @if ($laundries->onFirstPage())
                        <li class="page-item disabled">
                            <span class="page-link">&laquo; Previous</span>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $laundries->previousPageUrl() }}" rel="prev">&laquo; Previous</a>
                        </li>
                    @endif

                    <!-- Next Page Link -->
                    @if ($laundries->hasMorePages())
                        <li class="page-item">
                            <a class="page-link" href="{{ $laundries->nextPageUrl() }}" rel="next">Next &raquo;</a>
                        </li>
                    @else
                        <li class="page-item disabled">
                            <span class="page-link">Next &raquo;</span>
                        </li>
                    @endif
                </ul>
            </nav>
        </div>

    </div>

@endsection
