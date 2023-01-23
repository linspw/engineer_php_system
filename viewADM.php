<?php
session_start();
if(!isset($_SESSION['LOGADO'])||!isset($_SESSION['USUARIO'])){
    header('Location: viewLogin.php');
}

$v1=$_SESSION['LOGADO'];
$v2= $_SESSION['USUARIO'];
echo "$v2 - $v1";
?>
<br>
<a href="logout.php">logout</a>