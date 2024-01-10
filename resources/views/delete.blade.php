<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir</title>
    <link rel="stylesheet" href="#">
</head>
<body>
    <header>
        <h1>Excluir</h1>
    </header>

    <main>
    <form method = "POST" action="{{ \Request::route('storeForm') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <fieldset class="grupo">
      <div class="campo">
      <label for="nome"><strong>Nome</strong></label>
      <input type="text" name="nome" id="nome" required value = <?php echo $selectedUser[0]->nome; ?>></input>
      </div>
      <div class="campo">
         <label for="sobrenome"><strong>Sobrenome</strong></label>
      <input type="text" name="sobrenome" id="sobrenome" required value = <?php echo $selectedUser[0]->sobrenome; ?>>
        </div>
    </fieldset>
    <br>
  <div class="campo">
        <label for="email"><strong>Email</strong></label>
      <input type="email" name="email" id="email" required value = <?php echo $selectedUser[0]->email; ?>>
  </div>
  <br>
    <a href="#" method = "POST" action="{{ \Request::route('deleteForm') }}"><button class="botao" type="submit">Deletar</button></a>
</form>
    </main>
<div class = "back-button" onclick="history.go(-1)">
  <p>Voltar</p>
</div>
</body>
</html>