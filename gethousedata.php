<?php 
include './connectDB.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $lng = mysqli_real_escape_string($conn, $_POST["lng"]);
    $lat = mysqli_real_escape_string($conn, $_POST["lat"]);
    $surface = mysqli_real_escape_string($conn, $_POST["surface"]);
    $region = mysqli_real_escape_string($conn, $_POST["region"]);
    $prix = mysqli_real_escape_string($conn, $_POST["prix"]);
    $nbchambre = mysqli_real_escape_string($conn, $_POST["nbchambre"]);
    $pic = mysqli_real_escape_string($conn, $_POST["pic"]);
    $datepost = mysqli_real_escape_string($conn, $_POST["datepost"]);

    $sql = "INSERT INTO `houses` (`lng`, `lat`, `surface`, `region`, `prix`, `nbchambre`, `pic`, `datepost`) 
            VALUES ('$lng','$lat', '$surface', '$region', '$prix', '$nbchambre', '$pic', '$datepost')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>

