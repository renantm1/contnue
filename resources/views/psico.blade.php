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
                <div class="card mt-4">
                    <div class="card-body">
                        <div class="container mt-5">
                            <div class="card">
                                <div class="row no-gutters">
                                    <div class="col-md-4 text-center">
                                        <img src="{{ asset('download.jfif') }}" class="rounded-circle mt-4"
                                            alt="Psychologist Image" width="150" height="150">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Fernando Cocolichio</h5>
                                            <p class="card-text"><strong>CRP:</strong> 06/138304 - São Paulo</p>
                                            <p class="card-text"><strong>Especialidades:</strong> Ansiedade, Autoestima,
                                                Carreira, Depressão, Estresse</p>
                                            <p class="card-text"><strong>Valor da consulta:</strong> R$ 250 (50 a 60 min)
                                            </p>
                                            <p class="card-text"><strong>Atendimento:</strong> Português, Inglês</p>
                                            <div class="card mt-4">
                                                <div class="card-header">
                                                    <strong><h6>Horários Disponíveis</h6></strong>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <p><strong>12/09</strong> - 21:00, 22:00</p>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <p><strong>13/09</strong> - 21:00, 22:00</p>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <p><strong>14/09</strong> - 21:00, 22:00</p>
                                                        </div>
                                                        <!-- Adicionar mais horários conforme necessário -->
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mt-4 text-center">
                                                <button class="btn btn-success">Agendar Consulta</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
