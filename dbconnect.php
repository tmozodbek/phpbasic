<?php
#Serverga ulanish
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "magazin";
$q = "mysql:host=$servername;dbname=$dbname;charset-UTF8";
try{
    $conn = new PDO($q, $username, $password);
    echo "Bazaga ulandi!<br>";
} catch(PDOException $e){
    echo "Bazaga ulana olmadi: ". $e->getMessage();
}
?>