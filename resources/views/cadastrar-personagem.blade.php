@extends("_partials/base");

@section("titulo", "Cadastrar personagem");

@section("conteudo")
    <form action = "{{ route('view.add.personagem') }}" method = "POST">
        <h2>Pronto para salvar o mundo?</h2>
        <!-- Obrigatório -->
        @csrf
        <div class="campos">
            <div class="field">
                <label for = "name">Nome</label>
                <input type = "text" id = "name" name = "name" required tabindex = "1" autocomplete = "off" />
            </div>
            <div class="field">
                <label for = "power">Poder</label>
                <input type = "text" id = "power" name = "power" required tabindex = "2" autocomplete = "off" />
            </div>
        </div>
        <button type = "submit" tabindex = "3"></button>
    </form>
@endsection