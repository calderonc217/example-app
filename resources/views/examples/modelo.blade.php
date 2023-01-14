@extends('layouts.master')

@section('title', 'Modelo BD')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 margin-tb">
            <div class="row justify-content-between mb-3">
                <div class="col">
                    <h2>Modelo Base de Datos</h2>
                </div>
                <div class="col d-flex flex-row justify-content-end align-items-center">
                    <a class="btn btn-outline-secondary" href="/">Volver</a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <img class="img-fluid" src="{{asset('img/model.png')}}" alt="Diagrama ER">
                </div>
            </div>
        </div>
    </div>
@stop
