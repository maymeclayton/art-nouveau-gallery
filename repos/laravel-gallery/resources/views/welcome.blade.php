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

            <div class="content">
              <h1 class="mb-5 mt-3"> Art Nouveau </h1>

@foreach ($exhibits as $e)
                  <div class="card mb-2" style="width: 40rem;">
                    <img class="card-img-top" src="{{ $e->url }}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">{{ $e->piece_name }}</h5>
                      <h6 class="card-subtitle mt-3 mb-3">{{ $e->artist_name }}</h6>
                      <h6 class="card-subtitle">{{ $e->year }}</h6>
                    </div>
                    <p class="card-text text-center">{{ $e->description }}</p>
                    <p class="card-text text-left">{{ $e->created_at }}</p>
                    <div class="card-body text-center">
                      <a href="/exhibits/{{ $e->id }}/edit" class="card-link mr-3">Edit</a>
                    </div>
                  </div>
@endforeach

            </div>
        </div>
    </body>
</html>
