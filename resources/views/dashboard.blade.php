@extends('layouts.app')

@section('content')
    <div class="container-fluid py-4">

        <!-- Título y selector de tienda -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-bold" style="color: var(--primary-color);">Maintenance Smoke Detectors - Fiscal Year 2025</h3>
            <div class="d-flex align-items-center">
                <label for="storeSelect" class="me-2 fw-semibold">Store:</label>
                <select id="storeSelect" class="form-select form-select-sm" style="min-width: 180px;">
                    <option value="9210" selected>9210 - Vía Vallejo</option>
                    <option value="9211">9211 - Plaza Sur</option>
                    <option value="9212">9212 - Mall Norte</option>
                </select>
            </div>
        </div>

        <!-- Gráficas -->
        <div class="row g-4 mb-4">
            <div class="col-md-6">
                <div class="card shadow-sm border-0">
                    <div class="card-body text-center">
                        <h6 class="fw-bold mb-3">% faltante nuevas aperturas</h6>
                        <canvas id="chartAperturas"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card shadow-sm border-0">
                    <div class="card-body text-center">
                        <h6 class="fw-bold mb-3">Mantenimientos Programados</h6>
                        <canvas id="chartMantenimientos"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Información General -->
        <div class="row g-4">
            <!-- Columna 1 -->
            <div class="col-lg-4">
                <div class="card shadow-sm border-0 mb-3">
                    <div class="card-body">
                        <h6 class="fw-bold text-muted">Mall</h6>
                        <p class="fw-bold">Vía Vallejo</p>
                    </div>
                </div>

                <div class="card shadow-sm border-0 mb-3">
                    <div class="card-body">
                        <h6 class="fw-bold text-muted">PEPC</h6>
                        <p><span class="badge bg-success">TRUE</span></p>
                    </div>
                </div>

                <div class="card shadow-sm border-0 mb-3">
                    <div class="card-body">
                        <h6 class="fw-bold text-muted">Splinkers</h6>
                        <p><span class="badge bg-danger">FALSE</span></p>
                    </div>
                </div>

                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h6 class="fw-bold text-muted">VoBo PC</h6>
                        <p><i class="bi bi-check-circle-fill text-success"></i> TRUE</p>
                    </div>
                </div>
            </div>

            <!-- Columna 2 -->
            <div class="col-lg-4">
                <div class="card shadow-sm border-0 mb-3">
                    <div class="card-body">
                        <h6 class="fw-bold text-muted">Fecha Primer Semestre Mantenimiento</h6>
                        <p class="fw-bold">20 de febrero de 2025</p>
                    </div>
                </div>

                <div class="card shadow-sm border-0 mb-3">
                    <div class="card-body">
                        <h6 class="fw-bold text-muted">Fecha Última Recarga Extintores</h6>
                        <p class="fw-bold">Mayo 2025</p>
                    </div>
                </div>

                <div class="card shadow-sm border-0 mb-3">
                    <div class="card-body">
                        <h6 class="fw-bold text-muted">Próxima Recarga Extintores</h6>
                        <p class="fw-bold">250</p>
                    </div>
                </div>

                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h6 class="fw-bold text-muted">Observaciones</h6>
                        <p class="text-muted">Ok</p>
                    </div>
                </div>
            </div>

            <!-- Columna 3 -->
            <div class="col-lg-4">
                <div class="card shadow-sm border-0 mb-3">
                    <div class="card-body">
                        <h6 class="fw-bold text-muted">Tipo de equipo</h6>
                        <p class="fw-bold">Monitoreado Local</p>
                    </div>
                </div>

                <div class="card shadow-sm border-0 mb-3">
                    <div class="card-body">
                        <h6 class="fw-bold text-muted">Proveedor</h6>
                        <p class="fw-bold">GASCOPC</p>
                    </div>
                </div>

                <div class="card shadow-sm border-0 mb-3">
                    <div class="card-body">
                        <h6 class="fw-bold text-muted"># Smoke Detectors</h6>
                        <p class="fw-bold">16</p>
                    </div>
                </div>

                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h6 class="fw-bold text-muted">Documentos</h6>
                        <a href="#" class="btn btn-sm btn-outline-primary w-100 mb-2"><i class="bi bi-file-earmark-pdf"></i> Dictamen Extintores 2025</a>
                        <a href="#" class="btn btn-sm btn-outline-primary w-100 mb-2"><i class="bi bi-file-earmark-pdf"></i> Póliza de seguro</a>
                        <a href="#" class="btn btn-sm btn-outline-primary w-100 mb-2"><i class="bi bi-file-earmark-pdf"></i> Carta Responsiva</a>
                        <a href="#" class="btn btn-sm btn-outline-primary w-100"><i class="bi bi-file-earmark-pdf"></i> Certificación NFPA</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Aperturas
        new Chart(document.getElementById('chartAperturas'), {
            type: 'doughnut',
            data: {
                labels: ['Completado', 'Pendiente'],
                datasets: [{
                    data: [95, 5],
                    backgroundColor: ['#28a745', '#dc3545']
                }]
            },
            options: { plugins: { legend: { position: 'bottom' } } }
        });

        // Mantenimientos
        new Chart(document.getElementById('chartMantenimientos'), {
            type: 'doughnut',
            data: {
                labels: ['Primer Mto', 'Segundo Mto'],
                datasets: [{
                    data: [70, 30],
                    backgroundColor: ['var(--primary-color)', '#198754']
                }]
            },
            options: { plugins: { legend: { position: 'bottom' } } }
        });
    </script>
@endsection
