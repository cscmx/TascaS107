<?php

//IMPORTANTE - session_start() siempre en la 1ra línea de php. 
session_start();

//SUPERGLOBALS
$name = "";
$email = "";
$age = "";

//CREAR FUNCIONES PARA CADA VALIDACIÓN DONDE SE EJECUTE UN TRY-CATCH

if (empty($_POST['name'])) {
    $userNameError = "Name is required"."<br>"; 
    echo $userNameError;
} else {
    $name = $_POST['name'];
    echo "Hi ".$name."<br>";
}

//EMAIL VALIDATION
if (empty($_POST['user_email'])){
    $emptyEmailError = "Email is required"."<br>";
    echo $emptyEmailError;
} else {
    $email = trim($_POST['user_email']);
    $pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i"; 
    if (!preg_match($pattern, $email)){
        $errorEmail = "Invalid email format"."<br>";
        echo $errorEmail;
    } else {
        echo "Your email: ".$email." has been registred"."<br>";
    }
}


if (empty($_POST['age'])){
    $emptyAgeError = "Age is required"."<br>";
    echo $emptyAgeError;
 } else { 
    $age = $_POST['age'];
    if (!is_numeric($age)) {
        $errorAgeMessage = "Age must be a number."."<br>";
        echo $errorAgeMessage;
    } else {
        echo "Your age is:  ".$age." years old"."<br>";
    }
}

//Variables de sesión
$_SESSION['name'] = $name;
$_SESSION['user_email'] = $email;

//Se muetran los valores
//echo "Hola ".$name."<br>";
//echo "Tienes ".$age." años"."<br>";
//echo "Tu email: ".$email." ha quedado registrado"."<br>";


//MAGIC CONSTANTS

echo "Usando constantes mágicas: "."<br>";
echo "Texto escrito en la línea: ".__LINE__."<br>";
echo "Este archivo está en la carpeta: ".__DIR__;

/*
CODIGO TRY-CATCH

try {
    if (empty($_POST['name'])) {
        throw new Exception ("Name is required");
    } else {    
        $name = $_POST['name'];
        echo "Hi ".$name."<br>";
    }

} catch (Exception $e){
    echo "Error: ". $e->getMessage()."<br>";
}


*/
?>