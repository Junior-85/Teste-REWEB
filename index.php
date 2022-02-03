<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilo.css">
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
  <script type="text/javascript" src="script.js"></script>
  <title>Document</title> 
</head>
<body>

  <header class="cabecalho">
    <h1>Teste REWEB</h1>
  </header> 
    <main class="principal">
        <div class="conteudo"> 
        <?php
        $carros = fopen('carros.csv','r');
          if($carros){
            $cabecalho = fgetcsv($carros, 0, ",");
            echo '<table id="tabela" border="1">';  
            echo '<caption>Lista de Veículos</caption>';
            echo '<thead>';
          
            echo '<tr>';
              echo '<th> <input type="text" id="txtColuna1" placeholder="Filtrar"></th>';
              echo '<th> <input type="text" id="txtColuna2" placeholder="Filtrar"></th>';
              echo '<th> <input type="text" id="txtColuna2" placeholder="Filtrar"></th>';
              echo '<th> <input type="text" id="txtColuna2" placeholder="Filtrar"></th>';
              echo '<th> <input type="text" id="txtColuna2" placeholder="Filtrar"></th>';
              echo '<th> <input type="text" id="txtColuna2" placeholder="Filtrar"></th>';
              echo '<th> <input type="text" id="txtColuna2" placeholder="Filtrar"></th>';
              echo '<th> <input type="text" id="txtColuna2" placeholder="Filtrar"></th>';
              echo '<th> <input type="text" id="txtColuna2" placeholder="Filtrar"></th>';
              echo '<th> <input type="text" id="txtColuna2" placeholder="Filtrar"></th>';
              echo '<th> <input type="text" id="txtColuna2" placeholder="Filtrar"></th>';
              echo '<th> <input type="text" id="txtColuna2" placeholder="Filtrar"></th>';
              echo '<th> <input type="text" id="txtColuna2" placeholder="Filtrar"></th>';
            echo '</tr>';
                    
            echo '<tr>';
            foreach($cabecalho as $dado){
              echo  '<th scope="col">' . ucfirst($dado). '</th>';
               }
               echo '</tr>';
              echo '</thead>';
             
          
              while(!feof($carros)){
                $linha = fgetcsv($carros, 0, ",");
                if(!$linha) {
                 
                  continue;
                } 
                 echo '<tr>';
  
               foreach($linha as $indice => $item){
                 if($indice == 0){
                   echo  '<td>' . $item . '</td>';
                 } else if($indice == 1){
                   echo  '<td>' . $item . '</td>';
                 } else if($indice == 2){
                   echo  '<td>' . $item . '</td>'; 
                 } else if($indice == 3){
                   echo  '<td>' . $item . '</td>';
                 } else if($indice == 4){
                   echo  '<td>' . $item . '</td>';
                 } else if($indice == 5){
                   echo  '<td>' . $item . '</td>';
                 } else if($indice == 6){
                   echo  '<td>' . $item . '</td>';
                 } else if($indice == 7){
                   echo  '<td>' . $item . '</td>';
                 } else if($indice == 8){
                   echo  '<td>' . $item . '</td>';
                 } else if($indice == 9){
                   echo  '<td>' . $item . '</td>';
                 } else if($indice == 10){
                   echo  '<td>' . $item . '</td>';
                 } else if($indice == 11){
                   echo  '<td>'. 'R$' . $item . '</td>';
                 } else if($indice == 12){
                   echo  '<td>' . date( 'd/m/Y H:i:s',strtotime($item)) . '</td>';
                 }
                }
              echo '</tr>';        
             }
             fclose($carros);
            } 
            echo '</tbody>';

        echo '</table>';
        ?>         
      </div>        
    </main>
    <footer class="rodape">
    github.com/Junior-85 © <?= date('Y'); ?>
    </footer>    
</body>
</html>