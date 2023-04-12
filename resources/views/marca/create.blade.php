@extends('layout.app')

@section('body')
        <h2 class="text-center mt-6 font-semibold text-xl">Nueva Marca </h2>
    
        <form action="{{ url('/marca') }}" class="flex flex-col items-center mt-8">
            @csrf
            <div  class="my-4">
                <p> Nombre:</p>
                <input type="text" name="nombre" class="border-b-2 border-b-orange-300 ">
            </div>
            
            <button type="submit" class="rounded bg-slate-800 px-4 py-2 text-white">enviar</button>
        </form>

@endsection