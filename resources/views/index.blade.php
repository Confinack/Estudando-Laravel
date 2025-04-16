<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
    </head>
    <body>
        <!-- Blade é o renderizador do php/laravel -->
        <ul>
            <li>
                <a href = "{{ route('view.index') }}">Home</a>
            </li>
            <li>
                <a href = "{{ route('view.add.personagem') }}">Cadastrar personagem</a>
            </li>
            <li>
                <a href = "{{ route('view.listar.personagem') }}">Listar personagens</a>
            </li>
        </ul>
    </body>
</html>