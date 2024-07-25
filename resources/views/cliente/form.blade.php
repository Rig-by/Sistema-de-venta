<div class="box box-info padding-1">
    <div class="box-body row">        
        <div class="form-group col-md-4">
            <label for="nombre">{{ __('Nombre') }}</label>
            <input 
                type="text" 
                id="nombre" 
                name="nombre" 
                value="{{ old('nombre', $cliente->nombre) }}" 
                class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" 
                placeholder="Nombre"
            >
            @error('nombre')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group col-md-3">
            <label for="telefono">{{ __('Teléfono') }}</label>
            <input 
                type="text" 
                id="telefono" 
                name="telefono" 
                value="{{ old('telefono', $cliente->telefono) }}" 
                class="form-control{{ $errors->has('telefono') ? ' is-invalid' : '' }}" 
                placeholder="Teléfono"
            >
            @error('telefono')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group col-md-5">
            <label for="direccion">{{ __('Dirección') }}</label>
            <input 
                type="text" 
                id="direccion" 
                name="direccion" 
                value="{{ old('direccion', $cliente->direccion) }}" 
                class="form-control{{ $errors->has('direccion') ? ' is-invalid' : '' }}" 
                placeholder="Dirección"
            >
            @error('direccion')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>       
    </div>
    <div class="box-footer mt20 text-right">
        <a href="/clientes" class="btn btn-danger">{{ __('Cancel') }}</a>
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
