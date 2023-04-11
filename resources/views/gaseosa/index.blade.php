<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <x-nav />

    <div class="w-4/5 mx-auto mt-8">
        <table class="table-fixed w-full">
            <thead>
                <tr class="bg-slate-100 h-10">
                    <th>Nombre</th>
                    <th>Empresa</th>
                    <th>Operaciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($gaseosas as $gaseosa)
                    <tr class="odd:bg-slate-200 even:bg-slate-100">
                        <td class="text-center"> {{ $gaseosa->nombre }} </td>
                        <td class="text-center"> {{ $gaseosa->marca->nombre }} </td>
                        <td class=" flex justify-center">
                            <form action="{{ url('/producto/' . $gaseosa->id) }}" method="post">
                                @csrf
                                <button type="submit" class="border bg-slate-600 text-white px-4 py-2">Borrar</button>
                            </form>

                            <a href="{{ url('producto/' . $gaseosa->id . '/show') }}" class="border bg-slate-600 text-white px-4 py-2"> edit</a>
                        </td>


                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    </h1>
</body>

</html>
