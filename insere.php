<!DOCTYPE html>
<html>
<head>
<style>
.error {color: #FF0000;} 
</style>
<link rel="stylesheet" type="text/css" href="main.css">
</head>
<title>Cadastro</title>
<body>
	<div>
		<div align='center'>
	<form method="POST" action="cadastro.php">
		<b>nome user:<br></b>
		<input type="text" required="required" name="nome_user"pattern="[a-z\s]+$" /><br>
		<b>login user:<br></b>
		<input type="email" required="required" class="input-text"name="login_user" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" /><br>
		<b>senha user:<br></b>
		<input type="" required="required" name="senha_user"pattern="[0-9]+$" /><br>
		<b>email user:<br></b>
		<input type="email" required="required" class="input-text"name="email_user" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" /><br>
		<b>cpf user:<br></b>
		<input type="text" required="required" name="cpf_user"pattern="[0-9]+$" /><br>
<input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
</div>
