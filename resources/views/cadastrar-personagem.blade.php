<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastrar personagem</title>
    </head>
    <body>
        <form action = "{{ route('view.add.personagem') }}" method = "POST">
            <!-- Obrigatório -->
            @csrf
            <div class="field">
                <label for = "name">Nome</label>
                <input type = "text" id = "name" name = "name" required />
            </div>
            <div class="field">
                <label for = "power">Poder</label>
                <input type = "text" id = "power" name = "power" required />
            </div>
            <button type = "submit">Cadastrar</button>
        </form>
    </body>
</html>