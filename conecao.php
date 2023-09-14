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
$cripsenha = password_hash($senha, PASSWORD_DEFAULT);

$sql = "INSERT INTO usuario (nome, email, senha) VALUES ('$nome', '$email', '$cripsenha')";
if($conn->query($sql) === true){
    echo "<script>alert('Cadastro realizado');window.location.href='index.html';</script>";
}else{
    echo "<script>alert('Acho que deu merta ae em');window.location.href='erro.html';</script>";
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