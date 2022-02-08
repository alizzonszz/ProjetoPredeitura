</head>
<label>Listagem de Pessoas</label>
<style>
      body{
        background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        color: white;
        text-align: center;
      }
    


  </style>
<div class="p-6">
  <div class="card">
    <div class="card-body">
      <?php

        include_once("config.php");

        
        $query = "SELECT id, nome, data_nascimento, cpf, sexo, cidade, bairro, rua, numero, complemento from pessoas";

        $result = mysqli_query($mysqli,$query);
            echo "<table border='1'>
                                    <tr>
                                        <th>id</th>
                                        <th>Nome</th>
                                        <th>Data Nascimento</th>
                                        <th>Cpf</th>
                                        <th>Sexo</th>
                                        <th>Cidade</th>
                                        <th>Bairro</th>
                                        <th>Rua</th>
                                        <th>Numero</th>
                                        <th>Complemento</th>
                                    </tr>";

        while($row = mysqli_fetch_assoc($result))
        {
          echo "<tr>";
          echo "<td>" . $row['id'] . "</td>";
          echo "<td>" . $row['nome'] . "</td>";
          echo "<td>" . $row['data_nascimento'] . "</td>";
          echo "<td>" . $row['cpf'] . "</td>";
          echo "<td>" . $row['sexo'] . "</td>";
          echo "<td>" . $row['cidade'] . "</td>";
          echo "<td>" . $row['bairro'] . "</td>";
          echo "<td>" . $row['rua'] . "</td>";
          echo "<td>" . $row['numero'] . "</td>";
          echo "<td>" . $row['complemento'] . "</td>";
          echo "<td><a href=\"editPessoa.php?id=$row[id]\">Edit</a> | <a href=\"deletePessoa.php?id=$row[id]\" onClick=\"return confirm('Confirma a exclusao deste registro?')\">Delete</a></td>";		
          echo "</tr>";
        }
        echo "</table>";

        mysqli_close($mysqli);
    ?> 