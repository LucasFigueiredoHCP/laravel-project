<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
</head>
<body>
<div>
    <h1 id="titulo">Cadastro de DEVs</h1>
    <p id="subtitulo">Complete suas informações</p>
  </div>
  <form method = "POST" action="{{ \Request::route('storeForm') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <fieldset class="grupo">
      <div class="campo">
      <label for="nome"><strong>Nome</strong></label>
      <input type="text" name="nome" id="nome" required></input>
      </div>
      <div class="campo">
         <label for="sobrenome"><strong>Sobrenome</strong></label>
      <input type="text" name="sobrenome" id="sobrenome" required>
        </div>
      </fieldset>
  <br>
  <div class="campo">
        <label for="email"><strong>Email</strong></label>
      <input type="email" name="email" id="email" required>
  </div>
  <br>
  <div class="campo">
    <label><strong>De qual lado da aplicação você desenvolve?</strong></label>
    <label>
    <input type="radio" id="lado_de_desenvolvimento_aplicacao" name="lado_de_desenvolvimento_aplicacao" value="frontend" checked>Front-end
    </input>
    </label>
  <label>
  <input type="radio" id="lado_de_desenvolvimento_aplicacao" name="lado_de_desenvolvimento_aplicacao" value="backend">Back-end
    </input>
  </label>
  <label>
  <input type="radio" id="lado_de_desenvolvimento_aplicacao" name="lado_de_desenvolvimento_aplicacao" value="fullstack">Fullstack
    </input>
</label>
    </div>
<br>
<div class="campo">
  <label for="senioridade"><strong> Senioridade </strong></label>
  <select id="senioridade" name="senioridade">
    <option selected disable value="">Selecione</option>
    <option>Junior</option>
        <option>Pleno</option>
        <option>Senior</option> 
   </select>
</div>
<fieldset class="grupo">
  <div class="campo">
    <label><strong>Selecione as tecnologias que utiliza:</strong></label><br><br>
    <input type="checkbox" id="tecnologias" name="tecnologias" value="HTML">
    <label type="tecnologia1">HTML</label>
     <input type="checkbox" id="tecnologias" name="tecnologias" value="CSS">
    <label type="tecnologia2">CSS</label>
     <input type="checkbox" id="tecnologias" name="tecnologias" value="javascript">
    <label type="tecnologia3">Javascript</label>
     <input type="checkbox" id="tecnologias" name="tecnologias" value="PHP">
    <label type="tecnologia4">PHP</label>
     <input type="checkbox" id="tecnologias" name="tecnologias" value="C#">
    <label type="tecnologia5">C#</label>
     <input type="checkbox" id="tecnologias" name="tecnologias" value="python">
    <label type="tecnologia6">Python</label>
     <input type="checkbox" id="tecnologias" name="tecnologias" value="java">
    <label type="tecnologia7">Java</label>
  </div>
  </fieldset>
<div class="campo">
  <br>
  <label><strong>Conte um pouco da sua experiência:</strong></label>
  <textarea row="6" style="width: 26em" id="experiencia" name="experiencia"></textarea>
</div>
<button class="botao" type="submit">Concluir</button>
    </form>
</body>
</html>