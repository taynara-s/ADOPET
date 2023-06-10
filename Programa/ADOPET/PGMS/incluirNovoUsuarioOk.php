<?php
// abre conexao com o banco
require_once '../BD/conecta_banco.php';
print_r($_POST);
echo "<br><br>";
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$email =$_POST['email'];
$dtnascimento = $_POST['dtnascimento'];
$telcelular = $_POST['telcelular'];
$senha = $_POST['senha'];
$perfil = $_POST['perfil'];



//monta sql para o banco de dados ,
$sql = "INSERT INTO usuario (nome,cpf,rg,email,dt_nascimento,tel_celular,senha,perfil) VALUES ('".$nome."','".$cpf."','".$rg."','".$email."','".$dtnascimento."','".$telcelular."','".$senha."','".$perfil."')";

echo $sql;
echo "<br><br>";
$stmt = $conn->prepare($sql);
$stmt->execute();
header ('Location: login.php');
?>