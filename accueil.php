<?php
include 'includes/start.php';
$titre="Connexion";
?>
<body class="bodyAccueil">
<div class="formConnect col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-4 offset-lg-4 bodyAccueil">
    <img src="images/corpscanLogo.png" alt="logo" class="logoImg">
    <h1 class="connect">Connexion</h1>
<form action="signin.php" method="post">
  <div class="form-group">
    <label for="name">Login</label>
    <input type="text" class="form-control" placeholder="Enter login" name="pseudo" required="required">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="pass" placeholder="Password" required="required">
  </div>
  <button type="submit" class="btn btn-primary subtn" name="signIn">Submit</button>
</form>
<a class="lost" href="#">Mot de passe ou identifiant oublié cliquez ici</a>
</div>

</body>
</html>