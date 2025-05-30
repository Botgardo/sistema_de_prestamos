<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="usuario_id" class="form-label">{{ __('Usuario Id') }}</label>
            <input type="text" name="usuario_id" class="form-control @error('usuario_id') is-invalid @enderror" value="{{ old('usuario_id', $prestamo?->usuario_id) }}" id="usuario_id" placeholder="Usuario Id">
            {!! $errors->first('usuario_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="equipo_id" class="form-label">{{ __('Equipo Id') }}</label>
            <input type="text" name="equipo_id" class="form-control @error('equipo_id') is-invalid @enderror" value="{{ old('equipo_id', $prestamo?->equipo_id) }}" id="equipo_id" placeholder="Equipo Id">
            {!! $errors->first('equipo_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_salida" class="form-label">{{ __('Fecha Salida') }}</label>
            <input type="date" name="fecha_salida" class="form-control @error('fecha_salida') is-invalid @enderror" value="{{ old('fecha_salida', $prestamo?->fecha_salida) }}" id="fecha_salida" placeholder="Fecha Salida">
            {!! $errors->first('fecha_salida', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_retorno" class="form-label">{{ __('Fecha Retorno') }}</label>
            <input type="date" name="fecha_retorno" class="form-control @error('fecha_retorno') is-invalid @enderror" value="{{ old('fecha_retorno', $prestamo?->fecha_retorno) }}" id="fecha_retorno" placeholder="Fecha Retorno">
            {!! $errors->first('fecha_retorno', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="estado" class="form-label">{{ __('Estado') }}</label>
            <input type="text" name="estado" class="form-control @error('estado') is-invalid @enderror" value="{{ old('estado', $prestamo?->estado) }}" id="estado" placeholder="Estado">
            {!! $errors->first('estado', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>