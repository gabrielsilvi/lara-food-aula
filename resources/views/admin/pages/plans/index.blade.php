@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')
    <h1>Planos</h1>
@stop

@section('content')
    <p>Listagem de Planos</p>
    <div class="card">

        <div class="card-header">
            #filtros
        </div>
        <div class="card-body">
            <table class="table table-condensed">
                <thead>                   
                    <tr>
                        <th>Nome</th>
                        <th>Preco</th>
                        <th width="50">Acoes</th>
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
                                <a href="" class="btn btn-warning">Visualizar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{ $plans->links() }}
        </div>
    </div>
@stop
