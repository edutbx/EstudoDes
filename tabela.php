<!DOCTYPE html>
<html lang="pt-br">
<?php
    include 'func.php';
?>
<body>
    <style>
      #container{
        display: grid;
        grid-template-columns: repeat(14, auto);  
        grid-template-rows: repeat(10, auto);
        
      }
      #nome{
        background-color: white;
      }
      body{
        background-color: aquamarine;
      }
      #po{
        background-color: white;
        grid-area: 2/2/11/7;
      }
      h1{
        text-align:center;
      }
      h3{
        margin-left: 30%;
      }
      table, th, td {
        border: 1px solid;
      }
      table{
        font-family: Arial;
      }
      .oi{
            background-color: lightgray;
        }
        #tab2{
        font-family: Arial;
        background-color: white;
        grid-area: 2/8/5/14;
        }
        .nome2{
          background-color: blue;
        }
    </style>
    <div id="nome">
    <p>
      <b><h1>Tabelas</h1></b>
    </p>
    </div>
    <p>
      <b><h3>Tarde</h3></b>
    </p>
    <div id="nome2">
    <p>
      <b><h3>Noite</b></h3>
    </p>
    </div>
    <div id="container">
    <table id="po">
  <tr>
    <th></th>
    <th>Data</th>
    <th>Lab 1</th>
    <th>Lab 2</th>
    <th>Lab 3</th>
  </tr>
  <tr class="oi">
    <td>Aula 1</td>
    <td>Quinta 01/09</td>
    <td><?php echo $professores[0];?></td>
    <td><?php echo $professores[1];?></td>
    <td><?php echo $professores[3];?></td>
  </tr>
  <tr class="oi">
    <td >Aula 2</td>
    <td></td>
    <td><?php echo $professores[0];?></td>
    <td><?php echo $professores[2];?></td>
    <td><?php echo $professores[3];?></td>
  </tr>
  <tr>
    <td>Aula 1</td>
    <td>Sexta 02/09</td>
    <td><?php echo $professores[4];?></td>
    <td><?php echo $professores[1];?></td>
    <td><?php echo $professores[3];?></td>
  </tr>
  <tr>
  <td>Aula 2</td>
    <td></td>
    <td></td>
    <td><?php echo $professores[5];?></td>
    <td><?php echo $professores[3];?></td>
  </tr>
  <tr class="oi">
    <td>Aula 1</td>
    <td>Segunda 05/09</td>
    <td><?php echo $professores[2];?></td>
    <td><?php echo $professores[5];?></td>
    <td><?php echo $professores[3];?></td>
  </tr>
  <tr class="oi">
  <td>Aula 2</td>
    <td></td>
    <td><?php echo $professores[2];?></td>
    <td><?php echo $professores[1];?></td>
    <td><?php echo $professores[6];?></td>
  </tr>
  <tr>
    <td>Aula 1</td>
    <td>Terça 06/09</td>
    <td></td>
    <td><?php echo $professores[3];?></td>
    <td></td>
  </tr>
  <tr>
  <td>Aula 2</td>
    <td></td>
    <td><?php echo $professores[1];?></td>
    <td><?php echo $professores[7];?></td>
    <td><?php echo $professores[2];?></td>
  </tr>
  <tr class="oi">
    <td>Aula 1</td>
    <td>Quarta 07/09</td>
    <td><?php echo $professores[3];?></td>
    <td><?php echo $professores[5];?></td>
    <td><?php echo $professores[2];?></td>
  </tr>
  <tr class="oi">
  <td>Aula 2</td>
    <td></td>
    <td><?php echo $professores[3];?></td>
    <td><?php echo $professores[2];?></td>
    <td><?php echo $professores[1];?></td>
  </tr>
  <tr>
    <td>Aula 1</td>
    <td>Quinta 08/09</td>
    <td><?php echo $professores[0];?></td>
    <td><?php echo $professores[1];?></td>
    <td><?php echo $professores[3];?></td>
  </tr>
  <tr>
  <td>Aula 2</td>
    <td></td>
    <td><?php echo $professores[0];?></td>
    <td><?php echo $professores[2];?></td>
    <td><?php echo $professores[3];?></td>
  </tr>
  <tr class="oi">
    <td>Aula 1</td>
    <td>Sexta 09/09</td>
    <td><?php echo $professores[4];?></td>
    <td><?php echo $professores[1];?></td>
    <td><?php echo $professores[3];?></td>
  </tr>
  <tr class="oi">
  <td>Aula 2</td>
    <td></td>
    <td></td>
    <td><?php echo $professores[5];?></td>
    <td><?php echo $professores[3];?></td>
  </tr>
  <tr>
    <td>Aula 1</td>
    <td>Segunda 12/09</td>
    <td><?php echo $professores[2];?></td>
    <td><?php echo $professores[5];?></td>
    <td><?php echo $professores[3];?></td>
  </tr>
  <tr>
  <td>Aula 2</td>
    <td></td>
    <td><?php echo $professores[2];?></td>
    <td><?php echo $professores[1];?></td>
    <td><?php echo $professores[6];?></td>
  </tr>
  <tr class="oi">
    <td>Aula 1</td>
    <td>Terça 13/09</td>
    <td></td>
    <td><?php echo $professores[3];?></td>
    <td></td>
  </tr>
  <tr class="oi">
  <td>Aula 2</td>
    <td></td>
    <td><?php echo $professores[1];?></td>
    <td><?php echo $professores[7];?></td>
    <td><?php echo $professores[2];?></td>
  </tr>
  <tr>
    <td>Aula 1</td>
    <td>Quarta 14/09</td>
    <td><?php echo $professores[3];?></td>
    <td><?php echo $professores[5];?></td>
    <td><?php echo $professores[2];?></td>
  </tr>
  <tr>
  <td>Aula 2</td>
    <td></td>
    <td><?php echo $professores[3];?></td>
    <td><?php echo $professores[2];?></td>
    <td><?php echo $professores[1];?></td>
  </tr>
  <tr class="oi">
    <td>Aula 1</td>
    <td>Quinta 15/09</td>
    <td><?php echo $professores[0];?></td>
    <td><?php echo $professores[1];?></td>
    <td><?php echo $professores[3];?></td>
  </tr>
  <tr class="oi">
  <td>Aula 2</td>
    <td></td>
    <td><?php echo $professores[0];?></td>
    <td><?php echo $professores[2];?></td>
    <td><?php echo $professores[3];?></td>
  </tr>
  <tr>
    <td>Aula 1</td>
    <td>Sexta 16/09</td>
    <td><?php echo $professores[6];?></td>
    <td><?php echo $professores[1];?></td>
    <td><?php echo $professores[3];?></td>
  </tr>
  <tr>
  <td>Aula 2</td>
    <td></td>
    <td></td>
    <td><?php echo $professores[5];?></td>
    <td><?php echo $professores[3];?></td>
  </tr>
  <tr class="oi">
    <td>Aula 1</td>
    <td>Segunda 19/09</td>
    <td><?php echo $professores[2];?></td>
    <td><?php echo $professores[5];?></td>
    <td><?php echo $professores[3];?></td>
  </tr>
  <tr class="oi">
  <td>Aula 2</td>
    <td></td>
    <td><?php echo $professores[2];?></td>
    <td><?php echo $professores[1];?></td>
    <td><?php echo $professores[6];?></td>
  </tr>
  <tr>
    <td>Aula 1</td>
    <td>Terça 20/09</td>
    <td></td>
    <td><?php echo $professores[3];?></td>
    <td></td>
  </tr>
  <tr>
  <td>Aula 2</td>
    <td></td>
    <td><?php echo $professores[1];?></td>
    <td><?php echo $professores[7];?></td>
    <td><?php echo $professores[2];?></td>
  </tr>
  <tr class="oi">
    <td>Aula 1</td>
    <td>Quarta 21/09</td>
    <td><?php echo $professores[3];?></td>
    <td><?php echo $professores[5];?></td>
    <td><?php echo $professores[2];?></td>
  </tr>
  <tr>
  <td>Aula 2</td>
    <td></td>
    <td><?php echo $professores[3];?></td>
    <td><?php echo $professores[2];?></td>
    <td><?php echo $professores[1];?></td>
  </tr>
  <tr class="oi">
    <td>Aula 1</td>
    <td>Quinta 22/09</td>
    <td><?php echo $professores[0];?></td>
    <td><?php echo $professores[1];?></td>
    <td><?php echo $professores[3];?></td>
  </tr>
  <tr>
  <td>Aula 2</td>
    <td></td>
    <td><?php echo $professores[0];?></td>
    <td><?php echo $professores[2];?></td>
    <td><?php echo $professores[3];?></td>
  </tr>
  <tr class="oi">
    <td>Aula 1</td>
    <td>Sexta 23/09</td>
    <td><?php echo $professores[8];?></td>
    <td><?php echo $professores[1];?></td>
    <td><?php echo $professores[3];?></td>
  </tr>
  <tr class="oi">
  <td>Aula 2</td>
    <td></td>
    <td></td>
    <td><?php echo $professores[5];?></td>
    <td><?php echo $professores[3];?></td>
  </tr>
  <tr>
    <td>Aula 1</td>
    <td>Segunda 26/09</td>
    <td><?php echo $professores[2];?></td>
    <td><?php echo $professores[5];?></td>
    <td><?php echo $professores[3];?></td>
  </tr>
  <tr>
  <td>Aula 2</td>
    <td></td>
    <td><?php echo $professores[2];?></td>
    <td><?php echo $professores[1];?></td>
    <td><?php echo $professores[6];?></td>
  </tr>
  <tr class="oi">
    <td>Aula 1</td>
    <td>Terça 27/09</td>
    <td></td>
    <td><?php echo $professores[3];?></td>
    <td></td>
  </tr>
  <tr class="oi">
  <td>Aula 2</td>
    <td></td>
    <td><?php echo $professores[1];?></td>
    <td><?php echo $professores[7];?></td>
    <td><?php echo $professores[2];?></td>
  </tr>
  <tr>
    <td>Aula 1</td>
    <td>Quarta 28/09</td>
    <td><?php echo $professores[3];?></td>
    <td><?php echo $professores[5];?></td>
    <td><?php echo $professores[2];?></td>
  </tr>
  <tr>
  <td>Aula 2</td>
    <td></td>
    <td><?php echo $professores[3];?></td>
    <td><?php echo $professores[2];?></td>
    <td><?php echo $professores[1];?></td>
  </tr>
  <tr class="oi">
    <td>Aula 1</td>
    <td>Quinta 29/09</td>
    <td><?php echo $professores[0];?></td>
    <td><?php echo $professores[1];?></td>
    <td><?php echo $professores[3];?></td>
  </tr>
  <tr class="oi">
  <td>Aula 2</td>
    <td></td>
    <td><?php echo $professores[0];?></td>
    <td><?php echo $professores[2];?></td>
    <td><?php echo $professores[3];?></td>
  </tr>
  <tr>
    <td>Aula 1</td>
    <td>Sexta 30/09</td>
    <td><?php echo $professores[4];?></td>
    <td><?php echo $professores[1];?></td>
    <td><?php echo $professores[3];?></td>
  </tr>
  <tr>
  <td>Aula 2</td>
    <td></td>
    <td></td>
    <td><?php echo $professores[5];?></td>
    <td><?php echo $professores[3];?></td>
  </tr>
