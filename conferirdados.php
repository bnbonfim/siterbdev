<?php

$host = 'localhost';
$user = 'root';
$pass = "";
$db = 'rbdev';

$conn = new mysqli($host, $user, $pass, $db);
if (!$conn){
    die("connection failed: ".$conn->connect_error);
}
$username = $_POST['name'];
$password = $_POST['password'];

// Consulta SQL para verificar o login
$sql = "SELECT * FROM usuario WHERE nome = '$username' AND senha = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Login bem-sucedido
    echo "<script>alert('Seja bem vindo(a)');window.location.href='index.html';</script>";
} else {
    // Login falhou
    echo "<script>alert('Dados incorretos, você possui conta? se não clique em registrar-se');window.location.href='login.html';</script>";
}
