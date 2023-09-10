@extends('partials.bodyPages')
@section('sidebar')
    @include('partials.sidebar')
@endsection
@section('container')
    <div>
        <h1>{{ $service->serviceName }} </h1>
    </div>
@endsection
