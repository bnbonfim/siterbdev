<?php

$host = 'localhost';
$user = 'root';
$pass = "";
$db = 'rbdev';

$conn = new mysqli($host, $user, $pass, $db);
if (!$conn){
    die("connection failed: ".$conn->connect_error);
}

$nome = $_POST['name'];
$email = $_POST['email'];
$senha = $_POST['password'];

$sql = "INSERT INTO usuario (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
if($conn->query($sql) === true){
        echo "cadastro realizado";
        header('location:index.html');
}else{
        echo "Erro nessa merda".$conn->error;
}
$conn->close();
?>

<!-- CREATE DATABASE rbdev;
USE rbdev;

CREATE TABLE usuario (
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    login VARCHAR(45) NOT NULL,
    senha VARCHAR(45) NOT NULL
);