<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
      <script src="https://kit.fontawesome.com/a4134bbe98.js" crossorigin="anonymous"></script>
      <script src="insteractions.js" async></script>
      <title>Prometeu</title>
      <link rel="stylesheet" href="main_style.css">
      <link rel="icon" href="imagens/iconepag-red.png">
</head>
<body>
    <!--Menu do topo-->
   <?php include('navbar.php'); ?>
   
   <div class="container">
    <form class="search_long" id="bar" method="get" action="pesquisa.php?busca=<?php if (isset($_GET['busca'])) echo $_GET['busca']?>">
        <input type="text" name="busca" value=<?php if (isset($_GET['busca'])) echo $_GET['busca']?>><button type="submit"><i class="fa-solid fa-magnifying-glass fa-lg"></i></button>
    </form>

      <?php 

      if (isset($_GET["busca"])) {
        
        $query = $mysqli->query("SELECT * FROM Artigos WHERE Titulo LIKE '%" . $_GET["busca"] . "%'");

        $categorias = array();

        //var_dump($categorias);
        $query->data_seek(0);

        while ($row = $query->fetch_assoc()) {
            if (!in_array($row['Assunto'], $categorias)) {
                $categorias[] = $row['Assunto'];
            }
        }

        if (!empty($categorias))
        {
            ?>
            <h2 style='margin-top: 2vh'>Resultados</h2>
            <?php
            foreach ($categorias as $categoria) {
            
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
        } else {
            echo("<h2 style='margin-top: 2vh'>Nenhum resultado encontrado.</h2>");
        }
      } else {
        echo("<h2 style='margin-top: 2vh'>Nenhum resultado encontrado.</h2>");
      }
      ?>
   </div>
</body>
</html>
