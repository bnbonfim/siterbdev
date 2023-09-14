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
    echo "Login bem-sucedido!";
    header('location:index.html');
} else {
    // Login falhou
    echo "Nome de usuário ou senha incorretos.";
}
