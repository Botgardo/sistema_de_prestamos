@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <nav>
                        <ul>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('usuarios.index') }}">{{ __('Usuarios') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('prestamos.index') }}">{{ __('Prestamos') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('tipo-equipos.index') }}">{{ __('Tipo de equipos') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('equipos.index') }}">{{ __('Equipos') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('historial-mantenimientos.index') }}">{{ __('Historial de mantenimiento') }}</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
