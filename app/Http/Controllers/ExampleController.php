<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller {

    public function getFactorial() {
        $result = null;
        return view('examples.factorial', compact('result'));
    }

    public function postFactorial(Request $request) {
        $request->validate([
            'inputValue' => 'required',
        ]);

        $number = $request->post('inputValue');
        $result = $this->factorial($number);
        $result = round($result, 2);
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
        return view('examples.credito');
    }
}
