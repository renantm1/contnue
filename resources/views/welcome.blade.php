<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cont;nue</title>
    <!-- Link para o CSS do Tailwind, que vem com o Breeze -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        /* Estilização adicional para centralizar o conteúdo */
        .centered-content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }
        .title {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 2rem;
        }
        .links > a {
            margin: 0 15px;
            padding: 10px 20px;
            border: 2px solid #4A5568; /* Cor borda cinza */
            border-radius: 5px;
            text-decoration: none;
            color: #4A5568; /* Cor texto */
            transition: background-color 0.3s, color 0.3s;
        }
        .links > a:hover {
            background-color: #4A5568; /* Cor fundo cinza ao passar o mouse */
            color: #FFF; /* Cor texto branco ao passar o mouse */
        }
    </style>
</head>
<body class="antialiased">
    <div class="centered-content">
        <div class="title">Cont;nue</div>
        <div class="links">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}">Dashboard</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            @endif
        </div>
    </div>
</body>
</html>
