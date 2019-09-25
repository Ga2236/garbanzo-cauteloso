<?php
include("conxaobanco.php");

$nome_user=$_POST['nome'];
$login_user=$_POST['login'];
$senha_user=$_POST['senha'];
$email_user=$_POST['email'];
$cpf_user=$_POST['cpf'];
//inserindo dados do cadastrto
$sql = " INSERT INTO usuario(COD_Usuario, nome, login, senha, email) VALUES(NULL, $nome_user, $login_user, $senha_user, $cpf_user)";
$result=$conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/main.css">
<title>cadastro de usuario</title>
</head>
<body>
<div align='center'>
<h1>Dados cadastrados com sucesso!</h1>
<br>
<button onclick="window.location.href='login.php'">Voltar pagina login</button> 
</div>
</body>
</html>
