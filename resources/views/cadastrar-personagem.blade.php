<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastrar personagem</title>
        <link rel = "stylesheet" href = "{{ asset('css/style.css') }}" />
    </head>
    <body>
        <div id="filter"></div>
        <nav>
            <ul>
                <li>
                    <a href = "{{ route('view.add.personagem') }}">Home</a>
                </li>
                <li>
                    <a href = "{{ route('view.add.personagem') }}">Cadastrar personagem</a>
                </li>
                <li>
                    <a href = "{{ route('view.listar.personagem') }}">Listar personagens</a>
                </li>
            </ul>
        </nav>
        <form action = "{{ route('view.add.personagem') }}" method = "POST">
            <h2>Pronto para salvar o mundo?</h2>
            <!-- Obrigatório -->
            @csrf
            <div class="campos">
                <div class="field">
                    <label for = "name">Nome</label>
                    <input type = "text" id = "name" name = "name" required />
                </div>
                <div class="field">
                    <label for = "power">Poder</label>
                    <input type = "text" id = "power" name = "power" required />
                </div>
            </div>
            <button type = "submit">Cadastrar</button>
        </form>
    </body>
</html>