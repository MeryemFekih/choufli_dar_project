<?php
include './connectDB.php';
if ((!isset($_POST["email-login"]))||(!isset($_POST["pass-login"]))) {
  die("<div style='background-color: #662F10; padding: 20px; border-radius: 10px;'>
  <p>Tous les champs sont obligatoires.</p><a href='javascript:history.back()' style='text-decoration: none; color: #E8DCD6;'>Retour</a>
</div>");
}
$email=$_POST["email-login"];
$pass=$_POST["pass-login"];
$req=mysqli_query($conn,"select * from user where mail='$email' and password='$pass'");
if(mysqli_num_rows($req)!=0){
    header("Location:acceuil.html");
    }
else{
    echo"<div card style='background-color: #662F10; padding: 20px; border-radius: 10px;'>
    <p>there is no account with this email.</p><a href='javascript:history.back()' style='text-decoration: none; color: #E8DCD6;'>Retour</a>
  </div>";
}

mysqli_close($conn);
?>