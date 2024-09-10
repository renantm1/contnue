@extends('layouts.app')


    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Informações') }}
        </h2>
    </x-slot>
        
    @section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
            <h2 class="text-lg font-semibold mb-4">Calcule seu IMC (Índice de massa corpórea)</h2>

            <form action="{{ route('imc.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="altura" class="block text-sm font-medium text-gray-700">Altura (m):</label>
                    <input type="number" step="0.01" name="altura" id="altura" required
                            class="mt-1 p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm">
                </div>

                <div class="mb-4">
                    <label for="peso" class="block text-sm font-medium text-gray-700">Peso (kg):</label>
                    <input type="number" step="0.1" name="peso" id="peso" required
                        class="mt-1 p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm">
                </div>

                <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">
                    Calcular IMC
                </button>
            </form>

            @if(isset($imc))
                <div class="mt-4">
                    <p class="text-lg font-semibold">Seu IMC é: {{ $imc }}</p>
                    <p class="text-md">{{ $status }}</p>
                </div>
            @endif
        </div>
    </div>
</div>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
            <div class="card mt-4">
                <div class="card-body">
                    <h5 class="card-title fw-bold">O que é IMC?</h5>
                    <p class="card-text">
                        O Índice de Massa Corporal (IMC) é uma medida que utiliza a altura e o peso para calcular se uma pessoa está dentro do peso ideal, abaixo do peso ou acima do peso. É uma ferramenta simples que ajuda a identificar se alguém está com peso saudável.
                    </p>
            
                    <table class="table table-bordered mt-3">
                        <thead class="thead-light">
                            <tr>
                                <th>Classificação</th>
                                <th>IMC</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-warning text-dark">
                                <td>Abaixo do peso</td>
                                <td>&lt; 18.5</td>
                            </tr>
                            <tr class="bg-warning text-dark">
                                <td>Peso normal</td>
                                <td>18.5 - 24.9</td>
                            </tr>
                            <tr class="bg-warning text-dark">
                                <td>Sobrepeso</td>
                                <td>25 - 29.9</td>
                            </tr>
                            <tr class="text-danger fw-bold">
                                <td>Obesidade</td>
                                <td>&gt; 30</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection

