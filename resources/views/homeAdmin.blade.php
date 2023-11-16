@extends('partials.bodyPages')
@section('sidebar')
    @include('partials.sidebar')
@endsection
@section('container')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Profiles</h1>
    @if (session()->has('delete'))
        <div class="alert alert-success" role="alert">
            {{ session('delete') }}
        </div>
    @elseif (session()->has('update'))
        <div class="alert alert-success" role="alert">
            {{ session('update') }}
        </div>
    @elseif (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">User profile's</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                @if (Auth::user()->group_id == 4)
                    <div class="d-flex justify-content-end">
                        <a href="profile/create" class="btn btn-primary mb-3">Add New Profile</a>
                    </div>
                @endif
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered display" id="myTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>User's Id</th>
                                    <th>Username</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td class="sorting_1">{{ $user->id }}</td>
                                        <td>{{ $user->username }}</td>
                                        <td>{{ $user->group->groupName }}</td>
                                        <td></td>
                                        <td class="text-center">
                                            {{-- <div class="btn btn-warning btn-circle">
                                                <a href="">
                                                    <i class="fa-pencil" aria-hidden="true"></i>
                                                </a>
                                            </div> --}}
                                            <a href="/profile/{{ $user->id }}/edit"
                                                class="btn btn-warning btn-circle mx-2">
                                                <i class="far fa-edit"></i>
                                            </a>
                                            {{-- <div class="btn btn-danger btn-circle">
                                                <a href="">
                                                    <i class="fa-solid fa-trash"></i>
                                                </a>
                                            </div> --}}
                                            {{-- <a href="" class="btn btn-danger btn-circle">
                                                <i class="fas fa-trash"></i>
                                            </a> --}}
                                            <form action="/profile/{{ $user->id }}" method="POST" class="d-inline">
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
