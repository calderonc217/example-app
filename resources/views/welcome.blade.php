@extends('layouts.master')

@section('title', 'Inicio')

@section('content')
    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
        <h1 class="display-4 fw-normal">Ejemplos</h1>
        <p class="fs-5 text-muted">
            Selecciona una opcion de nuestra catalogo de ejemplos.
        </p>
    </div>
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
        <div class="col">
            <div class="card card- mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">Factorial</h4>
                </div>
                <div class="card-body">
                    <h3 class="card-title">Calcular el factorial de un numero</h3>
                    <i class="fa-solid fa-calculator fa-5x text-info my-4"></i>
                    <button type="button" class="w-100 btn btn-lg btn-primary">Ver Ejemplo</button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">Préstamo</h4>
                </div>
                <div class="card-body">
                    <h3 class="card-title">Calcular las amortizaciones de un prestamo</h3>
                    <i class="fa-solid fa-file-invoice-dollar fa-5x text-success my-4"></i>
                    <button type="button" class="w-100 btn btn-lg btn-primary">Ver Ejemplo</button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">Base de Datos</h4>
                </div>
                <div class="card-body">
                    <h3 class="card-title">Modelo de base de datos relacional</h3>
                    <i class="fa-solid fa-database fa-5x text-warning my-4"></i>
                    <button type="button" class="w-100 btn btn-lg btn-primary">Ver Ejemplo</button>
                </div>
            </div>
        </div>
    </div>
@stop
