<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IMCController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'altura' => 'required|numeric|min:0',
            'peso' => 'required|numeric|min:0',
        ]);

        $altura = $request->input('altura');
        $peso = $request->input('peso');

        // Cálculo do IMC
        $imc = $peso / ($altura * $altura);

        // Verificando o status do IMC
        if ($imc < 18.5) {
            $status = 'Abaixo do peso';
        } elseif ($imc >= 18.5 && $imc <= 24.9) {
            $status = 'Peso normal';
        } elseif ($imc >= 25 && $imc <= 29.9) {
            $status = 'Sobrepeso';
        } else {
            $status = 'Obesidade';
        }

        return view('imc', ['imc' => $imc, 'status' => $status]);
    }
}

