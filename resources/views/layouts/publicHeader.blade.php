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
    <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">

    <!--Scripts-->
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

</head>

<body class="">
<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#"><img height="75" width="150" src="{{ asset('imgs/mtclogo.png') }}"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{route('sobre-nosotros')}}">Sobre nosotros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('rutas-publicas')}}">Rutas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Galeria</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Full Page Image Header with Vertically Centered Content -->
<header class="masthead">
<video loop muted autoplay poster="URL/TO/poster.jpg" class="background-video">
		<source src="{{ asset('videos/headervideo2.mp4') }}" type="video/mp4">
</video>
</header>

<!-- Page Content -->
<section class="py-5">
  <div class="container">