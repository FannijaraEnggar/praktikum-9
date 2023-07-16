<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Data Master') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="bg-primary">
    <div class="container-sm mt-5 p-5">
        <form action="{{route('login')}}" method="POST">
        @csrf
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 col-xl-4 shadiw-lg">
                <div class="mb-5 text-center">
                    <i class="bi-hexagon-fill fs-1 text-primary"></i>
                    <h4>Employee Data Master</h4>
                </div>

                <hr>

                <div class="col mv-3">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}" required autocomplete="email" autofocus
                    placeholder="Enter Your Email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <small>{{$message}}</small>
                        </span>
                    @enderror
                </div>

                <hr>

                <div class="col mb-3">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"
                    placeholder="Enter Your Password">
                    @error('paswword')
                        <span class="invalid-feedback" role="alert">
                            <small>{{$message}}</small>
                        </span>
                    @enderror
                </div>

                <hr>

                <div class="row">
                    <div class="col d-grid">
                        <button type="submit" class="btn btn-primary btn-lg mt-3">
                            <i class="bi-box-arrow-right me-2"> Log In</i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>

</body>
