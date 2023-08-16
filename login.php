<?php
require_once 'connexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prenom = $_POST["prenom"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE prenom=:prenom";
    
    try {
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($row && password_verify($password, $row["password"])) {
            $_SESSION["prenom"] = $prenom;
            header("Location: acueil.php");
        } else {
            echo "Identifiants incorrects.";
        }
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<body>
<div class="container ">
      <div class="row justify-content-center">
      <h2 class="my-5 text-success ms-5">Connexion:</h2>
        <div class="col-6 ">
          <form method="post" action="">
          <div class="mb-3">
                <label for="prenom" class="form-label" >Votre prenom:</label>
                <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Nom d'utilisateur" required >
            </div>
            <div class="mb-3">
                <label for="mdp" class="form-label" >Votre mot de passe:</label>
                <input type="password" class="form-control" id="mdp" name="password" placeholder="Mot de passe" required>
            </div>
            <button type="submit" class="btn btn-success">Se connecter</button>
        </form>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>
