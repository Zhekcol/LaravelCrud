@extends('layouts.template')

@section('title', 'Contactanos')
    
@section('content')

@if (session('info'))
    <div class="alert alert-success"><strong>{{ session('info') }}</strong></div>
@endif

<div class="container">
    <div class="row">
        <div class="col-md-3">

        </div>

        <div class="col-md-6">
            <div class="card text-dark bg-info">
                <div class="card-header"><h5 class="card-title">¡Dejanos un mensaje!</h5></div>
                <div class="card-body">
                    <form action="{{ route('contactanos.store') }}" method="post">
                        <div class="form-group row">
                        @csrf
                        <label class="form-label">
                            <strong>Nombre:</strong>
                            <br>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                        </label>
                    
                        <br>
                    
                        @error('name')
                            <p><strong>{{ $message }}</strong></p>
                        @enderror
                    
                        <label class="form-label">
                            <strong>Correo:</strong>
                            <br>
                            <input type="text" name="correo" value="{{ old('correo') }}" class="form-control">
                        </label>
                    
                        <br>
                        @error('correo')
                            <p><strong>{{ $message }}</strong></p>
                        @enderror
                    
                        <label class="form-label">
                            <strong>Mensaje:</strong>
                            <br>
                            <textarea name="mensaje" rows="4" class="form-control">{{ old('mensaje') }}</textarea>
                        </label>
                    
                        @error('mensaje')
                            <p><strong>{{ $message }}</strong></p>
                        @enderror
                        </div>
                        <br>
                        <br>
                        <button type="submit" class="btn btn-success"><strong>Envíar mensaje</strong></button>
                    </form>
                </div>
            </div>
            
        </div>

        <div class="col-md-3">

        </div>
    </div>
</div>


@endsection