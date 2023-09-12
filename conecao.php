<?php
$host = "localhost";
$db = "rbdev";
$user = "root";
$pass = "";

$conn = mysqli_connect($host, $db, $user, $pass);
if (!$conn){
    die("connection failed: ".mysqli_connect_error());
}
echo "Connected sucessfully";
mysqli_close($conn);

/* é preciso inserir os dados do formulário */
$nome = $_POST['name'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$sql = "INSERT INTO usuario VALUES";
$sql .= "('$nome', '$email', '$senha')";
mysqli_query($conn,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($conn);
echo "Cliente cadastrado com sucesso!";
?>

<!-- BANCO DE DADOS - esquema -->
<!-- NOME: rbdev
tabela 1: usuario
        id INT (PK, NN, AI)
        login varchar(45)(NN)
        senha varchar(45)(NN)
tabela 2: aluno
        id_aluno INT (PK, NN, AI)
        nome varchar(45)(NN)
        email varchar(80)(NN)
        celular varchar(45)(NN)
        mensalidade float(NN)
tabela 3: curso
        id_curso INT(AI, NN, PK)
        nome varchar(45)
        valor float(NN)
tabela4: instrutor
        id_instrutor INT(PK, NN, AI)
        nome varchar(45)(NN)
        email varchar(80)(NN)
        celular varchar(45)(NN)
        curso_dirigido varchar(45)
        salario float(NN)
-->