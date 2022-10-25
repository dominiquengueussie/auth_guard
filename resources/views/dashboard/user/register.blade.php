<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
    <link rel="shortcut icon" href="{{ '/images/user.png' }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Register User</title>
</head>

<body>
    <div class="container mt-5">
        <div class="card col-md-8">
            <div class="card-header text-light bg-primary">
                <h1>User Register</h1>
            </div>
            <div class="mt-5 col-md-6 container">
                @if (Session::get('success'))
                    <div class="alert alert-success">{{ Session::get('success') }}</div>
                @endif
                @if (Session::get('fail'))
                    <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                @endif
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 offset-md-12">
                        <form action="{{ route('user.create') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" value="{{ old('name') }}" name="name"
                                    placeholder="Enter your name">
                            </div> <span class="text-danger">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </span><br>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" value="{{ old('email') }}" name="email"
                                    placeholder="Enter your email">
                            </div><span class="text-danger">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </span><br>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" value="{{ old('password') }}"
                                    name="password" placeholder="Enter your password">
                            </div><span class="text-danger">
                                @error('password')
                                    {{ $message }}
                                @enderror
                            </span><br>
                            <div class="form-group">
                                <label for="password">Confirm pasword</label>
                                <input type="password" class="form-control" value="{{ old('confirm-password') }}"
                                    name="confirm-password" placeholder="Confirm password">
                            </div><span class="text-danger">
                                @error('confirm-password')
                                    {{ $message }}
                                @enderror
                            </span><br>
                            <div>
                                <button type="submit" class="btn btn-outline-primary">Send</button>
                            </div>
                        </form><br>
                        <a class="text-decoration-none float-end fw-bolder"
                            href="{{ route('user.login') }}">Connexion.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
