<?php

namespace App\Http\Controllers;

use DateTimeImmutable;
use Illuminate\Http\Request;

class ExampleController extends Controller {

    public function getFactorial() {
        $result = null;
        return view('examples.factorial', compact('result'));
    }

    public function postFactorial(Request $request) {
        $request->validate([
            'inputValue' => 'required|min:0|numeric',
        ]);

        $number = $request->post('inputValue');
        $result = $this->factorial($number);
        return view('examples.factorial', compact('result'));
    }

    /**
     * Funcion recursiva para calcular el factorial de un numero
     * @param $number int Numero que ingresa a la funcion
     * @return float|int|void
     */
    private function factorial($number) {
        if ($number > 1) {
            return $number * $this->factorial($number - 1);
        }
        else if($number >= 0) {
            return 1;
        }
    }

    public function getCredito() {
        $result = array(
            'pagos' => array(),
            'monto' => '',
            'plazo' => '',
            'interes' => ''
        );
        return view('examples.credito', compact('result'));
    }

    public function postCredito(Request $request) {
        $request->validate([
            'monto' => 'required|min:1|numeric',
            'plazo' => 'required|min:1|numeric',
            'interes' => 'required|min:1|numeric'
        ]);

        $importe = $request->post('monto');
        $saldo = $request->post('monto');
        $plazo = $request->post('plazo');
        $tasaInteres = $request->post('interes');
        $cuotaCapital = round($importe / $plazo, 2);
        $pagos = array();

        for ($i = 0; $i < $plazo; $i++) {
            $interes = round($saldo * $tasaInteres / 100, 2);
            $pagos[] = array(
                'numero' => $i + 1,
                'capital' => $cuotaCapital,
                'interes' => $interes,
                'total' => $cuotaCapital + $interes,
                'saldo' => $saldo
            );
            $saldo -= $cuotaCapital;
        }
        $result = array(
            'pagos' => $pagos,
            'monto' => $importe,
            'plazo' => $plazo,
            'interes' => $tasaInteres
        );
        return view('examples.credito', compact('result'));
    }
}
