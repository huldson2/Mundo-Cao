<?php

require ('_config.php');
$titulo = "Notícias Sobre cães";
$css = "/css/noticias.css";
$js = "/js/noticias.js";
$menu = "noticias";
// Obtendo artigos aleatórios
$sql = "SELECT id_artigo, imagem, titulo FROM `artigos` WHERE status = 'ativo' ORDER BY RAND() LIMIT 3;";
$res = $conn->query($sql);

// Loop de exibição
$artigos = '';
while ($art = $res->fetch_assoc()) :

    $artigos .= <<<HTML

<div class="art">
<a href="/artigo.php?id={$art['id_artigo']}">
    <img src="{$art['imagem']}" alt="{$art['titulo']}" title="{$art['titulo']}">    
    {$art['titulo']}
</a>
</div>

HTML;

endwhile;
$artigos .= '';

require ('_header.php');

?> 

<div class="row">
    <div class="col1">
        <h2>Notícias do Mundo Cão</h2>
        <p>Últimas notícias do Brasil e do mundo sobre cães e pets em geral.</p>
        <div id="news"></div>
    </div>
    <aside class="col2">
        <h3>Artigos</h3>
        <?php echo $artigos ?>
    </aside>
</div>

<?php

require ('_footer.php');

?>