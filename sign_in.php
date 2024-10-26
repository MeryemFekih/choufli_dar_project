<?php
include './connectDB.php';

if ((!isset($_POST["email-sign-in"]))||(!isset($_POST["pass"]))||(!isset($_POST["fname"]))||(!isset($_POST["tel"]))||(!isset($_POST["birth"]))||(!isset($_POST["cin"]))||(!isset($_POST["sexe"]))) {
  die("<div style='background-color: #662F10; padding: 20px; border-radius: 10px;'>
  <p>Tous les champs sont obligatoires.</p><a href='javascript:history.back()' style='text-decoration: none; color: #E8DCD6;'>Retour</a>
</div>");
}


$email = $_POST["email-sign-in"];
$pass = $_POST["pass"];
$fname = $_POST["fname"];
$tel = $_POST["tel"];
$date = $_POST["birth"];
$cin = $_POST["cin"];
$gender = $_POST["sexe"];



$age = date_diff(date_create($date), date_create(date("Y-m-d")))->y; // Get years part of date difference

if ($age < 18) {
    die("<div class='container d-flex justify-content-center align-items-center min-vh-100 row border rounded-5 bg-white shadow box-area' style='background-color: #662F10; padding: 20px; border-radius: 10px;'>
    <p>Vous devez avoir au moins 18 ans pour vous inscrire.</p><a href='javascript:history.back()' style='text-decoration: none; color: #E8DCD6;'>Retour</a>
  </div>");
}

if (strlen($pass) < 8) {
    die("<div style='background-color: #662F10; padding: 20px; border-radius: 10px;'>
    <p>Le mot de passe doit contenir au moins 8 caractères.</p><a href='javascript:history.back()' style='text-decoration: none; color: #E8DCD6;'>Retour</a>
  </div>");
}

if ((strlen($cin) < 8) || !is_numeric($cin)) {
    die("<div style='background-color: #662F10; padding: 20px; border-radius: 10px;'>
    <p>Vérifiez votre CIN.</p><a href='javascript:history.back()' style='text-decoration: none; color: #E8DCD6;'>Retour</a>
  </div>");
}

if (strlen($fname) == 0) {
    die("<div style='background-color: #662F10; padding: 20px; border-radius: 10px;'>
    <p>Vérifiez votre nom.</p><a href='javascript:history.back()' style='text-decoration: none; color: #E8DCD6;'>Retour</a>
  </div>");
}
if (strlen($email) == 0) {
  die("<div style='background-color: #662F10; padding: 20px; border-radius: 10px;'>
  <p>Vérifiez votre Email.</p><a href='javascript:history.back()' style='text-decoration: none; color: #E8DCD6;'>Retour</a>
</div>");
}

if (!ctype_digit($tel) || strlen($tel) != 8) {
    die("<div style='background-color: #662F10; padding: 20px; border-radius: 10px;'>
    <p>Le numéro de téléphone doit contenir exactement 8 chiffres.</p><a href='javascript:history.back()' style='text-decoration: none; color: #E8DCD6;'>Retour</a>
  </div>");
}

$req = mysqli_query($conn, "SELECT * FROM user WHERE mail='$email'");
if (mysqli_num_rows($req) != 0) {
    echo "<div style='background-color: #662F10; padding: 20px; border-radius: 10px;'>
    <p>Adresse email déjà utilisée.</p><a href='javascript:history.back()' style='text-decoration: none; color: #E8DCD6;'>Retour</a>
  </div>";
} else {
    $req2 = mysqli_query($conn, "INSERT INTO user VALUES ('$cin','$fname','$tel','$email','$pass','$date','$gender')");
    if ($req2) {
        header("Location: acceuil.html");
    } else {
        echo "<div style='background-color: #662F10; padding: 20px; border-radius: 10px;'>
        <p>Une erreur est survenue lors de la création du compte.</p><a href='javascript:history.back()' style='text-decoration: none; color: #E8DCD6;'>Retour</a>
      </div>";
    }
}

mysqli_close($conn);

?>