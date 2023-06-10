
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

    <div class="card card-primary" style="width: 70%; margin: auto">
        <div class="card-header">
            <h3 class="card-title">Cadastro de Usuário</h3>
        </div>
        <!-- /.card-header -->
        <!-- começo do formulário -->
        <form action="IncluirNovoUsuarioOk.php" method="post" style="align-items: center">
            <div class="card-body">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" placeholder="Nome" name="nome" required/>
                </div>
                <div class="form-group">
                    <label for="cpf">CPF:</label>
                    <input type="text" class="form-control" placeholder="cpf" name="cpf" />
                </div>
                <div class="form-group">
                    <label for="rg">RG*:</label>
                    <input type="text" class="form-control" placeholder="rg" name="rg" />
                </div>
                <div class="form-group">
                    <label for="Data Nascimento">Data Nascimento*:</label>
                    <input type="text" class="form-control" placeholder="Data de Nascimento" name="dtnascimento" />
                </div>
                <div class="form-group">
                    <label for="telcelular">Telefone Celular*:</label>
                    <input type="text" class="form-control" placeholder="Telefone Celular" name="telcelular" />
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">E-mail*:</label>
                    <input type="email" class="form-control" placeholder="E-mail" name="email" required/>
                </div>
                <div class="form-group">
                    <label for="senha">Senha*:</label>
                    <input type="password" class="form-control" placeholder="senha" name="senha" required />
                </div>
                <div class="form-group">
                    <label>Perfil</label>
                    <div class="col-12">
                        <select name="perfil" class="form-control">
                            <option value="Admin">Administrador</option>
                            <option value="Adotar">Adotador</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
                <a href="telaPrincipal.php" class="btn btn-primary float-md-right"><i class="fas fa-arrow-circle-left"></i> Voltar</a>
            </div>
        </form>
    </div>

</body>
</html>