</table>



<table id="tab2">
    <tr>
    <th></th>
    <th>Data</th>
    <th>Lab 1</th>
    <th>Lab 2</th>
    <th>Lab 3</th>
    </tr>
    <tr class="oi">
    <td>Aula 1</td>
    <td>Quinta 01/09</td>
    <td><?php echo $professores[13];?></td>
    <td><?php echo $professores[1];?></td>
    <td><?php echo $professores[3];?></td>
  </tr>
  <tr class="oi">
  <td>Aula 2</td>
    <td></td>
    <td><?php echo $professores[1];?></td>
    <td><?php echo $professores[13];?></td>
    <td><?php echo $professores[3];?></td>
  </tr>
  <tr>
    <td>Aula 1</td>
    <td>Sexta 02/09</td>
    <td><?php echo $professores[4];?></td>
    <td><?php echo $professores[13];?></td>
    <td><?php echo $professores[10];?></td>
  </tr>
  <tr>
  <td>Aula 2</td>
    <td></td>
    <td><?php echo $professores[9];?></td>
    <td><?php echo $professores[13];?></td>
    <td><?php echo $professores[10];?></td>
  </tr>
  <tr class="oi">
    <td>Aula 1</td>
    <td>Segunda 05/09</td>
    <td><?php echo $professores[1];?></td>
    <td><?php echo $professores[10];?></td>
    <td><?php echo $professores[2];?></td>
  </tr>
  <tr class="oi">
  <td>Aula 2</td>
    <td></td>
    <td><?php echo $professores[2];?></td>
    <td><?php echo $professores[10];?></td>
    <td><?php echo $professores[1];?></td>
  </tr>
  <tr>
    <td>Aula 1</td>
    <td>Terça 06/09</td>
    <td><?php echo $professores[5];?></td>
    <td><?php echo $professores[1];?></td>
    <td><?php echo $professores[2];?></td>
  </tr>
  <tr>
  <td>Aula 2</td>
    <td></td>
    <td><?php echo $professores[14];?></td>
    <td><?php echo $professores[1];?></td>
    <td><?php echo $professores[2];?></td>
  </tr>
  <tr  class="oi">
    <td>Aula 1</td>
    <td>Quarta 07/09</td>
    <td></td>
    <td><?php echo $professores[3];?></td>
    <td><?php echo $professores[1];?></td>
  </tr>
  <tr  class="oi">
  <td>Aula 2</td>
    <td></td>
    <td><?php echo $professores[5];?></td>
    <td><?php echo $professores[3];?></td>
    <td><?php echo $professores[1];?></td>
  </tr>
  <tr>
    <td>Aula 1</td>
    <td>Quinta 08/09</td>
    <td><?php echo $professores[13];?></td>
    <td><?php echo $professores[1];?></td>
    <td><?php echo $professores[3];?></td>
  </tr>
  <tr>
  <td>Aula 2</td>
    <td></td>
    <td><?php echo $professores[1];?></td>
    <td><?php echo $professores[13];?></td>
    <td><?php echo $professores[3];?></td>
  </tr>
  <tr  class="oi">
    <td>Aula 1</td>
    <td>Sexta 09/09</td>
    <td><?php echo $professores[5];?></td>
    <td><?php echo $professores[13];?></td>
    <td><?php echo $professores[10];?></td>
  </tr>
  <tr  class="oi">
  <td>Aula 2</td>
    <td></td>
    <td><?php echo $professores[9];?></td>
    <td><?php echo $professores[13];?></td>
    <td><?php echo $professores[10];?></td>
  </tr>
  <tr>
    <td>Aula 1</td>
    <td>Segunda 12/09</td>
    <td><?php echo $professores[1];?></td>
    <td><?php echo $professores[10];?></td>
    <td><?php echo $professores[2];?></td>
  </tr>
  <tr>
  <td>Aula 2</td>
    <td></td>
    <td><?php echo $professores[2];?></td>
    <td><?php echo $professores[10];?></td>
    <td><?php echo $professores[1];?></td>
  </tr>
  <tr  class="oi">
    <td>Aula 1</td>
    <td>Terça 13/09</td>
    <td><?php echo $professores[5];?></td>
    <td><?php echo $professores[1];?></td>
    <td><?php echo $professores[12];?></td>
  </tr>
  <tr  class="oi">
  <td>Aula 2</td>
    <td></td>
    <td><?php echo $professores[11];?></td>
    <td><?php echo $professores[1];?></td>
    <td><?php echo $professores[2];?></td>
  </tr>
  <tr>
    <td>Aula 1</td>
    <td>Quarta 14/09</td>
    <td</td>
    <td><?php echo $professores[3];?></td>
    <td><?php echo $professores[1];?></td>
  </tr>
  <tr>
  <td>Aula 2</td>
    <td></td>
    <td><?php echo $professores[5];?></td>
    <td><?php echo $professores[3];?></td>
    <td><?php echo $professores[1];?></td>
  </tr>
  <tr  class="oi">
    <td>Aula 1</td>
    <td>Quinta 15/09</td>
    <td><?php echo $professores[13];?></td>
    <td><?php echo $professores[1];?></td>
    <td><?php echo $professores[3];?></td>
  </tr>
  <tr  class="oi">
  <td>Aula 2</td>
    <td></td>
    <td><?php echo $professores[1];?></td>
    <td><?php echo $professores[13];?></td>
    <td><?php echo $professores[3];?></td>
  </tr>
  <tr>
    <td>Aula 1</td>
    <td>Sexta 15/09</td>
    <td><?php echo $professores[4];?></td>
    <td><?php echo $professores[13];?></td>
    <td><?php echo $professores[10];?></td>
  </tr>
  <tr>
  <td>Aula 2</td>
    <td></td>
    <td><?php echo $professores[9];?></td>
    <td><?php echo $professores[13];?></td>
    <td><?php echo $professores[10];?></td>
  </tr>
    </table>
</div>
</body>
</html>
