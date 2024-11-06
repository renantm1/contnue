@extends('layouts.app')

<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Ajuda') }}
    </h2>
</x-slot>

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
            <div class="card mt-1">
                <div class="card-body">
                    <h2 class="card-title fw-bold">Pequenos passos para grandes mudanças!
                    </h2>
                </div>
            </div>
            <br>
        </div>
    </div>
</div>    

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
            <div class="card mt-4">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Qual seria o pior cenário, e ele é realista?</h5>
                    <p class="card-text">
                        <textarea class="form-control" rows="6" placeholder="Escreva sua resposta aqui..."></textarea>
                    </p>
                </div>
                <br>
                <div class="card mt-4">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Qual é o propósito do que estou escrevendo?</h5>
                        <p class="card-text">
                            <textarea class="form-control" rows="6" placeholder="Escreva sua resposta aqui..."></textarea>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    
@endsection