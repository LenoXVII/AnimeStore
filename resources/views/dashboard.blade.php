<x-app-layout>
    <x-slot name="header">
        <h2 class="dashboard-title">
            AnimeStore · Mi Cuenta
        </h2>
    </x-slot>

    {{-- ESTILOS DIRECTAMENTE EN EL HEAD --}}
    <head>
        <style>
            body {
                background: #0f172a; /* fondo negro-azulado */
            }

            .dashboard-title {
                color: #ffffff;
                font-weight: 700;
                font-size: 1.5rem;
            }

            .card-dark {
                background: #020617;
                color: #e5e7eb;
                border: none;
                border-radius: 14px;
                box-shadow: 0 10px 30px rgba(0,0,0,.5);
            }

            .card-dark h3,
            .card-dark h5 {
                color: #ffffff;
            }

            .text-muted-custom {
                color: #9ca3af;
            }

            .stat-number {
                font-size: 2rem;
                font-weight: 800;
            }

            .btn-main {
                background: #6366f1;
                color: white;
                border-radius: 10px;
                padding: 10px 18px;
                border: none;
            }

            .btn-outline {
                border: 1px solid #6366f1;
                color: #6366f1;
                border-radius: 10px;
                padding: 10px 18px;
                background: transparent;
            }

            .btn-outline:hover {
                background: #6366f1;
                color: white;
            }
        </style>
    </head>

    <div class="container-fluid mt-4">

        {{-- BIENVENIDA --}}
        <div class="card card-dark mb-4">
            <div class="card-body">
                <h3>👋 Hola, {{ Auth::user()->name }}</h3>
                <p class="text-muted-custom mb-0">
                    Bienvenido a tu panel de cliente en AnimeStore
                </p>
            </div>
        </div>

        {{-- ESTADÍSTICAS DEL CLIENTE --}}
        <div class="row g-4">

            <div class="col-md-3">
                <div class="card card-dark text-center">
                    <div class="card-body">
                        <h6 class="text-muted-custom">Pedidos realizados</h6>
                        <div class="stat-number text-primary">12</div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card card-dark text-center">
                    <div class="card-body">
                        <h6 class="text-muted-custom">Pedidos pendientes</h6>
                        <div class="stat-number text-warning">2</div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card card-dark text-center">
                    <div class="card-body">
                        <h6 class="text-muted-custom">Productos favoritos</h6>
                        <div class="stat-number text-success">5</div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card card-dark text-center">
                    <div class="card-body">
                        <h6 class="text-muted-custom">Total gastado</h6>
                        <div class="stat-number text-danger">$3,250</div>
                    </div>
                </div>
            </div>

        </div>

        {{-- ACCIONES DEL CLIENTE --}}
        <div class="card card-dark mt-5">
            <div class="card-body d-flex gap-3 flex-wrap">
                <a href="#" class="btn btn-main">🛒 Ver pedidos</a>
                <a href="#" class="btn btn-outline">❤️ Favoritos</a>
                <a href="#" class="btn btn-outline">👤 Mi perfil</a>
            </div>
        </div>

    </div>
</x-app-layout>
