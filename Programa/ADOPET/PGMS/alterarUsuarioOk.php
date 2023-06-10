<?php
// abre conexao com o banco
require_once '../BD/conecta_banco.php';
print_r($_POST);
echo "<br><br>";
$id = $_POST['id'];
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$email =$_POST['email'];
$dtnascimento = $_POST['dtnascimento'];
$telcelular = $_POST['telcelular'];
$senha = $_POST['senha'];
$perfil = $_POST['perfil'];

//monta sql para o banco de dados ,
$sql = "update usuario set nome = '$nome', cpf='$cpf',rg= '$rg', email = '$email', dt_nascimento = '$dtnascimento', tel_celular = '$telcelular', senha= '$senha', perfil = '$perfil' where id = $id";

echo $sql;
$stmt = $conn->prepare($sql);
$stmt->execute();
header('Location: gerenciarUsuario.php');
?>