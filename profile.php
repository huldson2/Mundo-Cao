<?php

require ('_config.php');

$titulo = "Profile";

$css = "";

$js = "";
$menu = "Profile";

require ('_header.php');

?> 
<div *ngIf="auth.user | async as user">
      <h2>Olá {{ user.displayName }}!</h2>

      <p>Esses são seus dados de cadastro fornecidos pelo '{{ user.providerData[0].providerId }}'. Nenhuma informação
        sensível é armazenada em nosso
        site.</p>

      <div class="profile">

        <img src="{{ user.photoURL }}" alt="{{ user.displayName }}" title="{{ user.displayName }}">

        <ul>
          <li><strong>ID de usuário:</strong> {{ user.uid }}</li>
          <li><strong>E-mail:</strong> {{ user.email }}</li>
          <li><strong>Telefone:</strong> {{ user.phoneNumber }}</li>
          <li><strong>Provedor de login:</strong> {{ user.providerData[0].providerId }}</li>
          <li><strong>Cadastrado em:</strong> {{ user.metadata.creationTime | date: 'dd/MM/yyyy, hh:mm' }}</li>
          <li><strong>Último acesso em:</strong> {{ user.metadata.lastSignInTime | date: 'dd/MM/yyyy, hh:mm' }}</li>
        </ul>

      </div>

      <button class="primary center" (click)="editProfile(user.providerData[0].providerId)"><i
          class="fas fa-address-card fa-fw"></i>&nbsp; Editar perfil</button>
          <small>Perfil editado no '{{ user.providerData[0].providerId }}'.</small>

      <button class="primary center" id="logoutButton"><i class="fas fa-sign-out-alt fa-fw"></i>&nbsp; Logout / Sair</button>
    </div>
<?php

require ('_footer.php');

?>