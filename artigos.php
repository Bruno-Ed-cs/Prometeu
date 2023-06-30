<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
   <script src="https://kit.fontawesome.com/a4134bbe98.js" crossorigin="anonymous"></script>
   <script src="/Prometeu/insteractions.js" async></script>
   <title>Prometeu</title>
   <link rel="stylesheet" href="/Prometeu/main_style.css">
   <link rel="icon" href="/Prometeu/imagens/iconepag-red.png">
</head>
<body>
   <!--Menu do topo-->
   <?php include('navbar.php'); ?>
   
   <div class="container">
      <?php 
      $query = $mysqli->query('SELECT * FROM Artigos');

      $categorias = array();

      //var_dump($categorias);
      $query->data_seek(0);

      while ($row = $query->fetch_assoc()) {
         if (!in_array($row['Assunto'], $categorias)) {
               $categorias[] = $row['Assunto'];
         }
      }

      foreach ($categorias as $categoria) {
      ?>
         <h2><?php echo $categoria; ?></h2>

         <?php 
         $query->data_seek(0); // Reinicia o ponteiro do resultado para o início

         while ($row = $query->fetch_assoc()) {
            if ($row['Assunto'] == $categoria) {
         ?>
               <a href="<?php echo $row['Localizacao']; ?>" class="showcase">
                  <div class="show-header">
                     <h4><?php echo $row['Titulo']; ?> </h4>
                  </div>
                  <div class="show-body">
                     <div class="display"><img src="<?php echo $row['Thumbnail']; ?>" ></div>
                     <p>
                        <?php echo $row['Descricao']; ?> 
                     </p>
                  </div>
                  <p class="date">
                     <?php echo $row['Publicacao']; ?> 
                  </p>
               </a>
               
         <?php  
            }
         }
         ?>
      <?php
      }
      ?>
   </div>
</body>
</html>
