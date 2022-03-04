@extends('adminlte::page')

@section('title', 'Perfis')

@section('content_header')
    <h1>Perfis</h1>
@stop

@section('content')
    <p>Listagem de Perfis <a href="{{route('profiles.create')}}" class="btn btn-dark"><i class="fas fa-plus"></i> Cadastrar</a></p>
    <div class="card">
        <div class="card-header">
           <form action="{{route('plans.search')}}" method="POST" class="form form-inline">
            @csrf
                <form-group>
                    <input type="text" name="filter" placeholder="Nome do Plano" class="form-control" value="{{$filters['filter'] ?? ''}}">
                    <button class="form-control btn btn-dark" type="submit"><i class="fas fa-search"></i> Pesquisar</button>
                </form-group>
            </form> 
        </div>
        <div class="card-body">
            <table class="table table-condensed">
                <thead>                   
                    <tr>
                        <th>Nome</th>
                        <th width="300">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($profiles as $profile)
                        <tr>
                            <td>
                                {{$profile->name}}
                            </td>
                            <td>
                                {{-- <a href="{{route('details.plan.index', $plan->url)}}" class="btn btn-info">Detalhes</a> --}}
                                <a href="{{route('plans.show', $profile->id)}}" class="btn btn-secondary">Visualizar</a>
                                <a href="{{route('plans.edit', $profile->id)}}" class="btn btn-warning">Editar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            @if (isset($filters))
                {{ $profiles->appends($filters)->links() }} 
            @else    
                {{ $profiles->links() }}
            @endif
        </div>
    </div>
@stop
