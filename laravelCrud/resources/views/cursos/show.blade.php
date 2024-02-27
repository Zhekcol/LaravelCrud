@extends('layouts.template')

@section('title', 'Curso ' . $curso->name )
    
@section('content')

    <div class="container">
        @if (session('create'))
            <div class="alert alert-success">
                {{session('create')}}
            </div>
        @endif

        @if (session('update'))
            <div class="alert alert-success">
                {{session('update')}}
            </div>
        @endif
        <div class="row">
            <div class="card text-white bg-dark mb-3">
                <div class="card-header">
                    <h5 class="card-title">{{ $curso->name }}</h5>
                    
                </div>
                <div class="card-body">
                    <a href="{{ route('cursos.edit', $curso) }}" class="btn btn-primary btn-sm float-right">Editar</a>
                    <a href="{{ route('cursos.index') }}" class="btn btn-success btn-sm">Volver a cursos</a>
                    <br>
                    <p class="card-text"><strong>Descripción:</strong>{{ $curso->description }}</p>
                    <p class="card-text"><strong>Categoría:</strong>{{ $curso->category }}</p>
                </div>
                <div class="card-footer text-muted">
                    <form action="{{ route('cursos.destroy', $curso) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger float-right">Eliminar</button>
                    </form>
                </div>
            </div>
            
        </div>
        <h3></h3>

        


        
    </div>


    
@endsection