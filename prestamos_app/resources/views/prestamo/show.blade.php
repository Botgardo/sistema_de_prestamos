@extends('layouts.app')

@section('template_title')
    {{ $prestamo->name ?? __('Show') . " " . __('Prestamo') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Prestamo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('prestamos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Usuario Id:</strong>
                                    {{ $prestamo->usuario_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Equipo Id:</strong>
                                    {{ $prestamo->equipo_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha Salida:</strong>
                                    {{ $prestamo->fecha_salida }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha Retorno:</strong>
                                    {{ $prestamo->fecha_retorno }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Estado:</strong>
                                    {{ $prestamo->estado }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
