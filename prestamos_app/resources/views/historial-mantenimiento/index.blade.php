@extends('layouts.app')

@section('template_title')
    Historial Mantenimientos
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Historial Mantenimientos') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('historial-mantenimientos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
									<th >Equipo Id</th>
									<th >Fecha</th>
									<th >Descripcion</th>
									<th >Responsable</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($historialMantenimientos as $historialMantenimiento)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $historialMantenimiento->equipo_id }}</td>
										<td >{{ $historialMantenimiento->fecha }}</td>
										<td >{{ $historialMantenimiento->descripcion }}</td>
										<td >{{ $historialMantenimiento->responsable }}</td>

                                            <td>
                                                <form action="{{ route('historial-mantenimientos.destroy', $historialMantenimiento->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('historial-mantenimientos.show', $historialMantenimiento->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('historial-mantenimientos.edit', $historialMantenimiento->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $historialMantenimientos->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
