@extends('layout.app')

@section('body')

    <h2 class="text-center mt-6 font-semibold text-xl">Lista Marcas </h2>

    <div class="w-4/5 mx-auto mt-4">
        <table class="table-fixed w-full">
            <thead>
                <tr class="bg-slate-100 h-10">
                    <th>Empresa</th>
                    <th>Operaciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($marcas as $marca)
                    <tr class="odd:bg-slate-200 even:bg-slate-100">
                        <td class="text-center"> {{ $marca->nombre }} </td>
                        <td class=" flex justify-center">
                            
                            <a href="{{ url('marca/' . $marca->id . '/show') }}" class="border bg-slate-600 text-white px-4 py-2"> edit</a>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


@endsection