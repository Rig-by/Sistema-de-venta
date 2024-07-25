<div class="box box-info padding-1">
    <div class="box-body row">        
        <div class="form-group col-md-4">
            <label for="codigo">{{ __('Código') }}</label>
            <input 
                type="text" 
                id="codigo" 
                name="codigo" 
                value="{{ old('codigo', $producto->codigo) }}" 
                class="form-control{{ $errors->has('codigo') ? ' is-invalid' : '' }}" 
                placeholder="Código"
            >
            @error('codigo')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group col-md-5">
            <label for="producto">{{ __('Producto') }}</label>
            <input 
                type="text" 
                id="producto" 
                name="producto" 
                value="{{ old('producto', $producto->producto) }}" 
                class="form-control{{ $errors->has('producto') ? ' is-invalid' : '' }}" 
                placeholder="Producto"
            >
            @error('producto')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group col-md-3">
            <label for="precio_compra">{{ __('Precio Compra') }}</label>
            <input 
                type="text" 
                id="precio_compra" 
                name="precio_compra" 
                value="{{ old('precio_compra', $producto->precio_compra) }}" 
                class="form-control{{ $errors->has('precio_compra') ? ' is-invalid' : '' }}" 
                placeholder="Precio Compra"
            >
            @error('precio_compra')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group col-md-3">
            <label for="precio_venta">{{ __('Precio Venta') }}</label>
            <input 
                type="text" 
                id="precio_venta" 
                name="precio_venta" 
                value="{{ old('precio_venta', $producto->precio_venta) }}" 
                class="form-control{{ $errors->has('precio_venta') ? ' is-invalid' : '' }}" 
                placeholder="Precio Venta"
            >
            @error('precio_venta')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group col-md-4">
            <label for="id_categoria">{{ __('Categoría') }}</label>
            <select 
                id="id_categoria" 
                name="id_categoria" 
                class="form-control{{ $errors->has('id_categoria') ? ' is-invalid' : '' }}"
            >
                <option value="" disabled>{{ __('Selecciona una categoría') }}</option>
                @foreach ($categorias as $id => $categoria)
                    <option value="{{ $id }}" {{ old('id_categoria', $producto->id_categoria) == $id ? 'selected' : '' }}>
                        {{ $categoria }}
                    </option>
                @endforeach
            </select>
            @error('id_categoria')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group col-md-4">
            <label for="foto">{{ __('Foto') }}</label>
            <input 
                type="file" 
                id="foto" 
                name="foto" 
                class="form-control{{ $errors->has('foto') ? ' is-invalid' : '' }}" 
                placeholder="Foto"
            >
            @error('foto')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            @if ($producto->foto)
                <img src="{{ asset('storage/' . $producto->foto) }}" alt="Imagen actual" style="max-width: 100px; max-height: 100px;">
            @else
                <p>{{ __('Sin imagen') }}</p>
            @endif
        </div>        
    </div>
    <div class="box-footer mt20 text-right">
        <a href="/productos" class="btn btn-danger">{{ __('Cancel') }}</a>
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
