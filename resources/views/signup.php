<?php require __DIR__ . '/layouts/header.php' ?>

<?php foreach($errorsList as $error) : ?>

<div class="alert alert-danger" role="alert">
  <?= $error ?>
</div>

<?php endforeach; ?>

<form action="" method="POST">
  <div class="form-group">
    <label for="email">Entrez votre adresse Email</label>
    <input type="text" class="form-control" id="email" name="email" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="firstname">Entrez votre nom</label>
    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Nom">
  </div>
  <div class="form-group">
    <label for="lastname">Entrez votre prénom</label>
    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Prénom">
  </div>
  <div class="form-group">
    <label for="password">Entrez votre mot de passe</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe">
  </div>
  <div class="form-group">
    <label for="passwordConfirm">Confirmez votre mot de passe</label>
    <input type="password" class="form-control" id="passwordConfirm" name="passwordConfirm" placeholder="Mot de passe">
  </div>
  <button type="submit" class="btn btn-success">S'inscrire</button>
</form>

<?php require __DIR__ . '/layouts/footer.php' ?>