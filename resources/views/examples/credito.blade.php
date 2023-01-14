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
                    <h2>Calcular Credito</h2>
                </div>
                <div class="col d-flex flex-row justify-content-end align-items-center">
                    <a class="btn btn-outline-secondary" href="/">Volver</a>
                </div>
            </div>

            <form action="{{ route('examples.postCredito') }}" method="post" novalidate>
                <div class="card">
                    <div class="card-body">
                        @csrf
                        <div class="mb-3">
                            <label for="monto" class="form-label">Monto</label>
                            <input type="number" class="form-control @error('monto') is-invalid @enderror"
                                   id="monto" name="monto" min="0" value="{{ $result['monto'] }}">
                            @error('monto')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="plazo" class="form-label">Plazo en meses</label>
                            <input type="number" class="form-control @error('plazo') is-invalid @enderror"
                                   id="plazo" name="plazo" min="0" step="1" value="{{ $result['plazo'] }}">
                            @error('plazo')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="interes" class="form-label">Tasa de interes</label>
                            <input type="number" class="form-control @error('interes') is-invalid @enderror"
                                   id="interes" name="interes" min="0" value="{{ $result['interes'] }}">
                            @error('interes')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <button class="btn btn-primary" type="submit">Enviar</button>
                    </div>
                </div>
            </form>

            <div class="mt-3">
                <h4>Resultado</h4>
                @if($result['monto'])
                    <ul>
                        <li>Monto: {{ number_format($result['monto'], 2) }}</li>
                        <li>Plazo: {{ $result['plazo'] }}</li>
                        <li>Interes: {{ number_format($result['interes'], 2) }}</li>
                    </ul>
                @endif
            </div>
            <div class="table-responsive mt-3">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Periodo</th>
                        <th>Saldo</th>
                        <th>Interes</th>
                        <th>Abono</th>
                        <th>Pago</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($result['pagos'] as $item)
                        <tr>
                            <td>{{ $item['numero'] }}</td>
                            <td class="text-end">{{ number_format($item['saldo'], 2) }}</td>
                            <td class="text-end">{{ number_format($item['interes'], 2) }}</td>
                            <td class="text-end">{{ number_format($item['capital'], 2) }}</td>
                            <td class="text-end">{{ number_format($item['total'], 2) }}</td>
                        </tr>
                    @empty
                        <tr><td colspan="5">No hay resultados</td></tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        const inputMonto = document.getElementById('monto')
        const inputPlazo = document.getElementById('plazo')
        const inputInteres = document.getElementById('interes')
        inputMonto.addEventListener('keydown', decimalMask)
        inputPlazo.addEventListener('keydown', integerMask)
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
