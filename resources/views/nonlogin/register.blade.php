<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ $title }}</title>

    <!-- Custom fonts for this template-->
    <link href="/template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/template/css/sb-admin-2.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block"><img src="{{ asset('images/LogoWeb.jpg') }}"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form method="POST" action="/register" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control @error('username') is-invalid @enderror" id="username"
                                            value="{{ old('username') }}" name="username" required autofocus>
                                        @error('username')
                                            <div class="invalid-feedback mb-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="displayName">Display Name</label>
                                        <input type="displayName" class="form-control @error('displayName') is-invalid @enderror" id="displayName"
                                            value="{{ old('displayName') }}" name="displayName" required>
                                        @error('displayName')
                                            <div class="invalid-feedback mb-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="address">Address</label>
                                        <textarea class="form-control @error('address') is-invalid @enderror" id="address" rows="3" name="address">{{ old('address') }}</textarea>
                                        @error('address')
                                            <div class="invalid-feedback mb-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                            value="{{ old('email') }}" name="email">
                                        @error('email')
                                            <div class="invalid-feedback mb-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="phoneNumber">Phone Number</label>
                                        <input type="text" class="form-control @error('phoneNumber') is-invalid @enderror" id="phoneNumber"
                                            value="{{ old('phoneNumber') }}" name="phoneNumber">
                                        @error('phoneNumber')
                                            <div class="invalid-feedback mb-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                                            value="{{ old('password') }}" name="password">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="group_id">Role</label>
                                        <select class="form-control" id="group_id" name="group_id">
                                            <option value="1">Buyer</option>
                                            <option value="2">Laundry</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="picture">Profile Picture</label>
                                        <input type="file" class="form-control @error('picture') is-invalid @enderror" id="picture"
                                        value="{{ old('picture') }}" name="picture">
                                        @error('picture')
                                            <div class="invalid-feedback mb-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary my-3">Register</button>
                                </div>
                            {{-- @csrf
                                <div class="form-row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control @error('username') is-invalid @enderror" id="username"
                                            value="{{ old('username') }}" name="username" required autofocus>
                                        @error('username')
                                            <div class="invalid-feedback mb-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="displayName">Display Name</label>
                                        <input type="displayName" class="form-control @error('displayName') is-invalid @enderror" id="displayName"
                                            value="{{ old('displayName') }}" name="displayName" required>
                                        @error('displayName')
                                            <div class="invalid-feedback mb-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="address">Address</label>
                                        <textarea class="form-control @error('address') is-invalid @enderror" id="address" rows="3" name="address">{{ old('address') }}</textarea>
                                        @error('address')
                                            <div class="invalid-feedback mb-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                            value="{{ old('email') }}" name="email">
                                        @error('email')
                                            <div class="invalid-feedback mb-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="phoneNumber">Phone Number</label>
                                        <input type="text" class="form-control @error('phoneNumber') is-invalid @enderror" id="phoneNumber"
                                            value="{{ old('phoneNumber') }}" name="phoneNumber">
                                        @error('phoneNumber')
                                            <div class="invalid-feedback mb-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control  @error('password') is-invalid @enderror" id="password"
                                            value="{{ old('password') }}" name="password">
                                        @error('password')
                                            <div class="invalid-feedback mb-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-sm-6 mb-3 mb-sm-0 md-8">
                                        <label for="group_id">Role</label>
                                        <select class="form-control" id="group_id" name="group_id">
                                            <option value="1">Buyer</option>
                                            <option value="2">Laundry</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary my-3">Register Account</button>
                                </div>
                                </div> --}}
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="/forget">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="/">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
