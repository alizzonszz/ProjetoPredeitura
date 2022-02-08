<?php
include_once("config.php");

if(isset($_POST['update']))
{	
    $numero2 = mysqli_real_escape_string($mysqli, $_POST['numero2']);
    $descricao = mysqli_real_escape_string($mysqli, $_POST['descricao']);     
    $prazo = mysqli_real_escape_string($mysqli, $_POST['prazo']);
    $contribuinte = mysqli_real_escape_string($mysqli, $_POST['contribuinte']);
    $contribuinteId = mysqli_real_escape_string($mysqli, $_POST['contribuinteId']);
   
	
    $result = mysqli_query($mysqli, "UPDATE protocolo SET descricao='$descricao', 
                                                           prazo='$prazo', 
                                                           contribuinte='$contribuinte'
                                                          WHERE numero2=$numero2");
    
    header("Location: protocolo.php");
}
?>
<?php

$numero2 = $_GET['numero2'];

$result = mysqli_query($mysqli, "SELECT p.numero2, p.descricao, p.prazo, pe.id as id_pessoa, pe.nome as contribuinte
                                 FROM protocolo p
                                 INNER JOIN pessoas pe on (p.contribuinte = pe.id)");




while($res = mysqli_fetch_array($result))
{
    $numero2 = $res['numero2'];
    $descricao = $res['descricao'];
    $prazo = $res['prazo'];
    $contribuinte = $res['contribuinte'];
}
?>
<html>
<head>	
	<title>Edit Protocolo</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
	<a href="protocolo.php">Home</a>
	<br/><br/>
	<div class="card rounded shadow-sm">
    <form id="idForm" class="class-form form" method="post" action="submitProtocolo.php">
      <div class="p-3">

        <div class="form-row">
          <div class="form-group col-md-2">
            <label>Numero</label>
            <input disabled="true" value="<?php echo $numero2; ?>" type="text" class="form-control" name="numero2" placeholder="AUTO" required>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label>Descricao</label>
            <input type="text" value="<?php echo $descricao; ?>" name="descricao" id="descricao" class="form-control" placeholder="Descricao" required>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-2">
            <label>Prazo</label>
            <input value="<?php echo $numero; ?>"type="number" name="prazo" id="prazo" class="form-control" placeholder="Prazo" required>
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
                    echo '<option value="'.$row['id_pessoa'].'">'.$row['contribuinte'].'</option>'; 
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