@extends('adminlte::page')

@section('title', " Adicioanar novo detalhe do plano {$plan->name}")

@section('content_header')
    <h1>Adicionar novo detalhe ao plano {{$plan->name}} </p></h1>
@stop

@section('content')
    <p>Detalhes</p>
    <div class="card">
        
        <div class="card-body">
            <form action="{{route('details.plan.store', $plan->url)}}" class="form" method="post">
                @include('admin.pages.plans.details._partials.form')
            </form>
        </div>
        
    </div>
@stop
