<?php
$usuario = "root";
//ibsmmx_brayan
$pass = "root";
//w4tC^2W3PMD^
try {
    $con = new PDO('mysql:host=localhost;dbname=ibsm;charset=utf8mb4', $usuario, $pass); //MAMP
   // $con = new PDO('mysql:host=localhost;dbname=erp', $usuario, $pass); //XAMPP
   
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>