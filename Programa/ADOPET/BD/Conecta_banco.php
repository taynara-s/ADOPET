<?php //conexão com o banco
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "adocao";

    try
	{
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    } catch(PDOException $e)
    {
        echo "Erro: " . $e->getMessage();
        $conn = null;
    }
?>
