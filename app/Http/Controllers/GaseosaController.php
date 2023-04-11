<?php

namespace App\Http\Controllers;

use App\Models\Gaseosa;
use App\Models\Marca;
use Illuminate\Http\Request;

class GaseosaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gaseosas = Gaseosa::all();

        return view('gaseosa.index', compact('gaseosas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $marcas = Marca::all();
        return view('gaseosa.create', compact('marcas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $gaseosa = $request->except('_token');
        Gaseosa::insert($gaseosa);
        return redirect('/productos');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        return view('gaseosa.show', compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $gaseosa = Gaseosa::findOrFail($id);
        return view('gaseosa.show', compact('gaseosa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $gaseosaDatos = $request->except('_token');
        Gaseosa::where('id', $id)->update($gaseosaDatos);

        $gaseosa = Gaseosa::findOrFail($id);
        return view('gaseosa.show', compact('gaseosa'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        Gaseosa::destroy($id);

        return redirect('/productos');
    }
}
