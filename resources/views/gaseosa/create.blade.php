@extends('layout.app')

@section('body')
    <h2 class="text-center mt-6 font-semibold text-xl">Nueva Gaseosa </h2>


    <form action="{{ url('/producto') }}" class="flex flex-col items-center mt-8">
        @csrf
        <div  class="my-4">
            <p> Nombre:</p>
            <input type="text" name="nombre" class="border-b-2 border-b-orange-300 ">
        </div>

        <div  class="my-4">
            <p> Precio:</p>
            <input type="number"  step="0.01" name="precio" class="border-b-2 border-b-orange-300 ">
        </div>

        <div  class="my-4">
            <p> presentacion:</p>
            <input type="text" name="presentacion" class="border-b-2 border-b-orange-300 ">
        </div>

        <div  class="my-4">
            <p> Stock:</p>
            <input type="number" name="stock" class="border-b-2 border-b-orange-300 ">
        </div>

        <div  class="my-4">
            <p> Marca:</p>
            <select name="marca_id"  id="" class="w-full">
                <option value="" selected desabled> Seleccione una Marca </option>
                @foreach ($marcas as $marca)
                    <option value="{{$marca->id}}">{{$marca->nombre}}</option>
                @endforeach
            </select>
        </div>

        
        <button type="submit" class="rounded bg-slate-800 px-4 py-2 text-white">enviar</button>
    </form>

@endsection