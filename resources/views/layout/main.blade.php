<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="icon" type="image/png" href="{{ Vite::asset('resources/images/favicon.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<div style="display: inline; width: 100%">
    <div>   
        <nav style="padding-left: 200px;">
            <a href="/#" id="logo"><img style="height: 55px; width: 55px;" src="{{ Vite::asset('resources/images/favicon.png') }}"></a>
            <div class="div1nav">
                <a class="title" href="/#">Rodrigo Piltcher</a>
                <p class="subtitle" >Aparelho Digestivo e Cirurgia Robótica</p>
            </div>
        </nav>
    </div>
</div>

    @yield('fotos-passando')

    @yield('primeiro-conteudo')

    @yield('primeira-foto')

    @yield('segundo-conteudo')

<footer>
    <div class="footerdiv">
        <p>© 2023 Doutor Rodrigo Piltcher. Todos os direitos reservados.
        <br/>CRM-RS: 46401</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


<style>
    * {
        margin: 0;
        padding: 0;
    }

/* CSS DA PRIMEIRA NAV BAR (AZUL ESCURO) */
    body{
        overflow-y: visible;

    }

    .footerdiv p{
        font-size: 11px;
        line-height: normal;
        color: #fff;
    }

    .div1nav{
        padding-left: 40px;       
    }

    #logo{
        padding-top:5px;
    }

    .title{
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
        background: #001a66;
        /*background: #002080;*/
    }

    footer{
        background: #001a66;
        /*background: #002080;*/
        position: fixed;
        bottom:0;
        width:100%;
        height: 50px;
        padding: 10px 5px;
        margin-bottom: 0; /* reduzi a margem inferior para 0 */

        text-align: center;
    }

    @yield('style')
</style>

</body>
</html>