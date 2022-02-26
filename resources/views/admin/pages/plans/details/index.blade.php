@extends('adminlte::page')

@section('title', "Detalhes do plano {$plan->name}")

@section('content_header')
    <h1>Detalhes do plano {{$plan->name}} <a href="{{route('details.plan.create', $plan->url)}}" class="btn btn-dark"><i class="fas fa-plus"></i> Cadastrar</a></h1>
@stop

@section('content')
    <p>Detalhes</p>
    <div class="card">
        
        <div class="card-body">

            @include('admin.includes.alerts')

            <table class="table table-condensed">
                <thead>                   
                    <tr>
                        <th>Nome</th>
                        
                        <th width="250">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($details as $detail)
                        <tr>
                            <td>
                                {{$detail->name}}
                            </td>
                            <td>
                                <a href="{{route('details.plan.show', [$plan->url, $detail->id])}}" class="btn btn-secondary">Visualizar</a>
                                <a href="{{route('details.plan.edit', [$plan->url, $detail->id])}}" class="btn btn-warning">Editar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            @if (isset($filters))
                {{ $details->appends($filters)->links() }} 
            @else    
                {{ $details->links() }}
            @endif
        </div>
    </div>
@stop
