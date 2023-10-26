@extends('partials.bodyPages')
@section('sidebar')
    @include('partials.sidebar')
@endsection
@section('container')
    <div class="row">
        @foreach ($laundries->sortBy(function ($laundry) use ($calculatedDistances) {
            return (float) str_replace(',', '', $calculatedDistances[$laundry->user_id] ?? PHP_INT_MAX);
        }) as $laundry)
            <div class="col-sm-3">
                <div class="card mt-3" style="width: 18rem;">
                    @if ($laundry->picture)
                        <img src="{{ asset('image/' . $laundry->picture) }}" class="card-img-top">
                    @else
                        <img src="{{ asset('image/shopimagedummy.png') }}" class="card-img-top">
                    @endif
                    {{-- <img src={{url('storage/image/shopimagedummy.png')}} class="card-img-top"> --}}
                    <div class="card-body">
                        <h5 class="card-title" style="font-weight: bold">{{ $laundry->laundrySepatuName }}</h5>
                        <p class="card-text">📌 : {{ Str::words($laundry->Address, 6, '...') }}</p>
                        {{-- <h6 class="card-text">📌 : {{ $laundry->Address }}</h6> --}}
                        <h6 class="card-text">☎ : {{ $laundry->Contact }}</h6>
                        <h6 class="card-text">📍 : {{ $calculatedDistances[$laundry->user_id] ?? 'Not available' }} </h6>
                        <a href="laundry/{{ $laundry->id }}" class="btn btn-primary">Laundry Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="row my-5">
        <div class="col-sm-12  d-flex justify-content-center">
            {{ $laundries->links() }}
        </div>
    </div>
    {{-- <script defer>
        if ('geolocation' in navigator) {
            navigator.geolocation.getCurrentPosition((position) => {
                const { latitude, longitude } = position.coords;

                // Send the user's location data to the server using AJAX
                fetch('/get-user-location', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': 'ptbRWJlBanDfJX5Fozo3EN3y440VGTODBdQYhVAC',
                    },
                    body: JSON.stringify({ latitude, longitude }),
                })
                .then(response => response.json())
                .then(data => {
                    console.log('After AJAX request');
                    console.log(data);
                })
                .catch(error => console.error('Error:', error));
            }, (error) => {
                console.error('Error getting user location:', error);
            });
        } else {
            console.log('Geolocation is not supported');
        }
    </script> --}}

@endsection
