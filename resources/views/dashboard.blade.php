<x-app-layout>
    <x-slot name="header">
        <h2 class="fw-bold fs-3">
            AnimeStore · Dashboard
        </h2>
    </x-slot>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <div class="container-fluid mt-4">

        <!-- Bienvenida -->
        <div class="card mb-4 shadow">
            <div class="card-body bg-dark text-white rounded">
                <h3>👋 Bienvenido, {{ Auth::user()->name }}</h3>
                <p class="mb-0">Panel de administración de AnimeStore</p>
            </div>
        </div>

        <!-- Estadísticas -->
        <div class="row g-4">

            <div class="col-md-3">
                <div class="card text-center shadow border-0">
                    <div class="card-body">
                        <h6 class="text-muted">Productos</h6>
                        <h2 class="text-primary">120</h2>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card text-center shadow border-0">
                    <div class="card-body">
                        <h6 class="text-muted">Ventas</h6>
                        <h2 class="text-success">350</h2>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card text-center shadow border-0">
                    <div class="card-body">
                        <h6 class="text-muted">Usuarios</h6>
                        <h2 class="text-warning">45</h2>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card text-center shadow border-0">
                    <div class="card-body">
                        <h6 class="text-muted">Ingresos</h6>
                        <h2 class="text-danger">$18,500</h2>
                    </div>
                </div>
            </div>

        </div>

        <!-- Acciones -->
        <div class="card mt-5 shadow">
            <div class="card-header bg-secondary text-white">
                Acciones rápidas
            </div>
            <div class="card-body d-flex gap-3 flex-wrap">
                <a href="#" class="btn btn-primary">➕ Agregar Producto</a>
                <a href="#" class="btn btn-success">📦 Ver Ventas</a>
                <a href="#" class="btn btn-warning text-white">👥 Usuarios</a>
            </div>
        </div>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</x-app-layout>
