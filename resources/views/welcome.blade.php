<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>AnimeStore | Bienvenido</title>

    <!-- CSS principal -->
    @vite(['resources/css/app.css'])

    <!-- Bootstrap (solo para botones) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
         body {
        margin: 0;
        min-height: 100vh;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, sans-serif;
        background: linear-gradient(135deg, #3c0aa1, #01010d);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .container-welcome {
        text-align: center;
        max-width: 720px;
        padding: 40px;
    }

    h1 {
        color: #ffffff;
        border-radius: 12px;
        font-size: 32px;
        padding: 15px 25px;
        animation: fadeDown 1s ease;
    }
    
    p {
        color: #ffffff;
        font-size: 15px;
        margin-bottom: 30px;
        animation: fadeDown 1s ease;
    }

    .main-buttons {
        display: flex;
        justify-content: center;
        gap: 15px;
        margin-bottom: 25px;
        animation: fadeDown 1s ease;
    }

    .btn-primary-custom {
        background-color: #0a72e8;
        color: white;
        border-radius: 10px;
        padding: 10px 22px;
        text-decoration: none;
        font-weight: 500;
        animation: fadeDown 1s ease;
    }

    .btn-primary-custom:hover {
        background-color: #4f46e5;
        color: white;
        animation: fadeDown 1s ease;
    }

    .btn-outline-custom {
        border: 2px solid #0a72e8;
        color: #0a72e8;
        border-radius: 10px;
        padding: 10px 22px;
        text-decoration: none;
        font-weight: 500;
        animation: fadeDown 1s ease;
    }

    .btn-outline-custom:hover {
        background-color: #6366f1;
        color: white;
        animation: fadeDown 1s ease;
    }

    .divider {
        display: flex;
        align-items: center;
        gap: 10px;
        color: #ffffff;
        font-size: 13px;
        margin: 10px 0;
        animation: fadeDown 1s ease;
    }

    .divider::before,
    .divider::after {
        content: "";
        flex: 1;
        height: 1px;
        background-color: #ffffff;
        animation: fadeDown 1s ease;
    }

    .google-card {
        background: #ffffff;
        border-radius: 14px;
        padding: 10px;
        box-shadow: 0 10px 15px rgba(0,0,0,.08);
        animation: fadeDown 1s ease;
    }

    footer {
        margin-top: 30px;
        font-size: 12px;
        color: #9ca3af;
        animation: fadeDown 1s ease;
    }
    
    .logo-img {
        display: flex;
        flex-direction: column; /* logo arriba, texto abajo */
        align-items: center;    /* centra horizontal */
        justify-content: center;
        margin-bottom: 1px;    
        animation: fadeDown 1s ease;
    }

    @keyframes fadeDown {
    from {
        opacity: 0;
        transform: translateY(-15px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
    }
    </style>
</head>
<body>

<div class="container-welcome">

    <!-- Logo / Nombre -->
    <div class="logo">
    <img src="{{ asset('images/logo-animestore.png') }}"
         alt="AnimeStore Logo"
         class="logo-img">
    </div>

    <!-- Título -->
    <h1>
        ¡BIENVENIDO!
    </h1>

    <p>
        Estás ingresando a <strong>AnimeStore</strong>, tu tienda en línea de
        figuras, mangas y coleccionables de anime.
        Algunas funciones pueden encontrarse en fase de prueba.
    </p>

    <!-- Botones principales -->
    <div class="main-buttons">
        <a href="{{ route('login') }}" class="btn-primary-custom">
            Iniciar Sesión
        </a>

        <a href="{{ route('register') }}" class="btn-outline-custom">
            Registrarse
        </a>
    </div>

    <!-- Separador -->
    <div class="divider">
        o continúa con
    </div>

    <!-- Google -->
    <div class="google-card">
        <p class="mb-2 fw-semibold text-muted">
            Acceso rápido con Google
        </p>

        <a href="/google-auth/redirect" class="btn btn-light border">
            <img src="https://www.svgrepo.com/show/475656/google-color.svg" width="18" class="me-2">
            Continuar con Google
        </a>
    </div>

    <footer>
        © {{ date('Y') }} AnimeStore · Todos los derechos reservados
    </footer>

</div>

</body>
</html>
