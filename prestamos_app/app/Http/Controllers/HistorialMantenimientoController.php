<?php

namespace App\Http\Controllers;

use App\Models\HistorialMantenimiento;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\HistorialMantenimientoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class HistorialMantenimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $historialMantenimientos = HistorialMantenimiento::paginate();

        return view('historial-mantenimiento.index', compact('historialMantenimientos'))
            ->with('i', ($request->input('page', 1) - 1) * $historialMantenimientos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $historialMantenimiento = new HistorialMantenimiento();

        return view('historial-mantenimiento.create', compact('historialMantenimiento'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HistorialMantenimientoRequest $request): RedirectResponse
    {
        HistorialMantenimiento::create($request->validated());

        return Redirect::route('historial-mantenimientos.index')
            ->with('success', 'HistorialMantenimiento created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $historialMantenimiento = HistorialMantenimiento::find($id);

        return view('historial-mantenimiento.show', compact('historialMantenimiento'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $historialMantenimiento = HistorialMantenimiento::find($id);

        return view('historial-mantenimiento.edit', compact('historialMantenimiento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HistorialMantenimientoRequest $request, HistorialMantenimiento $historialMantenimiento): RedirectResponse
    {
        $historialMantenimiento->update($request->validated());

        return Redirect::route('historial-mantenimientos.index')
            ->with('success', 'HistorialMantenimiento updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        HistorialMantenimiento::find($id)->delete();

        return Redirect::route('historial-mantenimientos.index')
            ->with('success', 'HistorialMantenimiento deleted successfully');
    }
}
