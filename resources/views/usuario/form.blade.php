<div class="box box-info padding-1">
    <div class="box-body row">        
        <div class="form-group col-md-4">
            <label for="name">{{ __('Name') }}</label>
            <input 
                type="text" 
                id="name" 
                name="name" 
                value="{{ old('name', $usuario->name) }}" 
                class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" 
                placeholder="Nombre"
            >
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group col-md-3">
            <label for="email">{{ __('Email') }}</label>
            <input 
                type="text" 
                id="email" 
                name="email" 
                value="{{ old('email', $usuario->email) }}" 
                class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" 
                placeholder="Correo"
            >
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group col-md-5">
            <label for="password">{{ __('Password') }}</label>
            <input 
                type="password" 
                id="password" 
                name="password" 
                class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" 
                placeholder="Contraseña"
            >
            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>       
    </div>
    <div class="box-footer mt20 text-right">
        <a href="/usuarios" class="btn btn-danger">{{ __('Cancel') }}</a>
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
