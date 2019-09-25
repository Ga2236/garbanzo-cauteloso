<?php
include("conxaobanco.php");

session_start();

$login=$_POST['login'];
$senha=$_POST['senha'];

$sql="SELECT * FROM usuario WHERE login='$login' AND senha='$senha'";
$result=$conn->query($sql);

if($result->num_rows >0 )
{
$_SESSION['login'] = $login;
$_SESSION['senha'] = $senha;
header('location:principal.php');
}else{
unset ($_SESSION['login']);
unset ($_SESSION['senha']);
header('location:login.php');
}

?>
