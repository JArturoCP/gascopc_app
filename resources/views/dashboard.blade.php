@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="row g-3">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h3 class="mb-1">Bienvenido, {{ session('usuario.name') }}</h3>
                    <p class="text-muted mb-0">Este es tu panel de control.</p>
                </div>
            </div>
        </div>

        {{-- Aquí irán tus tarjetas, tablas y gráficos del dashboard --}}
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">KPI 1</h5>
                    <p class="display-6">123</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">KPI 2</h5>
                    <p class="display-6">456</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">KPI 3</h5>
                    <p class="display-6">789</p>
                </div>
            </div>
        </div>
    </div>
@endsection
