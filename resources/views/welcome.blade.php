@extends('layouts.master')

@section('title', 'Inicio')

@section('content')
    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
        <h1 class="display-4 fw-normal">Ejemplos</h1>
        <p class="fs-3 text-muted">
            Selecciona una opcion de nuestro catalogo de ejemplos.
        </p>
    </div>
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
        <div class="col">
            <div class="card card- mb-4 rounded-3 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title fs-4 fw-normal">Calcular el factorial de un numero</h5>
                    <i class="fa-solid fa-calculator fa-5x text-info my-4"></i>
                    <a href="{{route('examples.getFactorial')}}" role="button" class="w-100 btn btn-lg btn-primary">Ver Ejemplo</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title fs-4 fw-normal">Calcular la amortizacion de un prestamo</h5>
                    <i class="fa-solid fa-file-invoice-dollar fa-5x text-success my-4"></i>
                    <a href="{{route('examples.getCredito')}}" role="button" class="w-100 btn btn-lg btn-primary">Ver Ejemplo</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title fs-4 fw-normal">Modelo de base de datos relacional</h5>
                    <i class="fa-solid fa-database fa-5x text-warning my-4"></i>
                    <a href="{{route('examples.getModelo')}}" role="button" class="w-100 btn btn-lg btn-primary">Ver Ejemplo</a>
                </div>
            </div>
        </div>
    </div>
@stop
