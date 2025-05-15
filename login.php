<!DOCTYPE html>
<html>
<head>
    <title>Page Login</title>
</head>
<body>
<?php
$link = mysqli_connect('localhost', 'root', '', 'base_client');

$email = $_POST['email']  ;
$password = $_POST['password'] ;
$result = mysqli_query($link,"SELECT * FROM client WHERE mail_clt='$email' AND mot_clt='$password'");

if (mysqli_num_rows($result) > 0) {
    $ligne = mysqli_fetch_row($result);
    echo "<p style='font-size: 20px;'>Bonjour $ligne[1] $ligne[2] !</p>";
} else {
    echo "<p style='font-size: 20px;'>Email et/ou password incorrect(s) !</p>";
}
mysqli_close($link);
?>