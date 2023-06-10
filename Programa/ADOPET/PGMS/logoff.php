<?php

session_start();

$_SESSION['userLogado'] = null;
session_destroy();
header('Location: login.php');

?>