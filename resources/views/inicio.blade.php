<<<<<<< HEAD
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Incio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
=======
@extends('_partials/main')

@section('conteudo')
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-custom-primary">
    <div class="container-fluid">
      <a class="navbar-brand text-custom-primary" href="#">Adote um Amigo</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Início</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Sobre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Animais para Adoção</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contato</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="bg-custom-secondary text-white text-center py-5">
    <div class="container">
      <h1 class="display-4">Dê um lar para um amigo</h1>
      <p class="lead">Encontre seu novo melhor amigo entre nossos animais disponíveis para adoção.</p>
      <a href="#" class="btn btn-custom-primary btn-lg">Ver Animais</a>
    </div>
  </section>

  <!-- Featured Animals Section -->
  <section class="py-5">
    <div class="container">
      <h2 class="text-center mb-4">Conheça nossos amigos</h2>
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="https://via.placeholder.com/300" class="card-img-top" alt="Animal 1">
            <div class="card-body">
              <h5 class="card-title">Rex</h5>
              <p class="card-text">Um cachorro brincalhão e cheio de energia.</p>
              <a href="#" class="btn btn-custom-primary">Adotar</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="https://via.placeholder.com/300" class="card-img-top" alt="Animal 2">
            <div class="card-body">
              <h5 class="card-title">Mimi</h5>
              <p class="card-text">Uma gata carinhosa que adora um colo.</p>
              <a href="#" class="btn btn-custom-primary">Adotar</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="https://via.placeholder.com/300" class="card-img-top" alt="Animal 3">
            <div class="card-body">
              <h5 class="card-title">Bolinha</h5>
              <p class="card-text">Um coelho tranquilo e muito fofo.</p>
              <a href="#" class="btn btn-custom-primary">Adotar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
>>>>>>> teste/4ANO-Fatec-Adocao-Animais
