<?php

namespace App\Http\Controllers;

use App\Models\TipoEquipo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\TipoEquipoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class TipoEquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $tipoEquipos = TipoEquipo::paginate();

        return view('tipo-equipo.index', compact('tipoEquipos'))
            ->with('i', ($request->input('page', 1) - 1) * $tipoEquipos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $tipoEquipo = new TipoEquipo();

        return view('tipo-equipo.create', compact('tipoEquipo'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TipoEquipoRequest $request): RedirectResponse
    {
        TipoEquipo::create($request->validated());

        return Redirect::route('tipo-equipos.index')
            ->with('success', 'TipoEquipo created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $tipoEquipo = TipoEquipo::find($id);

        return view('tipo-equipo.show', compact('tipoEquipo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $tipoEquipo = TipoEquipo::find($id);

        return view('tipo-equipo.edit', compact('tipoEquipo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TipoEquipoRequest $request, TipoEquipo $tipoEquipo): RedirectResponse
    {
        $tipoEquipo->update($request->validated());

        return Redirect::route('tipo-equipos.index')
            ->with('success', 'TipoEquipo updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        TipoEquipo::find($id)->delete();

        return Redirect::route('tipo-equipos.index')
            ->with('success', 'TipoEquipo deleted successfully');
    }
}
