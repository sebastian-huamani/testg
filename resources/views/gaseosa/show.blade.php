<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
    <x-nav />
    
    <h2 class="text-center mt-6 font-semibold text-xl">Editor de Producto </h2>

    <form action="{{ url('/producto/edit/' . $gaseosa->id) }}" class="flex flex-col items-center mt-6" method="post">
        @csrf
        <div  class="my-4">
            <p> Nombre:</p>
            <input type="text" name="nombre" class="border-b-2 border-b-orange-300" value="{{$gaseosa->nombre}}">
        </div>

        <div  class="my-4">
            <p> Precio:</p>
            <input type="number"  step="0.01" name="precio" class="border-b-2 border-b-orange-300" value="{{$gaseosa->precio}}">
        </div>

        <div  class="my-4">
            <p> presentacion:</p>
            <input type="text" name="presentacion" class="border-b-2 border-b-orange-300 "  value="{{$gaseosa->presentacion}}">
        </div>

        <div  class="my-4">
            <p> Stock:</p>
            <input type="number" name="stock" class="border-b-2 border-b-orange-300 "  value="{{$gaseosa->stock}}">
        </div>

        <div  class="my-4">
            <p> Marca:</p>
            <input type="number" name="marca_id" class="border-b-2 border-b-orange-300 " value="{{$gaseosa->marca_id}}">
        </div>

        
        <button type="submit" class="rounded bg-slate-800 px-4 py-2 text-white">enviar</button>
    </form>

  </h1>
</body>
</html>
