@extends('partials.bodyPages')
@section('sidebar')
    @include('partials.sidebar')
@endsection
@section('container')
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
    </div>

@endsection
