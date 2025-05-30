<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="equipo_id" class="form-label">{{ __('Equipo Id') }}</label>
            <input type="text" name="equipo_id" class="form-control @error('equipo_id') is-invalid @enderror" value="{{ old('equipo_id', $historialMantenimiento?->equipo_id) }}" id="equipo_id" placeholder="Equipo Id">
            {!! $errors->first('equipo_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha" class="form-label">{{ __('Fecha') }}</label>
            <input type="date" name="fecha" class="form-control @error('fecha') is-invalid @enderror" value="{{ old('fecha', $historialMantenimiento?->fecha) }}" id="fecha" placeholder="Fecha">
            {!! $errors->first('fecha', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="descripcion" class="form-label">{{ __('Descripcion') }}</label>
            <input type="text" name="descripcion" class="form-control @error('descripcion') is-invalid @enderror" value="{{ old('descripcion', $historialMantenimiento?->descripcion) }}" id="descripcion" placeholder="Descripcion">
            {!! $errors->first('descripcion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="responsable" class="form-label">{{ __('Responsable') }}</label>
            <input type="text" name="responsable" class="form-control @error('responsable') is-invalid @enderror" value="{{ old('responsable', $historialMantenimiento?->responsable) }}" id="responsable" placeholder="Responsable">
            {!! $errors->first('responsable', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>