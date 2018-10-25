<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    </head>

    <body>
        <h1>Pelis!!!</h1>

        <div class="">
          <ul>
            @foreach ($movies as $movie)
              <li><a href="/movies/{{$movie->id}}">{{$movie->getTitleAndRating()}}</a></li>
            @endforeach
          </ul>
        </div>


    </body>
