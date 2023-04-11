<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $marcas = Marca::all();
        return view('marca.index', compact('marcas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('marca.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $marca = $request->except('_token');
        Marca::insert($marca);
        return redirect('/marcas');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        return view('marca.show', compact('id'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $marca = Marca::findOrFail($id);
        return view('marca.show', compact('marca'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $marcaDatos = $request->except('_token');
        Marca::where('id', $id)->update($marcaDatos);

        $marca = Marca::findOrFail($id);
        return view('marca.show', compact('marca'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Marca::destroy($id);

        return redirect('/marcas');
    }
}
