@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')
    <h1>Planos</h1>
@stop

@section('content')
    <p>Listagem de Planos <a href="{{route('plans.create')}}" class="btn btn-dark"><i class="fas fa-plus"></i> Cadastrar</a></p>
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
                        <th>Preço</th>
                        <th width="190">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($plans as $plan)
                        <tr>
                            <td>
                                {{$plan->name}}
                            </td>
                            <td>
                                {{$plan->price}}
                            </td>
                            <td>
                                <a href="{{route('plans.show', $plan->url)}}" class="btn btn-secondary">Visualizar</a>
                                <a href="{{route('plans.edit', $plan->url)}}" class="btn btn-warning">Editar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            @if (isset($filters))
                {{ $plans->appends($filters)->links() }} 
            @else    
                {{ $plans->links() }}
            @endif
        </div>
    </div>
@stop
