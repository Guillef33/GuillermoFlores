<?php

if (!empty($_POST)) {

$firstName = $_POST ["form-firstName"]; 
$lastName = $_POST ["form-lastName"];
$company = $_POST ["form-company"];
$city = $_POST ["form-city"];
$email = $_POST ["form-email"];
$mensaje = $_POST ["form-mensaje"];

echo "<br>$firstName";
echo "<br>$lastName";
echo "<br>$company";
echo "<br>$city";
echo "<br>$email";
echo "<br>$mensaje";

if ($firstName == "" || $lastName == "" ||  $company == "" || $city == "" || $email == "" || $mensaje == "") {
    echo "Error. Completar todos los campos";
    } else {
    if(strlen($mensaje) < 10) {
        echo "Por favor, ingrese una consulta mas amplia";
        }
    }

}


?>