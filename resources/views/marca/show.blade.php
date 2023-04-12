@extends('layout.app')

@section('body')
    
    <form action="{{ url('/marca/edit/' . $marca->id) }}" class="flex flex-col items-center mt-8" method="post">
        @csrf
        <div  class="my-4">
            <p> Nombre:</p>
            <input type="text" name="nombre" class="border-b-2 border-b-orange-300" value="{{$marca->nombre}}">
        </div>

        
        <button type="submit" class="rounded bg-slate-800 px-4 py-2 text-white">enviar</button>
    </form>

  </h1>
  @endsection
