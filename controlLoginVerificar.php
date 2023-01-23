<?php
session_start();
print_r($_POST);

if(!isset($_POST['txtUsuario']) || !isset($_POST['txtSenha'])){
    
    header('Location: viewLogin.php?msg=0');
    return;
}

$usuario    = $_POST['txtUsuario'];
$senha      = $_POST['txtSenha'];


if($usuario == ""){
    header('Location: viewLogin.php?msg=1');
    return;
}
if($senha==""){
    header('Location: viewLogin.php?msg=2');
    return;
}
if($usuario=='helio' && $senha=='123' ){
    $_SESSION['LOGADO']='OK';
    $_SESSION['USUARIO']=$usuario;
    header('Location: viewADM.php');
    return;
}else{
    header('Location: viewLogin.php?msg=3');
    return;
}

?>