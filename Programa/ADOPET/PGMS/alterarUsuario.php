
<?php

if(!$_GET["id"]){
    header('Location: gerenciarUsuario.php');
}

require_once '../BD/conecta_banco.php';

$id = $_GET["id"];

$sql = "select * from usuario where id = $id";
$stmt = $conn->prepare($sql);
$stmt->execute();
$usuario = $stmt->fetchAll();
$usuario = $usuario[0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Adoção</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/all.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="css/adminlte.min.css" />

    <!--Incuindo os campos de cadastro de novo usuário seja perfil adm ou adotador-->
</head>
<body>

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Cadastro de Usuário</h3>
        </div>
        <!-- /.card-header -->
        <!-- começo do formulário -->
        <form action="alterarUsuarioOk.php" method="post">
            <div class="card-body">
            <div class="form-group">
                    <label for="id"></label>
                    <input type="hidden" class="form control" name = "id" value="<?= $usuario["id"] ?>"/>
                </div>
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" placeholder="Nome" name="nome" value="<?= $usuario['nome']?>" required/>
                </div>
                <div class="form-group">
                    <label for="cpf">CPF:</label>
                    <input type="text" class="form-control" placeholder="cpf" name="cpf" value="<?= $usuario['cpf']?>"/>
                </div>
                <div class="form-group">
                    <label for="rg">RG*:</label>
                    <input type="text" class="form-control" placeholder="rg" name="rg" value="<?= $usuario['rg']?>"/>
                </div>
                <div class="form-group">
                    <label for="Data Nascimento">Data Nascimento*:</label>
                    <input type="text" class="form-control" placeholder="Data de Nascimento" name="dtnascimento" value="<?= $usuario['dt_nascimento']?>"/>
                </div>
                <div class="form-group">
                    <label for="telcelular">Telefone Celular*:</label>
                    <input type="text" class="form-control" placeholder="Telefone Celular" name="telcelular" value="<?= $usuario['tel_celular']?>"/>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">E-mail*:</label>
                    <input type="email" class="form-control" placeholder="E-mail" name="email" value="<?= $usuario['email']?>" required/>
                </div>
                <div class="form-group">
                    <label for="senha">Senha*:</label>
                    <input type="password" class="form-control" placeholder="senha" name="senha" value="<?= $usuario['senha']?>" required/>
                </div>
                <div class="form-group">
                    <label>Perfil</label>
                    <div class="col-12">
                        <select name="perfil" class="form-control">
                            <option value="Admin" <?= $usuario['perfil'] == 'Admin' ? 'selected': ''?>>Administrador</option>
                            <option value="Adotar"<?= $usuario['perfil'] == 'Adotar' ? 'selected': ''?>>Adotador</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Alterar</button>
                <a href="gerenciarUsuario.php" class="btn btn-primary float-md-right"><i class="fas fa-arrow-circle-left"></i> Voltar</a>
            </div>
        </form>
    </div>

</body>
</html>