@extends('adminlte::page')

@section('title', " Detalhes {$plan->name}")

@section('content_header')
    <h1>Detalhe {{$plan->name}} </p></h1>
@stop

@section('content')
    <p>Detalhes</p>
    <div class="card">
        
        <div class="card-body">
            <ul>
                <li>
                    <strong>Nome:</strong> {{$detail->name}}
                </li>
            </ul>
        </div>
        <div class="card-footer">
            <form action="{{route('details.plan.destroy', [$plan->url, $detail->id])}}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Deletar o detalhe do plano {{$plan->name}}</button>
            </form>
        </div>
    </div>
@stop
