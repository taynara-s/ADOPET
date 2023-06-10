<?php

session_start();

if(!$_SESSION['userLogado']){
    header('Location: login.php');
}else{
    //Trazendo animais cadastrados

    require_once '../BD/conecta_banco.php';

    if(!$_GET["id"]){
        header('Location: adotarAnimal.php');
    }

    $id = $_GET["id"];

    try
    {
        $sql = "update animais set status = 1 where id = $id";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $msg = "Sua solicitação de adoção foi enviada à ONG responsável pelo animal. Aguarde contato dos responsáveis para dar andamento ao processo de adoção!";
    }
    catch (Exception $exception)
    {
        $msg = "Infelizmente não foi possivel realizar a adoção";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Adotar Animal</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/all.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="css/adminlte.min.css" />
    <link rel="stylesheet" href="css/site.css" />
</head>
<body>
    <div class="content m-5">
        <div class="justify-content-md-center">
            <div class="row">
                <div class="col-md-12">
                    <?php if($msg) : ?>
                    <div class="alert alert-success">
                        <p>
                            <?= $msg ?>
                        </p>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="col-md-12">
                    <a href="telaPrincipal.php" class="btn btn-primary">
                        <i class="fas fa-arrow-circle-left"></i> Voltar
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>