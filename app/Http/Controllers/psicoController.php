<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PsychologistController extends Controller
{
    public function show()
    {
        // Exemplo simples de dados; pode substituir por dados reais do banco de dados.
        $psychologist = [
            'name' => 'Fernando Cocolichio',
            'crp' => '06/138304',
            'city' => 'São Paulo',
            'price' => 250,
            'duration' => '50 a 60 min',
            'languages' => ['Português', 'Inglês'],
            'specialties' => ['Ansiedade', 'Autoestima', 'Carreira', 'Depressão', 'Estresse'],
            'available_times' => [
                '12/09' => ['21:00', '22:00'],
                '13/09' => ['21:00', '22:00'],
                '14/09' => ['21:00', '22:00'],
            ],
        ];

        return view('psychologist', ['psychologist' => $psychologist]);
    }
}
