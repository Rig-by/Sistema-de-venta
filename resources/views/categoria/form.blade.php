<div class="box box-info padding-1">
    <div class="box-body row">        
        <div class="form-group col-md-12">
            <label for="nombre">{{ __('Nombre') }}</label>
            <input 
                type="text" 
                id="nombre" 
                name="nombre" 
                value="{{ old('nombre', $categoria->nombre) }}" 
                class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" 
                placeholder="Nombre"
            >
            @error('nombre')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>   
    </div>
    <div class="box-footer mt20 text-right">
        <a href="/categorias" class="btn btn-danger">{{ __('Cancel') }}</a>
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
