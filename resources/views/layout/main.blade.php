<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<header>
    <nav style="width: 40%; background: #184BFF;">
        <a href="/#"><img style="width: 55px; height: 55px;" href="rodrigopiltcher.test/favicon.png"></a>
        <div class="div1nav">
            <a class="logo" href="/#">Rodrigo Piltcher</a>
            <p class="subtitle" >Aparelho Digestivo e Cirurgia Robótica</p>
        </div>
    </nav>
</header>


<!--
<header>
    <nav style="width: 100%">
        <img href="{{ asset('favicon.png') }}">
        <a class="logo" href="/#">Rodrigo Piltcher</a>
        <ul class="nav-list">
            <li><a href="/#">Início</a></li>
            <li><a href="/#">Especialidades</a></li>
            <li><a href="/#">Cirurgias</a></li>
            <li><a href="/#">Contato</a></li>
            <li><a href="/#"><img href="{{ asset('vendor/img/instagram.png') }}"></a></li>
            <li><a href="/#"><img href="{{ asset('vendor/img/face.png') }}"></a></li>
        </ul>
    </nav>
</header> -->

<style>
    * {
        margin: 0;
        padding: 0;
    }

/* CSS DA PRIMEIRA NAV BAR (AZUL ESCURO) */
    .div1nav{
        padding-left: 40px;       
    }

    .logo{
        font-size: 32px;
        font-style: italic;
        font-weight: 600;
        line-height: normal;
        letter-spacing: 4px;
        color: #fff;
    }

    .subtitle{
        font-size: 17px;
        font-style: italic;
        font-weight: 400;
        letter-spacing: 3px;
        line-height: normal;
        color: #fff;
        
    }

    a {
        color: #fff;
        text-decoration: none;
        transition: 0.3s;
    }

    a:hover {
        opacity: 0.7;
    }

    nav {
        display: flex;
        padding-left: 20px;
        align-items:  center;
        height: 70px;
        align-items: flex-start;
    }
</style>

</body>
</html>