<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <title>Sistema de Login</title>
  </head>
  <body>

  <div class="container text-center">
    <div class="row">
    <div class="col">
    <nav class="navbar bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="img/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
      Bootstrap
    </a>
  </div>
</nav>
    </div>
    <div class="container text-center">
    <div class="row">
    <div class="col">
      <nav class="navbar navbar-expand-lg bg-secondary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" style="color: white">Sistema Web 2.0</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#" style="color: white">Cadastrar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" style="color: white">Consultar</a>
        </li>
        </li>
      </ul>
    </div>
  </div>
</nav>
    </div>
    <div class="container text-center">
    <div class="row">
    <div class="col">
    <nav class="navbar bg-light">
      <div class="container-fluid">
        <span class="navbar-brand">Cadastro de Usuários</span>
</div>
</nav>
    &nbsp;
    <form class="row g-3">
    <div class="col-md-6">
    <label for="inputEmail4" class="col-sm-2 col-form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4">
    </div>

    <div class="col-md-6">
    <label for="inputEmail4" class="col-sm-2 col-form-label">Senha</label>
    <input type="password" class="form-control" id="inputPassword4">
    </div>

<div class="col-12">
  <label for="InputAddress" class="form-label">Endereço: </label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
</div>

<div class="col-6">
  <label for="InputAddress2" class="form-label">Bairro</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
</div>

    <div class="col-6">
  <label for="InputAddress2" class="form-label">Cep: </label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="00000-000">
</div>

<div class="col-md-6">
  <label for="InputCity" class="form-label">Cidade: </label>
  <input type="text" class="form-control" id="InputCity" placeholder="">
</div>

<div class="col-md-4">
  <label for="InputState" class="form-label">Estado: </label>
  <select class="form-select" id="InputState">
  <option selected>Escolha...</option>
  <option value="1">AC</option>
  <option value="2">AL</option>
  <option value="3">AP</option>
  <option value="4">AM</option>
  <option value="5">BA</option>
  <option value="6">CE</option>
  <option value="7">DF</option>
  <option value="8">ES</option>
  <option value="9">GO</option>
  <option value="10">MA</option>
  <option value="11">MT</option>
  <option value="12">MS</option>
  <option value="13">MG</option>
  <option value="14">PA</option>
  <option value="15">PB</option>
  <option value="16">PR</option>
  <option value="17">PE</option>
  <option value="18">PI</option>
  <option value="19">RJ</option>
  <option value="20">RN</option>
  <option value="21">RS</option>
  <option value="22">RO</option>
  <option value="23">RR</option>
  <option value="24">SC</option>
  <option value="25">SP</option>
  <option value="26">SE</option>
  <option value="27">TO</option>
</select>
</div>

<div class="col-12">
  <button type="submit" class="btn btn-dark">Cadastrar</button>
</div>
</form>
    </div>
  </div>
  </div>

  </body>
</html>