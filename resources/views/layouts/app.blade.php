<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Airi & Mal | Our Love Story')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">

    <style>
        :root {
            --cream: #f8f5ef;
            --beige: #e9dfd0;
            --brown: #78634f;
            --dark: #3f352d;
            --white: #fffdf9;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: var(--cream);
            color: var(--dark);
            font-family: 'DM Sans', sans-serif;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 25px 8%;
            border-bottom: 1px solid #e6ddd0;
        }

        .logo {
            font-family: 'Cormorant Garamond', serif;
            font-size: 28px;
            color: var(--brown);
            text-decoration: none;
        }

        .nav-links {
            display: flex;
            gap: 25px;
            flex-wrap: wrap;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--brown);
            font-size: 13px;
            transition: 0.3s;
        }

        .nav-links a:hover {
            color: #b18b69;
        }

        main {
            min-height: 75vh;
        }

        footer {
            text-align: center;
            padding: 30px 15px;
            color: var(--brown);
            font-size: 12px;
            border-top: 1px solid #e6ddd0;
        }

        .container {
            max-width: 1100px;
            margin: auto;
            padding: 60px 25px;
        }

        .btn {
            display: inline-block;
            padding: 13px 25px;
            background: var(--brown);
            color: white;
            text-decoration: none;
            border-radius: 3px;
            transition: 0.3s;
        }

        .btn:hover {
            background: var(--dark);
            transform: translateY(-2px);
        }

        @media (max-width: 700px) {
            nav {
                flex-direction: column;
                gap: 18px;
            }

            .nav-links {
                justify-content: center;
                gap: 15px;
            }
        }
    </style>

    @stack('styles')
</head>

<body>

    <nav>
        <a href="{{ route('home') }}" class="logo">
            Airi <span>&</span> Mal
        </a>

        <div class="nav-links">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('story') }}">Our Story</a>
            <a href="{{ route('memories') }}">Memories</a>
            <a href="{{ route('letter') }}">Love Letter</a>
            <a href="{{ route('surprise') }}">Surprise</a>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        Made with love, for Mal ♡
        <br>
        Airi & Mal · Since 01.11.2025
    </footer>

    @stack('scripts')

</body>
</html>
