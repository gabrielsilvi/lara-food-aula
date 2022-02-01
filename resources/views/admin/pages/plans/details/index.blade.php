@extends('adminlte::page')

@section('title', "Detalhes do plano {$plan->name}")

@section('content_header')
    <h1>Detalhes do plano {{$plan->name}}</h1>
@stop

@section('content')
    <p>Detalhes</p>
    <div class="card">
        
        <div class="card-body">
            <table class="table table-condensed">
                <thead>                   
                    <tr>
                        <th>Nome</th>
                        
                        <th width="190">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($details as $detail)
                        <tr>
                            <td>
                                {{$detail->name}}
                            </td>
                            <td>
                               R$ {{$plan->price}}
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
                {{ $details->appends($filters)->links() }} 
            @else    
                {{ $details->links() }}
            @endif
        </div>
    </div>
@stop
