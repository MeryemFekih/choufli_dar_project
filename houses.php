<?php
    include './connectDB.php';

    if(isset($_POST['submit'])){
    /*$filename=$_FILES['pic']['name'];
        $folder='Images'.$filename;*/
    }
    
    $long=$_POST["longitude"];
    $lat=$_POST["latitude"];
    $price=$_POST["price"];
    $nbch=$_POST["bedroom"];
    $region=$_POST["region"];
    $desc=$_POST["desc"];
    $date=$_POST["datee"];
    $s=$_POST["surface"];
    $userid=$_POST["iduser"];
    $req1 = "SELECT * FROM user WHERE cin ='$userid'";

    $rep1=mysqli_query($conn, $req1);{
        if($rep1)
        $req="INSERT INTO houses VALUES ('','$long','$lat','$s','$region','$price','$nbch','','$date','$desc','$userid')";
        $rep=mysqli_query($conn, $req);
        if ($rep) {
            echo "Location uploaded successfully";
            header("Location: acceuil.html");
        } else {
            echo "Error: " . $req . "<br>" . mysqli_error($conn);
        }

    }
    
?>