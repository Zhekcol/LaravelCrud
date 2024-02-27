@extends('layouts.template')

@section('title', 'Editar curso ' . $curso->name)
    
@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-3">

        </div>

        <div class="col-md-6">
            <div class="card bg-dark text-white">
                <div class="card-header">Editar Curso</div>
                <div class="card-body">
                    <a href="{{ route('cursos.show', $curso) }}">Cancelar</a>

                    <form action="{{ route('cursos.update', $curso) }}" method="post">
                        <div class="form-group row">
                        @csrf
                        @method('put')
                        <label>
                            <br>
                            Nombre:
                            <br>
                            <input type="text" name="name" value="{{ old('name', $curso->name) }}" class="form-control">
                        </label>
                        <br>

                        @error('name')
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror

                        <label>
                            Slug:
                            <br>
                            <input type="text" name="slug" value="{{ old('slug', $curso->slug) }}" class="form-control">
                        </label>
                        <br>

                        @error('slug')
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror

                        <label>
                            Descripción:
                            <br>
                            <textarea name="description" rows="5" class="form-control">{{ old('description', $curso->description) }}</textarea>
                        </label>
                        <br>

                        @error('description')
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                        <label>
                            Categoría:
                            <br>
                            <input type="text" name="category" value="{{ old('category', $curso->category) }}" class="form-control">
                        </label>
                        <br>
                        @error('category')
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>
                        <br>
                        <button type="submit" class="btn btn-success">Actualizar</button>
                    </form>
                </div>
            </div>
            
        </div>

        <div class="col-md-3">

        </div>
    </div>
</div>

@endsection