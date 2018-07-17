<?php
$conn = new mysqli("localhost", "root", "", "unitedidiomas");
if (!$conn->set_charset("utf8")) {
  printf("Error loading character set utf8: %s\n", $conn->error);
  exit();
}

$SQL = "select termoid, palavra, traducao, exemplo from Termos where grupo like 'book 01';";
$RS  = mysqli_query($conn, $SQL) or die("Erro");
if( $RS->num_rows >0 ){
    $palavra   = "['Herrero'";
    $traducao   = "[''";
    $exemplo    = "[''";
    while($Dados = mysqli_fetch_array($RS)){
        $palavra   .= ",'".$Dados['palavra']."'";
        $traducao   .= ",'".$Dados['traducao']."'";
        $exemplo    .= ",'".$Dados['exemplo']."'";
    }
    $palavra   .= "]";
    $traducao   .= "]";
    $exemplo    .= "]";
}
?>
<script>
    var palavra     = <?=$palavra?>;
    var traducao    = <?=$traducao?>;
    var exemplo     = <?=$exemplo?>;
</script>
