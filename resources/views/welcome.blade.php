<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Styles -->
    <style>
        body {
            background: linear-gradient(to bottom, #FFD900, #DC241F); 
            color: #333;
            margin: 0;
            padding: 0;
            font-family: 'figtree', sans-serif;
            min-height: 100vh;
            position: relative;
        }
        a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            transition: color 0.3s;
        }
        a:hover {
            color: #ccc;
        }
        header {
            background-color: rgba(0, 0, 0, 0.5);
            color: #fff;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 70px;
            margin-bottom: 20px; 
        }
        .container {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 20px;
            max-width: 1200px;
            margin: auto;
            padding-top: 40px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .image-container {
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
            aspect-ratio: 16/9;
            width: 48%;
        }
        .image-container:hover img {
            transform: scale(1.1);
        }
        .image-container img {
            width: 100%;
            height: auto;
            object-fit: cover;
            transition: transform 0.3s ease;
        }
        p {
            margin-bottom: 15px;
            text-align: justify;
        }
        strong {
            color: #DC241F;
        }
        footer {
            background-color: rgba(0, 0, 0, 0.5);
            color: #fff;
            text-align: center;
            padding: 10px;
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body class="antialiased">
    <header>
        <div>
            <img src="https://portalcolombia.terpel.com/static/images/terpel_logo_og.png" alt="#" class="col-8" width="100" height="auto">
        </div>
        <div>
            @if (Route::has('login'))
                <a href="{{ route('login') }}">Log in</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" style="margin-left: 10px;">Register</a>
                @endif
            @endif
        </div>
    </header>
    <div class="container">
        <div class="image-container">
            <img src="https://diariolaeconomia.com/media/k2/items/cache/fc22a1b66ed7e8dc368c09f8c417e025_XL.jpg" alt="Estación de servicio Terpel" class="img-fluid">
        </div>
        <div class="image-container">
            <img src="https://images.ctfassets.net/c63hsprlvlya/5yJx6Z617oXTUVdsKOYd3T/55b368833d684514a10fc243d82c9cc6/banner001_industria4-1.jpeg" alt="Combustible Terpel" class="img-fluid">
        </div>
        <div>
            <p>Terpel is a gas station for Colombians, offering reliable and accessible energy solutions to drive progress and mobility throughout the country.</p>
            <p>
                <strong>Terpel</strong> is a leading company in the energy sector, dedicated to the commercialization and distribution of fuels, lubricants, and related products. With a prominent presence in various Latin American countries, Terpel has been distinguished for its commitment to quality, innovation, and sustainability in all its operations.
            </p>
            <p>
                Since its foundation, Terpel has sought not only to satisfy the mobility needs of its customers but also to contribute to the sustainable development of the communities where it operates. Through corporate social responsibility programs and social investment projects, Terpel promotes well-being and progress in various areas, including education, health, environment, and community development.
            </p>
            <p>
                Terpel continues to innovate and expand its range of products and services, striving to meet the evolving needs of its customers while maintaining its commitment to excellence and sustainability.
            </p>
        </div>
    </div>
    <footer>
        <p>Todos los derechos reservados &copy; {{ date('Y') }}</p>
    </footer>
</body>
</html>
