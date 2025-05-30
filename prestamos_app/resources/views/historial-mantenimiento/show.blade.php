@extends('layouts.app')

@section('template_title')
    {{ $historialMantenimiento->name ?? __('Show') . " " . __('Historial Mantenimiento') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Historial Mantenimiento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('historial-mantenimientos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Equipo Id:</strong>
                                    {{ $historialMantenimiento->equipo_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha:</strong>
                                    {{ $historialMantenimiento->fecha }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Descripcion:</strong>
                                    {{ $historialMantenimiento->descripcion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Responsable:</strong>
                                    {{ $historialMantenimiento->responsable }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
