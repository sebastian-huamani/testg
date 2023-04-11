<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
    <x-nav />
    <div class="">
        @foreach ($gaseosas as $gaseosa)
        <li>
            <a href="{{route('gaseosa.show', $gaseosa)}}">{{$gaseosa->nombre}}</a>
        </li>
        @endforeach
    </div>
  </h1>
</body>
</html>