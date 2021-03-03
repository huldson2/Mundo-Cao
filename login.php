<?php

require ('_config.php');

$titulo = "Login";

$css = "";

$js = "";
$menu = "login";

require ('_header.php');

?> 

<h2>Faça login</h2>
<p>Logue-se usando uma rede social para ter acesso exclusivo ao nosso conteúdo personalizado.</p>

<button class="primary block" (click)="login('google')"id="authGoogle"><i class="fab fa-google fa-fw"></i>&nbsp; Logue-se com o Google</button>
&nbsp;
<button class="primary block" (click)="login('facebook')"id="authFacebook"><i class="fab fa-facebook-square fa-fw"></i>&nbsp; Logue-se com o FaceBook</button>

<?php

require ('_footer.php');

?>