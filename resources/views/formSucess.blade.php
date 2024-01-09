<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Concluido</title>
    <link rel="stylesheet" href="{{ asset('css/formSucess.css') }}">
</head>
<body>
    <header>
        <h1 id = "formSucess-tittle">Cadastro Concluido com sucesso</h1>
    </header>

    <main>
        <div class = "main-content">
            <?php
                $name = $form[0]->nome;
                $lastName = $form[0]->sobrenome;
                $nomeCompleto = "$name $lastName";

                echo "Agradecemos a sua colaboração <strong>$nomeCompleto</strong> ao preenchimento do cadastro.";
            ?>
        </div>

        <div class = "button" onclick="history.go(-1)">
            <button>Voltar</button>
        </div>

        <div class = "button-admin-page" > {{-- The parameter name must be the same that class name created in controller and mentioned in route --}}
            <a href="{{  route('dataList')  }}" class="btn">Listagem de pessoas cadastradas</a>
        </div>
    </main>
</body>
</html>