<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Cadastro de Protocolo</title>

  <div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32">
          <use xlink:href="#bootstrap" />
        </svg>
        <span class="fs-4">Cadastro de Protocolo</span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="pessoa.php" class="nav-link">Cadastro de Pessoas</a></li>
        <li class="nav-item"><a href="protocolo.php" class="nav-link">Cadastro de Protocolos</a></li>
      </ul>
    </header>
  </div>
</head>


<?php

    include_once("config.php");

    $query = "SELECT id, nome from Pessoas";
    $result = mysqli_query($mysqli,$query);
?>

<body>
  <div class="card rounded shadow-sm">
    <form id="idForm" class="class-form form" method="post" action="submitProtocolo.php">
      <div class="p-3">

        <div class="form-row">
          <div class="form-group col-md-2">
            <label>Numero</label>
            <input disabled="true" type="text" class="form-control" name="numero2" id="numero2" placeholder="AUTO" required>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label>Descricao</label>
            <input type="text" name="descricao" id="descricao" class="form-control" placeholder="descricao" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-2">
            <label>Data</label>
            <input type="text" name="data" id="data" class="form-control" placeholder="data" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-2">
            <label>Prazo</label>
            <input type="number" name="prazo" id="prazo" class="form-control" placeholder="prazo" required>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-2">
            <label>Contribuinte</label>
            
            <select class="form-select" id="contribuinte" name="contribuinte">
            <option value="">Selecione o contribuinte</option>
            <?php 
            if($result->num_rows > 0){ 
                while($row = $result->fetch_assoc()){  
                    echo '<option value="'.$row['id'].'">'.$row['nome'].'</option>'; 
                } 
            }else{ 
                echo '<option value="">Contribuintes não disponiveis</option>'; 
            } 
            ?>
        </select>

          </div>
        </div>

      </div>
      
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