<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Motoclub Comarca de Nijar</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}" class="href">
    <link rel="stylesheet" href="{{ asset('css/galeria.css')}}" class="href">
    <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
    
    <!--Scripts-->
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/galeria.js')}}"></script>

    <!--Fancybox (libreria para la galeria de fotros)-->
    <link href="{{ asset('css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/jquery.fancybox.min.js')}}"></script>


</head>

<body class="">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><img height="75" width="150" src="{{ asset('imgs/mtclogo.png') }}"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('sobre-nosotros')}}#about">Sobre nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('rutas-publicas')}}#rutas">Rutas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('galeria')}}#galeria">Galeria</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Full Page Image Header with Vertically Centered Content -->
    <header class="masthead">
        <div>
            <video loop muted autoplay poster class="background-video">
                <source src="{{ asset('videos/headervideo2.mp4') }}" type="video/mp4">
            </video>

    </header>

    <!-- Page Content -->
    <section class="py-5">
        <div class="container">