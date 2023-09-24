@extends('partials.bodyPages')
@section('sidebar')
    @include('partials.sidebar')
@endsection
@section('container')
    {{-- <h1>Hello World!</h1>
    <p>Ini cuman mau ngetest aja sbenernya bisa ga sih bikin begini</p>
    <p>Halo ini test</p> --}}
    <div class="row">
        @foreach ($laundries as $laundry)
            <div class="col-sm-3">
                <div class="card mt-3" style="width: 18rem;">
                    <img src="image/shopimagedummy.png" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{ $laundry->laundrySepatuName }}</h5>
                        <p class="card-text">{{ Str::words($laundry->bio, 6, '...') }}</p>
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
@endsection
