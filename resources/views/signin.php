<?php require __DIR__ . '/layouts/header.php' ?>

<form action="" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Entrez votre adresse Email</label>
    <input type="text" class="form-control" id="email" name="email" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Entrez votre mot de passe</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe">
  </div>
  <button type="submit" class="btn btn-primary">Se connecter</button>
</form>

<?php require __DIR__ . '/layouts/footer.php' ?>