<html>
<head>
</head>
<body>
<form action='controlLoginVerificar.php' method='post'>
        <input type="text" name="txtUsuario">
        <input type="password" name="txtSenha">
        <input type="submit">
</form>

<?php
if(isset($_GET['msg'])){
    $msg=$_GET['msg'];
    if($msg==1){
        echo "nome invalido";
    } 
    if($msg==2){
          printf("senha invalida");  
    }   
    if($msg==3){
            print("usuario e senha incorretos");
    }
}
?>
  
</body>
</html>