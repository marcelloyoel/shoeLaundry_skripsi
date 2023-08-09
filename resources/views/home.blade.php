@extends('partials.bodyPages')
@section('sidebar')
    @include('partials.sidebar')
@endsection
@section('container')
    <h1>Hello World!</h1>
    <p>Ini cuman mau ngetest aja sbenernya bisa ga sih bikin begini</p>
    <p>Halo ini test</p>
    <div class="row">
        @foreach ($laundries as $laundry)
            <div class="col-sm-4">
                <div class="card mt-5" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $laundry->laundrySepatuName }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <p class="card-text">{{ $laundry->bio }}</p>
                        {{-- <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a> --}}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
