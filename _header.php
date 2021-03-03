<?php

if ( $titulo == "" ) {
    $titulo = "Mundo Cão .::. Patas e faros";
} else {
    $titulo = "{$titulo} .::. Mundo Cão";
}
if ( $css == "" ) {
    $css = null;
} else {
    $css = "\t<link rel=\"stylesheet\" href=\"{$css}\">\n";
}

if ( $js == "" ) {
    $js = null;
} else {
    $js = "<script src=\"{$js}\"></script>\n";
}

?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/img/logo02.jpg">
    <link rel="stylesheet" href="/css/global.css">
<?php echo $css ?>
    <link rel="stylesheet" href="/css/all.min.css">
    <script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-auth.js"></script>


    <title><?php echo $titulo ?></title>
</head>
<body> 
<a id="topo"></a>

<div class="wrap">

    <header class="header">
        <a href="index.php"><img src="/img/logo02.jpg" alt="Mundo Cão" title="Home Page do Mundo Cão"></a>
        <h1>Mundo Cão<small>Entre faros e patas</small></h1>

        <div *ngIf="auth.user | async as user; else showLogin">
      <img src="{{ user.photoURL }}" alt="{{ user.displayName }}" title="Perfil de {{ user.displayName }}." routerLink="/profile">
    </div>
        
        <div class="show-login"> <a href="/login.php">
        <button  id= "btnlogin"><i class="fas fa-sign-in-alt fa-fw"></i>
        Login</button></a>
        </div>
    </header>
 
    <nav>
        <div class="nav">
            <a href="/" title="Página inicial"><i class="fas fa-fw fa-home"></i></a>
            <div id="menulinks">
                <a <?php echo ($menu == 'artigos') ? 'class="active"' : null; ?> href="/artigos.php"><i class="fas fa-fw fa-pen-nib"></i> Artigos</a>
                <a <?php echo ($menu == 'noticias') ? 'class="active"' : null; ?> href="/noticias.php"><i class="fas fa-fw fa-newspaper"></i> Notícias</a>
                <a <?php echo ($menu == 'contatos') ? 'class="active"' : null; ?> href="/contatos.php"><i class="fas fa-fw fa-mail-bulk"></i> Contatos</a>
                <a <?php echo ($menu == 'sobre') ? 'class="active"' : null; ?> href="/sobre.php"><i class="fas fa-fw fa-info-circle"></i> Sobre</a>
                <!-- <a <?php echo ($menu == 'procurar') ? 'class="active"' : null; ?> href="/procurar.php" title="Procurar"><i class="fas fa-fw fa-search"></i><span>&nbsp;Procurar</span></a> -->
            </div>
            <a href="#menu" id="menu" title="Mostra / Oculta menu"><i class="fas fa-fw fa-bars"></i></a>
        </div>
    </nav>

    <main class="main"> 