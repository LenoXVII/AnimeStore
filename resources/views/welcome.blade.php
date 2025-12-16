<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>AnimeStore | Bienvenido</title>

    <!-- Bootstrap (solo para botones) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            min-height: 100vh;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, sans-serif;
            background: linear-gradient(135deg, #0f172a, #020617);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container-welcome {
            text-align: center;
            max-width: 520px;
            padding: 40px;
        }

        .logo {
            font-size: 28px;
            font-weight: 800;
            color: #4f46e5;
            margin-bottom: 10px;
        }

        h1 {
            font-weight: 700;
            color: #f472b6; /* rosa anime */
            margin-bottom: 15px;
        }

        p {
            color: #6b7280;
            font-size: 15px;
            margin-bottom: 30px;
        }

        .main-buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 25px;
        }

        .btn-primary-custom {
            background-color: #6366f1;
            color: white;
            border-radius: 10px;
            padding: 10px 22px;
            text-decoration: none;
            font-weight: 500;
        }

        .btn-primary-custom:hover {
            background-color: #4f46e5;
            color: white;
        }

        .btn-outline-custom {
            border: 2px solid #6366f1;
            color: #6366f1;
            border-radius: 10px;
            padding: 10px 22px;
            text-decoration: none;
            font-weight: 500;
        }

        .btn-outline-custom:hover {
            background-color: #6366f1;
            color: white;
        }

        .divider {
            display: flex;
            align-items: center;
            gap: 10px;
            color: #9ca3af;
            font-size: 13px;
            margin: 25px 0;
        }

        .divider::before,
        .divider::after {
            content: "";
            flex: 1;
            height: 1px;
            background-color: #d1d5db;
        }

        .google-card {
            background: white;
            border-radius: 14px;
            padding: 22px;
            box-shadow: 0 10px 25px rgba(0,0,0,.08);
        }

        footer {
            margin-top: 30px;
            font-size: 12px;
            color: #9ca3af;
        }
    </style>
</head>
<body>

<div class="container-welcome">

    <!-- Logo / Nombre -->
    <div class="logo">🎌 AnimeStore</div>

    <h1>¡Bienvenido!</h1>

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
            <img src="https://www.svgrepo.com/show/475656/google-color.svg"
                 width="18" class="me-2">
            Continuar con Google
        </a>
    </div>

    <footer>
        © {{ date('Y') }} AnimeStore · Todos los derechos reservados
    </footer>

</div>

</body>
</html>
