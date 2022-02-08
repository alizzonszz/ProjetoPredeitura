</head>
<label>Listagem de Protocólos</label>
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
        
        $query = "SELECT numero2, descricao, data, prazo, contribuinte from protocolo";

        $result = mysqli_query($mysqli,$query);
            echo "<table border='1'>
                                    <tr>
                                        <th>numero2</th>
                                        <th>descricao</th>
                                        <th>data</th>
                                        <th>prazo</th>
                                        <th>contribuinte</th>
                                    </tr>";

        while($row = mysqli_fetch_assoc($result))
        {
          echo "";
          echo "<td>" . $row['numero2'] . "</td>";
          echo "<td>" . $row['descricao'] . "</td>";
          echo "<td>" . $row['data'] . "</td>";
          echo "<td>" . $row['prazo'] . "</td>";
          echo "<td>" . $row['contribuinte'] . "</td>";
          echo "<td><a href=\"editProtocolo.php?numero2=$row[numero2]\">Edit</a> | <a href=\"deleteProtocolo.php?numero2=$row[numero2]\" onClick=\"return confirm('Confirma a exclusao deste registro?')\">Delete</a></td>";		
          echo "</tr>";
        }
        echo "</table>";

        mysqli_close($mysqli);
    ?> 