<nav>
    <li>
    <a onclick="call('side_menu')" class="button_menu icon">
        <i class="fa-solid fa-bars fa-xl"></i> 
        <p>Menu</p>
    </a>
    </li>
    <li class="selected">
    <a class="icon" href="index.php">
        <span><i class="fa-solid fa-house fa-sm"></i></span>
        <p>Início</p>
    </a>
    </li>
    <li>
    <a class="icon" href="artigos.php">
        <i class="fa-solid fa-newspaper fa-sm"></i>
        <p>Artigos</p>
    </a>
    </li>
    <li>
    <a class="icon" href="timeline.php">
        <i class="fa-solid fa-timeline fa-sm"></i></i>
        <p>Linha do tempo</p>
    </a>
    </li>
    <li>
    <a class="icon" onclick="call('config_menu')">
    <i class="fa-solid fa-palette fa-sm"></i>
        <p>Temas</p>
    </a>
    </li>
    <li>
    <a onclick="call('bar')" class="icon">
        <i class="fa-solid fa-magnifying-glass fa-sm"></i>
        <p>Busca</p>
    </a>
    <div class="search_bar menu" id="bar">
        <input type="text">
        <button><i class="fa-solid fa-magnifying-glass fa-lg"></i></button>
    </div>
    </li>
    <img id="logo" src="imagens/logopainel.png" alt="logo">
</nav>
<!-- Menu de Configurações -->
<div class="config menu" id="config_menu">
    <a class="close_menu icon" onclick="close_element('config_menu')"><i class="fa-sharp fa-solid fa-circle-xmark fa-lg"></i></a>
    <h4>Aparência</h4>
    <div class="themes">
    <div class="field " id="dark" onclick="change_theme('dark_theme', this)">
        <a class="icon">
            <i class="fa-sharp fa-solid fa-cloud-moon"></i>
            <p>Tema Escuro</p>
        </a>
    </div>
    <div class="field " id='light' onclick="change_theme('light_theme', this)">
        <a class="icon">
            <i class="fa-solid fa-sun"></i>
            <p>Tema claro</p>
        </a>
    </div>
    <div class="field " id='contrast' onclick="change_theme('high_contrast', this)">
        <a class="icon">
            <i class="fa-solid fa-eye"></i>
            <p>Alto-contraste</p>
        </a>
    </div>
    </div>
    <!-- 
    <div class="font_config">
        <input type="radio" name="sizes" id="20px">
        <label for="dark">Tema Escuro</label>
        <input type="radio" name="sizes" id="light">
        <label for="light">Tema claro</label>
        <input type="radio" name="sizes" id="high_contrast">
        <label for="dark">Alto contraste</label>
    </div>
    -->
</div>
<!--Menu lateral dos artigos -->
<aside id="side_menu" class="menu">
    <div class="top">
    <h4>Artigos</h4>
    <a class="icon close_menu" onclick="close_element('side_menu')"><i class="fa-sharp fa-solid fa-circle-xmark fa-lg"></i></a>
    </div>
    <div class="artigos">
    <a href="artigo_qualia.php">Qualia</a>
    <a href="artigo_epifenomenalismo.php">Epifenomenalismo</a>
    <a href="artigo_dualismo.php">Dualismo</a>
    </div>
    <div class="extras">
    <a class="icon" href="referencias.php">
        <i class="fa-solid fa-circle-info fa-sm"></i>
        <p>Referências</p>
    </a>
    <a class="icon" href="sobre.php">
        <i class="fa-solid fa-address-card fa-sm"></i>
        <p>Sobre</p>
    </a>
    </div>
</aside>