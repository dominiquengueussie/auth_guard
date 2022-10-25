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
    <title>Login User</title>
</head>

<body>
    <div class="container mt-5">
        <div class="card col-md-8">
            <div class="card-header bg-primary text-light">
                <h1>User Login</h1>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <form action="{{ route('login') }}" method="POST">
                            <div class="mt-5 col-md-8 container">
                                @if (Session::get('fail'))
                                    <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                                @endif
                            </div>
                            @csrf
                            <div class="form-group">
                                <label class="text-black" for="email">Email</label>
                                <input type="email" class="form-control" value="{{ old('email') }}" name="email"
                                    placeholder="Enter your email">
                                <span class="text-danger">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div><br>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" value="{{ old('password') }}"
                                    name="password" placeholder="Enter your password">
                                <span class="text-danger">
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div><br>
                            <div>
                                <button type="submit" class="btn btn-outline-primary">Send</button>
                            </div>
                        </form><br>
                        <a class="text-decoration-none  float-end fw-bolder" href="{{ route('user.register') }}">Pas de
                            compte ? Créer un compte.</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
