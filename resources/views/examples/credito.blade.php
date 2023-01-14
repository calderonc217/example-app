@extends('layouts.master')

@section('title', 'Calcular Credito')

@section('content')
    @if (session('status'))
        <div class="alert alert-success my-1">
            <p>{{ session('status') }}</p>
        </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-12 col-md-6 margin-tb">
            <div class="row justify-content-between mb-3">
                <div class="col">
                    <h2>Calcular Factorial</h2>
                </div>
                <div class="col d-flex flex-row justify-content-end align-items-center">
                    <a class="btn btn-outline-secondary" href="/">Volver</a>
                </div>
            </div>

            <form action="{{ route('examples.postCredito') }}" method="post">
                <div class="card">
                    <div class="card-body">
                        @csrf
                        <div class="mb-3">
                            <label for="monto" class="form-label">Monto</label>
                            <input type="number" class="form-control @error('monto') is-invalid @enderror"
                                   id="monto" name="monto" min="0" step="1">
                            @error('monto')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="plazo" class="form-label">Plazo en meses</label>
                            <input type="number" class="form-control @error('plazo') is-invalid @enderror"
                                   id="plazo" name="plazo" min="0" step="1">
                            @error('plazo')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="interes" class="form-label">Tasa de interes</label>
                            <input type="number" class="form-control @error('interes') is-invalid @enderror"
                                   id="interes" name="interes" min="0" step="1">
                            @error('interes')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <button class="btn btn-primary" type="submit">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script type="text/javascript">
        const inputMonto = document.getElementById('monto')
        const inputPlazo = document.getElementById('plazo')
        const inputInteres = document.getElementById('interes')
        inputMonto.addEventListener('keydown', integerMask)
        inputPlazo.addEventListener('keydown', decimalMask)
        inputInteres.addEventListener('keydown', decimalMask)

        function integerMask(evt) {
            if (evt.key === 'e' || evt.key === '.' || evt.key === '-' || evt.key === '+') {
                return evt.preventDefault()
            }
            return true
        }

        function decimalMask(evt) {
            if (evt.key === 'e' || evt.key === '-' || evt.key === '+') {
                return evt.preventDefault()
            }
            return true
        }
    </script>
@stop
