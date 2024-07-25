@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Compañía</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span id="card_title">
                            {{ __('Compañía') }}
                        </span>
                    </div>
                </div>
                <div class="card-body">
                    @if ($message = Session::get('success'))
                        <div class="alert fade_success .fade">
                            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">&times;</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    <form method="POST" action="{{ route('compania.update', $compania) }}" role="form">
                        @method('PUT')
                        @csrf

                        <div class="box box-info padding-1">
                            <div class="box-body row">
                                <div class="form-group col-md-4">
                                    <label for="nombre">Nombre</label>
                                    <input id="nombre" name="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" value="{{ $compania->nombre }}" placeholder="Nombre" required>
                                    @error('nombre')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="telefono">Teléfono</label>
                                    <input id="telefono" name="telefono" type="text" class="form-control @error('telefono') is-invalid @enderror" value="{{ $compania->telefono }}" placeholder="Teléfono" required>
                                    @error('telefono')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="correo">Correo</label>
                                    <input id="correo" name="correo" type="text" class="form-control @error('correo') is-invalid @enderror" value="{{ $compania->correo }}" placeholder="Correo" required>
                                    @error('correo')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-5">
                                    <label for="direccion">Dirección</label>
                                    <input id="direccion" name="direccion" type="text" class="form-control @error('direccion') is-invalid @enderror" value="{{ $compania->direccion }}" placeholder="Dirección" required>
                                    @error('direccion')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="box-footer mt20 text-right">
                                <button type="submit" class="btn btn-primary">{{ __('Enviar') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
@endsection
