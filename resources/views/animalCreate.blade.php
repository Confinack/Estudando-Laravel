@extends('_partials/main')

@section('conteudo')
  <!-- Registration Form -->
  <div class="register-container">
    <h2 class="text-center mb-4">Adicionar animal</h2>
    <form action = "{{ route('animalCreate') }}" method = "POST">
      @csrf
      <div class="mb-3">
        <label for="name" class="form-label">Nome</label>
        <input type="text" class="form-control" id="name" name = "nome" placeholder="Digite seu nome completo" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Cor</label>
        <input type="text" class="form-control" id="email" name = "cor" placeholder="Digite seu e-mail" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Peso</label>
        <input type="text" class="form-control" id="password" name = "peso" placeholder="Digite sua senha" required>
      </div>
      <div class="mb-3">
        <label for="confirm-password" class="form-label">Idade</label>
        <input type="number" class="form-control" id="confirm-password" name = "idade" placeholder="Confirme sua senha" required>
      </div>
      <div class="mb-3">
        <label for="confirm-password" class="form-label">Especie</label>
        <input type="text" class="form-control" id="confirm-password" name = "especie" placeholder="Confirme sua senha" required>
      </div>
      <div class="mb-3">
        <label for="confirm-password" class="form-label">Raça</label>
        <input type="text" class="form-control" id="confirm-password" name = "raca" placeholder="Confirme sua senha" required>
      </div>
      <div class="d-grid">
        <button type="submit" class="btn btn-custom-primary">Registrar</button>
      </div>
      <div class="text-center mt-3">
        <p>Já tem uma conta? <a href="#" class="text-custom-primary">Faça login</a></p>
      </div>
    </form>
  </div>
@endsection