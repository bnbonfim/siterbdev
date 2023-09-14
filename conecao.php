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
        header('location:index.html');
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

CREATE TABLE aluno (
    id_aluno INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nome VARCHAR(45) NOT NULL,
    email VARCHAR(80) NOT NULL,
    celular VARCHAR(45) NOT NULL,
    mensalidade FLOAT NOT NULL
);

CREATE TABLE curso (
    id_curso INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    nome VARCHAR(45),
    valor FLOAT NOT NULL
);

CREATE TABLE instrutor (
    id_instrutor INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nome VARCHAR(45) NOT NULL,
    email VARCHAR(80) NOT NULL,
    celular VARCHAR(45) NOT NULL,
    curso_dirigido VARCHAR(45),
    salario FLOAT NOT NULL
); -->
