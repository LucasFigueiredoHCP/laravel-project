<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Usuários cadastrados</title>
    <link rel="stylesheet" href="{{ asset('css/list.css') }}">
</head>
<body>
    <header>
        <h1>Listagem</h1>
    </header>

    <main>
    <h2 class ="name-topic" >Nome</h2>
        <div class = "list-box">
            
            <div class = "users-name">
                    @foreach($nome as $dataName)
                    {{ $dataName->nome }}
            <div class = "alterar-deletar">
                <div class = "alterar-button">
                <a href="{{  route('alterar', $dataName->id) }}">
                    <h2>Alterar</h2>
                </a>
                </div>
                <div class = "delete-button">
                <a href="{{  route('delete', $dataName->id) }}">
                <h2>Excluir</h2>
                </a>
            </div>
        </div>
        <br>
        <br>
            @endforeach
            </div>
        </div>

        

        
    </main>
</body>
</html>