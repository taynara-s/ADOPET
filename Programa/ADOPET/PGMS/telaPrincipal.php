<?php

session_start();

if($_SESSION['userLogado'] == null){
    header('Location: login.php');
}else{
    //Trazendo animais cadastrados

    require_once '../BD/conecta_banco.php';

    $sql = "select * from animais where status = 0 or status is null"; //
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $listaAnimalAdocao = $stmt->fetchAll();

    $perfil =  $_SESSION['userPerfil'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tela Principal</title>
	<link rel="icon" type="image/x-icon" href="https://cdn-icons-png.flaticon.com/512/12/12638.png">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/all.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="css/adminlte.min.css" />
    <link rel="stylesheet" href="css/site.css" />
	<link rel="stylesheet" href="estilo.css">
	<link rel="javascript" href="js/desce.js">
</head>
<body>
<div id="titulo"><a href="index.php" style="text-decoration:none;color:inherit"> ADOPET </a></div>
    <nav>
        <div class="row">

            
            <div class="col-md-12 mb-2" style="padding:1.3% 6%;">
                <?php if($_SESSION['userPerfil'] == 'Admin') : ?>
				<a href="#" class="btn btn-primary">Home</a>
                <a href="cadastroNovoUsuario.php" class="btn btn-primary">Cadastrar usuário</a>
                <a href="gerenciarUsuario.php" class="btn btn-primary">Gerenciar usuário</a>
                <a href="IncluirAnimal.php #anchor" class="btn btn-primary" onClick="descer()">Incluir animal</a>
                <?php endif; ?>
                <a href="logoff.php" class="btn btn-danger float-md-right"><i class="fas fa-sign-out-alt"></i> Sair</a>
            </div>
            

            <!--Percorrendo lista de animais para apresentar na tela-->
            <?php foreach($listaAnimalAdocao as $k=>$animal) : ?>
			
            <div class="col-md-4">
                <!-- Widget: user widget style 1 -->
                <div class="card card-widget widget-user shadow">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="widget-user-header bg-info">
                        <!--Pegando valor da lista e mostrando dentro da tag-->
                        <h3 class="widget-user-username">
                            Nome: <?= $animal['nome'] ?>
                        </h3>
                        <h5 class="widget-user-desc">
                            <?= $animal['tipoAnimal'] ?>
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="widget-user-image divFotoAnimal">
                            <img class="img-fluid elevation-2 fotoAnimal" src="<?= $animal['urlImagem'] ?>" alt="User Avatar" />
                        </div>
                        <div class="col-md-12 text-center">
                            <a class="btn btn-dark btn-sm" href="adotarAnimal.php?id=<?= $animal['id'] ?>">Ver mais</a>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <?php if($perfil == "Admin") : ?>
                                <a href="alterarAnimal.php?id=<?= $animal['id'] ?>" class="btn btn-primary mr-3">
                                    <i class="fas fa-edit"></i> Editar
                                </a>
                                <a href="excluirAnimal.php?id=<?= $animal['id'] ?>" class="btn btn-danger mr-3">
                                    <i class="fas fa-trash"></i> Excluir
                                </a>							
                                <?php else : ?>
                                <a href="adotarAnimal.php?id=<?= $animal['id'] ?>" class="btn btn-success btn-block">
                                    <i class="fas fa-paw"></i> Adotar
                                </a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>
                </div>
                <!-- /.widget-user -->
            </div>

            <?php endforeach; ?>
        </div>
		<div id="#anchor"></div>
    </nav>
</body>
</html>