
<!DOCTYPE html>
<html>
<head>
  <title>pagina de login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/main.css" />
</head>
<body>
  <style>
      .container {
        width: 100vw;
         height: 100vh;
         display: flex;
         flex-direction: row;
         justify-content: center;
         align-items: center
     }
     .box {
       width: 300px;
         height: 300px;
        background: #fff;     }
     body {
        margin: 0px;
}
</style>
  <div class="center">
    <div class="control">
  <div class="container has-text-centered">
  <div class="column is-4 is-offset-4">
	<div clhttps://www.w3schools.com/ass="container">
    <div class="field">
      <div align='center'>
		 <h2>Login ferramenta</h2>
      <p>seja bom vindo caro usuario</p>
		<form action="autentica.php" method="post">
		<img src="financas.JPEG" alt="logo_finacas"style="width:200px;height:200px;">
    <div class="form-group">
      <label for="login">nome:</label>
      <input type="text" class="form-control" id="login" name="login">
    </div>
    <div class="form-group">
      <label for="senha">senha:</label>
      <input type="password" class="form-control" id="senha" name="senha">
    </div>
    <button type="submit" class="btn btn-primary">Logar</button>
  </form>
  <br>
  <form action="insere.php" method="post">
    <button type="submit" class="btn btn-primary">Cadastrar-se</button>
  </form>
  <br>
</br>
</div>



 <footer>
  <p>Copyright Financas 2019 - Todos os direitos reservados.</p>
</footer>


</body>
</html>
