<?php
$_key = mysqli_connect("localhost" , "root" , "" , "base_client");
$_FirstName = $_POST['FirstName'];
$_LastName = $_POST['LastName'];
$_wilaya = $_POST['Wilayas'];
$_Phone_number = $_POST['Phone_number'];
$_Email = $_POST['Email'];
$_age = $_POST['age'];
$_Address = $_POST['Address'];
$_Password = $_POST['Password'];
$_Gender = $_POST['Gender'];
$_result = mysqli_query($_key , "INSERT INTO client (Id_Clt,No_Clt , Pno_Clt , Age_Clt , Wi_Clt , Tel_Clt , Mail_Clt , Adr_Clt , Mot_Clt , Sexe_Clt) 
VALUES (NULL,'$_FirstName', '$_LastName', '$_age', '$_wilaya', '$_Phone_number', '$_Email', '$_Address', '$_Password', '$_Gender') 
");

if ($_result){
    echo "<h1 style='color : lightgreen; text-align : center ; font-family : arial;'> you have successfuly opend an account  </h1>";

} else {

    echo "<h1 style='color : red; text-align : center ; font-family : arial;'> you can't sign in using that email or phone Number  </h1>" ;

}

mysqli_close($_key);

?>