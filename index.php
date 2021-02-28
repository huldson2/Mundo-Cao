<?php

require ('_config.php');

$titulo = "";
$css = "/css/index.css";
$js = "js/index.js";
$menu = "";

// Obtendo 4 artigos mais recentes
$sql = "SELECT id_artigo, titulo, imagem, resumo FROM artigos WHERE status = 'ativo' ORDER BY data DESC LIMIT 4";
$res = $conn->query($sql);
$artigos = '';

while($art = $res->fetch_assoc()):

    // Lista de artigos usando HEREDOC
    $artigos .= <<<HTML

<div class="artigo">

    <a href="artigo.php?id={$art['id_artigo']}"><img src="{$art['imagem']}" alt="{$art['titulo']}"></a>
    <a href="artigo.php?id={$art['id_artigo']}"><h4>{$art['titulo']}</h4></a>
    <span>{$art['resumo']}</span>
    <small><a href="artigo.php?id={$art['id_artigo']}">Ler mais...</a></small>

</div>

HTML; 

endwhile;

require ('_header.php');

?> 

<div class="slideshow">
    <div class="slideshow-container">

        <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="/img/dog space.png" style="width:100%">
            <div class="text">Dominando o universo</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="/img/pokerdogs.jpg" style="width:100%">
            <div class="text">Presentes até na arte</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="/img/racas de caes.jpg" style="width:100%">
            <div class="text">Raças de Cães</div>
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
        <span class="dot" onclick="currentSlide(3)"></span> 
    </div>
</div>

<div class="row">
    <div class="col1">
        <h3>Artigos Recentes</h3>
        <?php echo $artigos ?>
        <p class="center"><a href="/artigos.php">Todos os artigos</a></p>
    </div>
    <div class="col2">
        <h3>Notícias Recentes</h3>
        <div id="news"></div>
        <p class="center"><a href="/noticias.php">Todas as notícias</a></p>
    </div>
</div>


<?php

require ('_footer.php');

?>