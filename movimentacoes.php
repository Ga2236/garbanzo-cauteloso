<?php include($_SERVER['DOCUMENT_ROOT']."/financas_gabrielmarciano/arquivo1.php"); ?>
<?php include($_SERVER['DOCUMENT_ROOT']."/financas_gabrielmarciano/arquivo2.php"); ?>

<main class="ls-main ">
<div class="container-fluid">
  <h1 class="ls-title-intro ls-ico-home">movimentaçoes</h1>
  <div class="ls-sidebar-inner">
  <?php
  $sql = "SELECT VALOR, CATEGORIA, DATA_PAGAMENTO ,DATA_VENCIMENTO, FORMA_PAGAMENTO, TIPO, SITUACAO, PARCELA FROM movimentacoes";
  $result=$conn->query($sql);
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
     echo "Categoria: " . $row_usuario['CATEGORIA'] . "<br>";
      echo "Data de pagamento: " . $row['DATA_PAGAMENTO'] . "<br>";
      echo "Data de vencimento: " . $row['DATA_VENCIMENTO'] . "<br>";
      echo "Tipo: " . $row['TIPO'] . "<br>";
      echo "Situação: " . $row['SITUACAO'] . "<br>";
      echo "Parcelado: " . $row['PARCELA'] . "<br><hr>";
     }
mysqli_close($conn);
    }
  ?>
    </div>
</div>
</main>
