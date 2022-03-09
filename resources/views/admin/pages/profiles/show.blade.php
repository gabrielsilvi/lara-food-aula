@extends('adminlte::page')

@section('title', "Detalhes do perfil {{$profile->name}}")

@section('content_header')
    <h1>Detalhes do perfil {{$profile->name}}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <ul>
                <li>
                    <strong>Nome:</strong> {{$profile->name}}
                </li>
                <li>
                    <strong>Descrição:</strong> {{$profile->description}}
                </li>
            </ul>
            <form action="{{ route('profiles.destroy', $profile->id) }}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Deletar perfil</button>
            </form>
        </div>
    </div>
@endsection
