<?php
include_once("config.php");

if(isset($_POST['update']))
{	
    $id = mysqli_real_escape_string($mysqli, $_POST['id']);     
    $nome = mysqli_real_escape_string($mysqli, $_POST['nome']);
    $data_nascimento = mysqli_real_escape_string($mysqli, $_POST['data_nascimento']);
    $cpf = mysqli_real_escape_string($mysqli, $_POST['cpf']);
    $sexo = mysqli_real_escape_string($mysqli, $_POST['sexo']);
    $cidade = mysqli_real_escape_string($mysqli, $_POST['cidade']);
    $bairro = mysqli_real_escape_string($mysqli, $_POST['bairro']);
    $rua = mysqli_real_escape_string($mysqli, $_POST['rua']);
    $numero = mysqli_real_escape_string($mysqli, $_POST['numero']);
    $complemento = mysqli_real_escape_string($mysqli, $_POST['complemento']);
	
    $result = mysqli_query($mysqli, "UPDATE Pessoas SET name='$nome', 
                                                        data_nascimento='$data_nascimento', 
                                                        cpf='$cpf', 
                                                        sexo='$sexo', 
                                                        cidade='$cidade', 
                                                        bairro='$bairro', 
                                                        rua='$rua', 
                                                        numero='$numero', 
                                                        complemento='$complemento' 
                                                        WHERE id=$id");
    header("Location: sistema.php");
    
}
?>
<?php

$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM pessoas WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
    $id = $res['id'];
    $nome = $res['nome'];
    $data_nascimento = $res['data_nascimento'];
    $cpf = $res['cpf'];
    $sexo = $res['sexo'];
    $cidade = $res['cidade'];
    $bairro = $res['bairro'];
    $rua = $res['rua'];
    $numero = $res['numero'];
    $complemento = $res['complemento'];
}
?>
<html>
<head>	
	<title>Edit Pessoa</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
	<a href="pessoa.php">Home</a>
	<br/><br/>
	
	<div class="card rounded shadow-sm">
  <form name="form1" method="post" action="editPessoa.php">
		<table border="0">
			<tr> 
				<td>Nome</td>
				<td><input type="text" name="name" class="form-control" value="<?php echo $nome;?>"></td>
			</tr>
			<tr> 
				<td>Data Nascimento</td>
				<td><input type="text" name="age" class="form-control" value="<?php echo $data_nascimento;?>"></td>
			</tr>
			<tr> 
				<td>CPF</td>
				<td><input type="text" name="cpf" class="form-control" value="<?php echo $cpf;?>"></td>
			</tr>
      <tr> 
				<td>Sexo</td>
				<td><input type="text" name="sexo" class="form-control" value="<?php echo $sexo;?>"></td>
			</tr>
      <tr> 
				<td>Cidade</td>
				<td><input type="text" name="cidade" class="form-control" value="<?php echo $cidade;?>"></td>
			</tr>
      <tr> 
				<td>Bairro</td>
				<td><input type="text" name="bairro" class="form-control" value="<?php echo $bairro;?>"></td>
			</tr>
      <tr> 
				<td>Rua</td>
				<td><input type="text" name="rua" class="form-control" value="<?php echo $rua;?>"></td>
			</tr>
      <tr> 
				<td>Complemento</td>
				<td><input type="text" name="complemento" class="form-control" value="<?php echo $complemento;?>"></td>
			</tr>
			<tr>
				<td><input class="btn btn-success" type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input class="btn btn-success" type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

</body>
</html>