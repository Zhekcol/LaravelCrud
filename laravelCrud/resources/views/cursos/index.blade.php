@extends('layouts.template')

@section('title', 'Cursos')
    
@section('content')

    <a href="{{ route('cursos.create') }}" class="btn btn-primary">Crear nuevo curso</a>
    <div class="container-fluid">
        @if (session('delete'))
        <br>
            <div class="alert alert-success">
                {{session('delete')}}
            </div>
        @endif
    <br>
        <ul>
            @foreach ($cursos as $curso)
                    <li><a href="{{ route('cursos.show', $curso) }}">{{ $curso->name }}</a></li>
            @endforeach
        </ul>
        {{ $cursos->links() }}
    </div>
    



@endsection