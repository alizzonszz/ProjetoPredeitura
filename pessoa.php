<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Cadastro de Pessoa</title>
  <div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32">
          <use xlink:href="#bootstrap" />
        </svg>
        <span class="fs-4">Cadastro de Pessoa</span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="pessoa.php" class="nav-link">Cadastro de Pessoas</a></li>
        <li class="nav-item"><a href="protocolo.php" class="nav-link">Cadastro de Protocolos</a></li>
      </ul>
    </header>
  </div>
    </div>
  </div>
      </div>

<body>
  <div class="card rounded shadow-sm">
    <form id="idForm" class="class-form form" method="post" action="submitPessoa.php">
      <div class="p-3">

        <div class="form-row">
          <div class="form-group col-md-2">
            <label>Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label>Data de Nascimento</label>
            <input type="text" name="data_nascimento" id="data_nascimento" class="form-control" placeholder="Data de Nascimento" required>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-2">
            <label>CPF</label>
            <input type="text" name="cpf" id="cpf" class="form-control" placeholder="CPF" required>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-2">
            <label>Sexo</label>
            <select class="form-select" name="sexo" id="sexo" required>
              <option selected>Selecione o sexo</option>
              <option value="M">Masculino</option>
              <option value="F">Feminino</option>
              <option value="O">Outros</option>
            </select>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-4">
            <label>Cidade</label>
            <input type="text" name="cidade" id="cidade" class="form-control" placeholder="cidade" required>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-4">
            <label>Bairro</label>
            <input type="text" name="bairro" id="bairro" class="form-control" placeholder="bairro" required>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-2">
            <label>Rua</label>
            <input type="text" name="rua" id="rua" class="form-control" placeholder="Rua" required>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-2">
            <label>Numero</label>
            <input type="text" name="numero" id="numero" class="form-control" placeholder="Numero" required>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-4">
            <label>Complemento</label>
            <input type="text" name="complemento" id="complemento" class="form-control" placeholder="Complemento">
          </div>
        </div>

      </div>
      
      <button  class="btn btn-primary">
        Cancelar
      </button>

      <button type="submit" name="submit" id="submit" class="btn btn-success">
        Salvar
      </button>

    </form>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

</body>

</html>