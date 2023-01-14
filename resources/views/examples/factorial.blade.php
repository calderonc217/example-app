@extends('layouts.master')

@section('title', 'Calcular Factorial')

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

            <form action="{{ route('examples.postFactorial') }}" method="post">
                <div class="card">
                    <div class="card-body">
                        @if ($result)
                            <div class="alert alert-success my-1">
                                <h5 class="alert-heading">Completado!</h5>
                                <p>El resultado es <b>{{ $result }}</b></p>
                            </div>
                        @endif
                        @csrf
                        <div class="mb-3">
                            <label for="inputValue" class="form-label">Name</label>
                            <input type="number" class="form-control @error('inputValue') is-invalid @enderror"
                                   id="inputValue" name="inputValue" min="0" step="1">
                            @error('inputValue')
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
        const inputValue = document.getElementById('inputValue')
        inputValue.addEventListener('keydown', function (evt) {
            if (evt.key === 'e' || evt.key === '.' || evt.key === '-' || evt.key === '+') {
                return evt.preventDefault()
            }
            return true
        })
    </script>
@stop
