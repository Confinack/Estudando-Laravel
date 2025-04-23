<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield("titulo")</title>
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
        @yield("conteudo");
    </body>
</html>