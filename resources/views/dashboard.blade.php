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
                        <p id="mallName" class="fw-bold">-</p>
                    </div>
                </div>

                <div class="card shadow-sm border-0 mb-3">
                    <div class="card-body">
                        <h6 class="fw-bold text-muted">PEPC</h6>
                        <p id="pepcValue"><span class="badge bg-secondary">-</span></p>
                    </div>
                </div>

                <div class="card shadow-sm border-0 mb-3">
                    <div class="card-body">
                        <h6 class="fw-bold text-muted">Splinkers</h6>
                        <p id="splinkersValue"><span class="badge bg-secondary">-</span></p>
                    </div>
                </div>

                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h6 class="fw-bold text-muted">VoBo PC</h6>
                        <p id="voboPCValue">-</p>
                    </div>
                </div>
            </div>

            <!-- Columna 2 -->
            <div class="col-lg-4">
                <div class="card shadow-sm border-0 mb-3">
                    <div class="card-body">
                        <h6 class="fw-bold text-muted">Fecha Primer Semestre Mantenimiento</h6>
                        <p id="primerMto" class="fw-bold">-</p>
                    </div>
                </div>

                <div class="card shadow-sm border-0 mb-3">
                    <div class="card-body">
                        <h6 class="fw-bold text-muted">Fecha Última Recarga Extintores</h6>
                        <p id="ultimaRecarga" class="fw-bold">-</p>
                    </div>
                </div>

                <div class="card shadow-sm border-0 mb-3">
                    <div class="card-body">
                        <h6 class="fw-bold text-muted">Próxima Recarga Extintores</h6>
                        <p id="proximaRecarga" class="fw-bold">-</p>
                    </div>
                </div>

                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h6 class="fw-bold text-muted">Observaciones</h6>
                        <p id="observaciones" class="text-muted">-</p>
                    </div>
                </div>
            </div>

            <!-- Columna 3 -->
            <div class="col-lg-4">
                <div class="card shadow-sm border-0 mb-3">
                    <div class="card-body">
                        <h6 class="fw-bold text-muted">Tipo de equipo</h6>
                        <p id="tipoEquipo" class="fw-bold">-</p>
                    </div>
                </div>

                <div class="card shadow-sm border-0 mb-3">
                    <div class="card-body">
                        <h6 class="fw-bold text-muted">Proveedor</h6>
                        <p id="proveedor" class="fw-bold">-</p>
                    </div>
                </div>

                <div class="card shadow-sm border-0 mb-3">
                    <div class="card-body">
                        <h6 class="fw-bold text-muted"># Smoke Detectors</h6>
                        <p id="smokeDetectors" class="fw-bold">-</p>
                    </div>
                </div>

                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h6 class="fw-bold text-muted">Documentos</h6>
                        <a id="dictamen" href="#" class="btn btn-sm btn-outline-primary w-100 mb-2"><i class="bi bi-file-earmark-pdf"></i> Dictamen Extintores 2025</a>
                        <a id="poliza" href="#" class="btn btn-sm btn-outline-primary w-100 mb-2"><i class="bi bi-file-earmark-pdf"></i> Póliza de seguro</a>
                        <a id="carta" href="#" class="btn btn-sm btn-outline-primary w-100 mb-2"><i class="bi bi-file-earmark-pdf"></i> Carta Responsiva</a>
                        <a id="nfpa" href="#" class="btn btn-sm btn-outline-primary w-100"><i class="bi bi-file-earmark-pdf"></i> Certificación NFPA</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/papaparse@5.3.2/papaparse.min.js"></script>

    <script>
        const sheetUrl = "https://docs.google.com/spreadsheets/d/e/2PACX-1vSb3Rzbu15SgsKOTqNo1r-jJzHYI8AX_5Xq478NV1cHffez6ombJ44IUXM9hY_ZR0Ths0vW4KFUrTK4/pub?gid=0&single=true&output=csv";

        let sheetData = [];

        // Cargar CSV al iniciar
        Papa.parse(sheetUrl, {
            download: true,
            header: true,
            complete: function(results) {
                sheetData = results.data;
                updateStore(document.getElementById("storeSelect").value);
            }
        });

        // Evento de cambio en el select
        document.getElementById("storeSelect").addEventListener("change", function() {
            updateStore(this.value);
        });

        function updateStore(storeId) {
            const row = sheetData.find(r => r.Store === storeId);
            if (!row) return;

            // Columna 1
            document.getElementById("mallName").innerText = row.Mall || "--";
            document.getElementById("pepcValue").innerHTML = row.PEPC === "TRUE"
                ? '<span class="badge bg-success">TRUE</span>'
                : '<span class="badge bg-danger">FALSE</span>';
            document.getElementById("splinkersValue").innerHTML = row.Splinkers === "TRUE"
                ? '<span class="badge bg-success">TRUE</span>'
                : '<span class="badge bg-danger">FALSE</span>';
            document.getElementById("voboPCValue").innerHTML = row["VoBo PC"] === "TRUE"
                ? '<i class="bi bi-check-circle-fill text-success"></i> TRUE'
                : '<i class="bi bi-x-circle-fill text-danger"></i> FALSE';

            // Columna 2
            document.getElementById("primerMto").innerText = row["Date first maintenance smoke detector"] || "--";
            document.getElementById("ultimaRecarga").innerText = row["Date second maintenance smoke detectors"] || "--";
            document.getElementById("proximaRecarga").innerText = row["Proxima recarga"] || "--";
            document.getElementById("observaciones").innerText = row.Observaciones || "--";

            // Columna 3
            document.getElementById("tipoEquipo").innerText = row["Tipo de equipo"] || "--";
            document.getElementById("Proveedor").innerText = row.Proveedor || "--";
            document.getElementById("smokeDetectors").innerText = row["Smoke Detectors"] || "--";

            // Documentos (asume que en el Sheet vienen URLs)
            document.getElementById("dictamen").href = row["Factura Extintores"] || "#";
            document.getElementById("poliza").href   = row["Poliza de seguro"] || "#";
            document.getElementById("carta").href    = row["Carta Responsiva"] || "#";
            document.getElementById("nfpa").href     = row["Certificación NFPA"] || "#";
        }
    </script>
@endsection
