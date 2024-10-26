<?php
include './connectDB.php';

// Check if email and password are provided
if(isset($_POST['email']) && isset($_POST['pwd'])) {
    $user = $_POST['email'];
    $pwd = $_POST['pwd'];

    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM user WHERE mail = ? AND password = ?");
    $stmt->bind_param("ss", $user, $pwd);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if user exists
    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            // Fetching user details
            $phone = $row["phnumber"];
            $mail = $row["mail"];
        }
    } else {
        // Redirect if user does not exist
        /*header("Location: sign-in-sign_up.html");
        exit(); // Ensure script execution stops after redirection*/
        echo "user does not exists";
    }
} else {
    /* Redirect if email or password not provided
    header("Location: sign-in-sign_up.html");
    exit();*/
    echo "user does not exists";
}

// Your code to fetch houses and display them goes here

$conn->close();
?>
