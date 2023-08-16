<?php
include_once 'connexion.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Accueuil</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent  justify-content-end">
            
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="inscription.php">Inscription</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">Connection</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="deconnexion.php">deconnexion</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="container text-center py-5">
        <h3 class="my-5">Connectez-vous si vous avez un compte sinon inscrivez-vous ici!</h3>
            <a href="inscription.php"><button type="button" class="btn btn-primary btn-sm">Inscription</button></a>
            <a href="login.php"><button type="button" class="btn btn-success btn-sm">Connexion</button></a>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>