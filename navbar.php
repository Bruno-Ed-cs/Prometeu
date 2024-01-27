<?php require("connect.php"); ?>
<nav>
   <li>
      <a tabindex="0" onclick="call('side_menu')" class="button_menu icon">
         <i class="fa-solid fa-bars fa-xl"></i>
         <p>Menu</p>
      </a>
   </li>
   <li>
      <a class="selectable icon" href="/Prometeu/index.php">
         <span><i class="fa-solid fa-house fa-sm"></i></span>
         <p>Início</p>
      </a>
   </li>
   <li>
      <a class="selectable icon" href="/Prometeu/artigos.php">
         <i class="fa-solid fa-newspaper fa-sm"></i>
         <p>Artigos</p>
      </a>
   </li>
   <li>
      <a class="selectable icon" href="/Prometeu/timeline.php">
         <i class="fa-solid fa-timeline fa-sm"></i>
         <p>Linha do tempo</p>
      </a>
   </li>
   <li>
      <a tabindex="0" class="selectable icon" onclick="call('config_menu')">
         <i class="fa-solid fa-palette fa-sm"></i>
         <p>Temas</p>
      </a>
   </li>
   <li>
      <a tabindex="0" onclick="call('bar')" class="icon">
         <i class="fa-solid fa-magnifying-glass fa-sm"></i>
         <p>Busca</p>
      </a>
      <form class="search_bar menu" id="bar" method="get" action="/Prometeu/pesquisa.php?busca=<?php if (isset($_GET['busca'])) echo $_GET['busca']?>">
         <input type="text" name="busca" placeholder="Pesquisar artigos...">
         <button aria-label="Search button" type="submit"><i class="fa-solid fa-magnifying-glass fa-lg"></i></button>
      </form>
   </li>
   <img id="logo" src="/Prometeu/imagens/logopainel.png" alt="logo">
</nav>

<!-- Menu de Configurações -->
<div aria-label="Theme configuration" class="config menu" id="config_menu">
   <a aria-label="Close" tabindex="0" class="selectable close_menu icon" onclick="close_element('config_menu')"><i class="fa-sharp fa-solid fa-circle-xmark fa-lg"></i></a>
   <h4>Aparência</h4>
   <div class="themes">
      <div tabindex="0" class="field " id="dark" onclick="change_theme('dark_theme', this)">
         <a class="selectable icon">
            <i class="fa-sharp fa-solid fa-cloud-moon"></i>
            <p>Tema Escuro</p>
         </a>
      </div>
      <div tabindex="0" class="field " id='light' onclick="change_theme('light_theme', this)">
         <a class="selectable icon">
            <i class="fa-solid fa-sun"></i>
            <p>Tema claro</p>
         </a>
      </div>
      <div tabindex="0" class="field " id='contrast' onclick="change_theme('high_contrast', this)">
         <a class="selectable icon">
            <i class="fa-solid fa-eye"></i>
            <p>Alto-contraste</p>
         </a>
      </div>
   </div>
</div>
<!--Menu lateral dos artigos -->
<aside id="side_menu" class="menu">
   <div class="top">
      <h4>Artigos</h4>
      <a aria-label="Close" tabindex="0" class="selectable icon close_menu" onclick="close_element('side_menu')"><i class="fa-sharp fa-solid fa-circle-xmark fa-lg"></i></a>
   </div>
   <div class="artigos">
      <?php 
      $links = $mysqli->query('SELECT Abreviacao, Localizacao, Assunto FROM Artigos');
      $assuntos = array();

      while ($row = $links->fetch_assoc()) {
         if (!in_array($row['Assunto'], $assuntos)) {
            $assuntos[] = $row['Assunto'];
         }
      }

      foreach ($assuntos as $assunto) {
      ?>
         <div class="organizer">
            <h2><?php echo $assunto; ?></h2>
            <?php 
            $links->data_seek(0); // Reinicia o ponteiro do resultado para o início

            while ($row = $links->fetch_assoc()) {
               if ($row['Assunto'] == $assunto) {
            ?>
                  <a class="selectable" href="<?php echo $row["Localizacao"]; ?>"><?php echo $row['Abreviacao']; ?></a>
            <?php  
               }
            }
            ?>
         </div>
      <?php
      }
      ?>
   </div>
   <div class="extras">
      <a class="selectable icon" href="/Prometeu/referencias.php">
         <i class="fa-solid fa-circle-info fa-sm"></i>
         <p>Referências</p>
      </a>
      <a class="selectable icon" href="/Prometeu/sobre.php">
         <i class="fa-solid fa-address-card fa-sm"></i>
         <p>Sobre</p>
      </a>
   </div>
</aside>

