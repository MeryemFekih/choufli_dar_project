<?php
include './connectDB.php';

$req1 = "SELECT * FROM binome";
$rep1 = $conn->query($req1);

if ($rep1->num_rows > 0) {
    while ($row = $rep1->fetch_assoc()) {
        $name = $row["name"];
        $phone = $row["tel"];
        $email = $row["mail"];
        $gender = $row["gender"];
        $desc = $row["description"];
        $pic = $row["pic"];
?>
        <div class="card">
            <div class="houseicon">
            <svg fill="#662F10" viewBox="0 0 56 56" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M 38.7232 28.5490 C 43.1399 28.5490 46.9403 24.6047 46.9403 19.4690 C 46.9403 14.3949 43.1193 10.6356 38.7232 10.6356 C 34.3271 10.6356 30.5061 14.4771 30.5061 19.5101 C 30.5061 24.6047 34.3066 28.5490 38.7232 28.5490 Z M 15.0784 29.0215 C 18.8994 29.0215 22.2274 25.5703 22.2274 21.1125 C 22.2274 16.6958 18.8789 13.4294 15.0784 13.4294 C 11.2575 13.4294 7.8885 16.7779 7.9090 21.1536 C 7.9090 25.5703 11.2370 29.0215 15.0784 29.0215 Z M 3.6155 47.5717 L 19.2281 47.5717 C 17.0917 44.4697 19.7006 38.2247 24.1173 34.8146 C 21.8371 33.2944 18.8994 32.1645 15.0579 32.1645 C 5.7931 32.1645 0 39.0053 0 44.6957 C 0 46.5445 1.0271 47.5717 3.6155 47.5717 Z M 25.8018 47.5717 L 51.6241 47.5717 C 54.8493 47.5717 56 46.6472 56 44.8395 C 56 39.5394 49.3644 32.2261 38.7026 32.2261 C 28.0616 32.2261 21.4262 39.5394 21.4262 44.8395 C 21.4262 46.6472 22.5766 47.5717 25.8018 47.5717 Z"></path></g></svg>
            </div>
            <hr>
            <div class="desccard">
                Name: <?php echo $name; ?><br>
                Gender: <?php echo $gender; ?> <br>
                Email: <?php echo $email; ?> <br>
                Phone: <?php echo $phone; ?> <br>
                Description: <?php echo $desc; ?> <br>
                <br>
                <button id="rentme" onclick="showForm()">Call Me!</button>
            </div>
        </div>
<?php
    }
} else {
    echo "<div card style='background-color: #662F10; padding: 20px; border-radius: 10px;'>
    <p>there are no binome.</p><a href='javascript:history.back()' style='text-decoration: none; color: #E8DCD6;'>Retour</a>
  </div>";
}
// Check if cin and desc are set in $_POST
if(isset($_POST["cin"]) && isset($_POST["desc"])) {
    $c = $_POST["cin"];
    $f = $_POST["fullname"];
    $ph = $_POST["phnumber"];
    $m = $_POST["mail"];
    $d = $_POST["desc"];
    $g = $_POST["g"];
    $date = date("Y-m-d");


    // Check if the cin value exists in the user table
    $check_user_query = "SELECT * FROM user WHERE cin = '$c'";
    $result = $conn->query($check_user_query);

    if($result->num_rows > 0) {
        // Insert into the binome table if cin exists in the user table
        $insert_query = "INSERT INTO binome VALUES ('$c', '$f','$ph','$m','$g','$d','','$date')";
        $insert_result = $conn->query($insert_query);

        if ($insert_result) {
            echo "<div card style='background-color: #662F10; padding: 20px; border-radius: 10px;'>
            <p>binome upload succefully.</p><a href='javascript:history.back()' style='text-decoration: none; color: #E8DCD6;'>Retour</a>
          </div>";
        } else {
            echo "Error: " . $insert_query . "<br>" . mysqli_error($conn);
        }
    } else {
       echo "<div card style='background-color: #662F10; padding: 20px; border-radius: 10px;'>
        <p>Error: user with cin $c does not.</p><a href='javascript:history.back()' style='text-decoration: none; color: #E8DCD6;'>Retour</a>

      </div>";
      header("location:sign-in-sign_up.html");
} }

// Retrieve binome data based on filter


?>
