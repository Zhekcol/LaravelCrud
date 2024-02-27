@extends('layouts.template')

@section('title', 'Cursos')
    
@section('content')

    <div class="container">
        <div class="row">

            <div class="col-md-3">

            </div>

            <div class="col-md-6">
    
                <div class="card text-white bg-dark ">
                    <div class="card-header">Nuevo curso</div>
                    <div class="card-body">
                        <form action="{{ route('cursos.store') }}" method="post">
                            <div class="form-group row">
                            @csrf
                            <label class="form-label">
                                Nombre:
                                <br>
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                            </label>
                            <br>
                    
                            @error('name')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                    
                    
                            <label class="form-label">
                                Slug:
                                <br>
                                <input type="text" name="slug" value="{{ old('slug') }}" class="form-control">
                            </label>
                            <br>
                    
                            @error('slug')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                    
                            <label class="form-label">
                                Descripción:
                                <br>
                                <textarea name="description" rows="5" class="form-control">{{ old('description') }}</textarea>
                            </label>
                            <br>
                    
                            @error('description')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                    
                            <label class="form-label">
                                Categoría:
                                <br>
                                <input type="text" name="category" value="{{ old('category') }}" class="form-control">
                            </label>
                            <br>
                            @error('category')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>

                            <br>
                            <button type="submit" class="btn btn-primary">Envíar</button>
                        </form>
                    </div>
                </div>
            </div>
    
            <div class="col-md-3">
                
            </div>
        </div>
    </div>
    
@endsection