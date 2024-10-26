<link rel="stylesheet" href="acceuil.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<?php
include './connectDB.php';

// Query to fetch data
$sql = "SELECT * FROM houses";
$result = $conn->query($sql);
$req = "SELECT U.phnumber, U.mail 
        FROM user U 
        INNER JOIN houses H ON H.iduser = U.cin";
$rep = $conn->query($req);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        $surface = $row["surface"];
        $region = $row["region"];
        $price = $row["prix"];
        $nbch = $row["nbchambre"];
        $description = $row["description"];
        $pic = $row["pic"];
        
        // Fetching user data
        if ($row1 = $rep->fetch_assoc()) {
            $phone = $row1["phnumber"];
            $mail = $row1["mail"];
        }
?>

        <div class="card">
            <div class="card-inner">
                <div class="card-front">
                    <div class="houseicon">
                        <svg viewBox="0 0 200 170" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 84.0247C0 87.888 3.25114 90.2232 7.27671 90.2232C9.76073 90.2232 11.7297 89.0968 13.4429 87.4863L97.0046 15.9341C97.9434 15.0481 98.9735 14.7253 100.084 14.7253C101.114 14.7253 102.057 15.0481 103.079 15.9341L186.557 87.4863C188.354 89.0968 190.323 90.2232 192.723 90.2232C196.745 90.2232 200 87.888 200 84.0247C200 81.6106 199.058 80.0824 197.432 78.7122L174.803 59.3491C170.363 55.5494 167.806 49.9974 167.806 44.1531V5.79327C167.806 2.25275 165.41 0 161.644 0H150.429C146.747 0 144.179 2.25275 144.179 5.79327C144.179 16.5362 131.572 22.3251 123.424 15.3233L110.272 4.02129C107.277 1.36676 103.595 0.0824182 100 0.0824182C96.4018 0.0824182 92.8073 1.37019 89.7242 4.02472L2.56804 78.7122C1.02648 80.0824 0 81.6106 0 84.0247ZM24.4858 151.552C24.4858 162.74 31.6785 169.262 43.7479 169.262H58.4256C69.4713 169.262 78.4256 160.307 78.4256 149.262V112.033C78.4256 108.331 81.0776 105.92 85.0155 105.92H115.24C119.178 105.92 121.746 108.331 121.746 112.033V149.262C121.746 160.307 130.7 169.262 141.746 169.262H156.336C168.405 169.262 175.514 162.74 175.514 151.552V101.907C175.514 96.0276 172.927 90.4461 168.441 86.646L102.824 31.0646C101.881 30.261 100.855 29.8592 99.8283 29.8592C98.8858 29.8592 97.9434 30.261 96.9169 31.147L31.4932 87.0514C27.0464 90.8512 24.4858 96.4072 24.4858 102.256V151.552Z" fill="#662F10"/>
                        </svg>
                    </div>
                    <hr>
                    <div class="desccard">
                        Location: <?php echo $region; ?><br>
                        Price: <?php echo $price; ?> <br>
                        Description: <?php echo $description; ?> <br>
                        <br>
                        <button id="rentme" onclick="showForm()">Rent Me!</button>
                    </div>
                </div>
                <div class="card-back">
                    <div class="houseicon">
                    <svg viewBox="0 0 200 170" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 84.0247C0 87.888 3.25114 90.2232 7.27671 90.2232C9.76073 90.2232 11.7297 89.0968 13.4429 87.4863L97.0046 15.9341C97.9434 15.0481 98.9735 14.7253 100.084 14.7253C101.114 14.7253 102.057 15.0481 103.079 15.9341L186.557 87.4863C188.354 89.0968 190.323 90.2232 192.723 90.2232C196.745 90.2232 200 87.888 200 84.0247C200 81.6106 199.058 80.0824 197.432 78.7122L174.803 59.3491C170.363 55.5494 167.806 49.9974 167.806 44.1531V5.79327C167.806 2.25275 165.41 0 161.644 0H150.429C146.747 0 144.179 2.25275 144.179 5.79327C144.179 16.5362 131.572 22.3251 123.424 15.3233L110.272 4.02129C107.277 1.36676 103.595 0.0824182 100 0.0824182C96.4018 0.0824182 92.8073 1.37019 89.7242 4.02472L2.56804 78.7122C1.02648 80.0824 0 81.6106 0 84.0247ZM24.4858 151.552C24.4858 162.74 31.6785 169.262 43.7479 169.262H58.4256C69.4713 169.262 78.4256 160.307 78.4256 149.262V112.033C78.4256 108.331 81.0776 105.92 85.0155 105.92H115.24C119.178 105.92 121.746 108.331 121.746 112.033V149.262C121.746 160.307 130.7 169.262 141.746 169.262H156.336C168.405 169.262 175.514 162.74 175.514 151.552V101.907C175.514 96.0276 172.927 90.4461 168.441 86.646L102.824 31.0646C101.881 30.261 100.855 29.8592 99.8283 29.8592C98.8858 29.8592 97.9434 30.261 96.9169 31.147L31.4932 87.0514C27.0464 90.8512 24.4858 96.4072 24.4858 102.256V151.552Z" fill="#662F10"/>
                        </svg>                    
                    </div>
                    <hr>
                    <div class="desccard ">
                        <div class="back-list">
                            <li>
                                <span class="fa fa-check"></span>
                                Price: <?php echo $price; ?>
                            </li>
                            <li>
                                <span class="fa fa-check"></span>
                                Localisation: <?php echo $region; ?>
                            </li>
                            <li>
                                <span class="fa fa-check"></span>
                                Number of Bedrooms: <?php echo $nbch; ?> 
                            </li>
                        </div>
                    </div>
                    <input type="text" name="mail" value="<?php echo $mail; ?>" readonly id="mail">
                    <input type="text" name="phone" value="<?php echo $phone; ?>" readonly id="phone">
                </div>
            </div>
        </div>
<?php
    }
} else {
    echo "0 results";
}

$conn->close();
?>
