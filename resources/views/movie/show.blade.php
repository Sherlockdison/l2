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

        <div class="">
          <h1>{{$movie->title ?? 'Peli no encontrada'}}</h1>
          <p><strong>Rating: </strong>{{$movie->rating ?? 'Ups! no tenemos info'}}</p>
          <p><strong>Awards: </strong>{{$movie->awards ?? 'Ups! no tenemos info'}}</p>
          <p><strong>Se lanzó: </strong>{{$movie->release_date ?? 'Ups! no tenemos info'}}</p>
          <p><strong>Duración: </strong>{{$movie->length ?? 'Ups! no tenemos info'}}</p>
        </div>



    </body>
</html>
