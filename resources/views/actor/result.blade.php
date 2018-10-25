<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    </head>

    <body>

    <div class="">

    <ul class="list-group list-group-flush">
      @foreach ($result as $actor)
        <li class="list-group-item">{{$actor->getFullName()}}</li>
      @endforeach
    </ul>

    </div>

    </body>
</html>
