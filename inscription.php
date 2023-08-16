<?php
require_once 'connexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (prenom, email, password) VALUES (:prenom, :email, :password)";

    try {
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        echo "Inscription réussie !";
        header("Location: login.php");
    } catch (PDOException $e) {
        echo "Erreur lors de l'inscription : " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="container ">
      <div class="row justify-content-center">
      <h2 class="my-5 text-success ms-5">Inscription:</h2>
        <div class="col-6 ">
          <form method="post" action="">
            <div class="mb-3">
                <label for="prenom" class="form-label" >Votre prenom et nom:</label>
                <input type="text" value="<?php if(isset($prenom)){echo $prenom;}?>" class="form-control" id="prenom" name="prenom" placeholder="Nom d'utilisateur" required >
            </div>
            <div class="mb-3">
                <label for="mail" class="form-label" >Votre adress mail:</label>
                <input type="email" value="<?php if(isset($email)){echo $email;}?>" class="form-control" id="mail" name="email" placeholder="Adresse email" required >
            </div>
            <div class="mb-3">
                <label for="mdp" class="form-label" >Votre mot de passe:</label>
                <input type="password" class="form-control" id="mdp" name="password" placeholder="Mot de passe" required>
            </div>
            <div class="mb-3">
                <label for="mdp" class="form-label" >Confirmer votre mot de passe:</label>
                <input type="password" class="form-control" id="mdp" name="confpassword" placeholder="confirmation du mot de passe" required>
            </div>
            <button type="submit" class="btn btn-success" name="inscription">S'inscrire</button>
        </form>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
