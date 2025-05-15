<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

session_start();
if (isset($_SESSION['authenticated']) && $_SESSION['authenticated'] == true) {
  
    $servername = "localhost";
    $username = "your_username";
    $password = "your_password";
    $dbname = "Base_Client";
        $conn = new mysqli($servername, $username, $password, $dbname);
  
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $seller_name = $_POST['Seller name'];
    $price = $_POST['price'];
    $ref = $_POST['ref'];
    $color = $_POST['color'];
    $quantity = $_POST['1'];
  
    $sql = "INSERT INTO Commande_produit (Id_client, price, ref, color, quantity) VALUES ('$seller_name', '$price', '$ref', '$color', '$quantity')";
  
    if ($conn->query($sql) === TRUE) {
        echo "Order form data stored successfully!";
    } else {
        echo "Error storing order form data: " . $conn->error;
    }
    
    $conn->close();
} else {

    echo "Please log in to access this feature. <a href='login.html'>Login</a>";
}
?>
</body>
</html>