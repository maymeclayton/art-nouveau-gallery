<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Art Nouveau</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body class="container ">
        <div class="clearfix">
            @if (Route::has('login'))
                <div class="float-right">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content content-center">
              <h1 class="mb-5 mt-3 text-white"> Art Nouveau </h1>

@foreach ($exhibits as $e)
                  <div class="card mb-5 border-0 bg-muted">
                    <img class="card-img-top mx-auto mt-3" src="{{ $e->url }}" alt="piece entitled: {{ $e->piece_name }}">
                    <div class="card-body">
                      <h5 class="card-title">{{ $e->piece_name }}</h5>
                      <h6 class="card-subtitle mt-3 mb-3">{{ $e->artist_name }}</h6>
                      <h6 class="card-subtitle">{{ $e->year }}</h6>
                    </div>
                    <p class="card-text ml-3 mr-3">{{ $e->description }}</p>
                    <p class="card-text ml-3 mr-3">{{ $e->created_at }}</p>
                    <div class="card-body text-center">
                      <a href="/exhibits/{{ $e->id }}/edit" class="card-link mr-3">Edit</a>
                    </div>
                  </div>
@endforeach

            </div>
        </div>
    </body>
</html>
