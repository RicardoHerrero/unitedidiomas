<?php
$conn = new mysqli("localhost", "root", "", "unitedidiomas");
if (!$conn->set_charset("utf8")) {
  printf("Error loading character set utf8: %s\n", $conn->error);
  exit();
}
$concat="";
if( !empty( $_GET['grupo'] ) ) $concat .= " and grupo like '".$_GET['grupo']."' ";
if( !empty( $_GET['unidade'] ) ) $concat .= " and unidade LIKE '".$_GET['unidade']."' ";
if( !empty( $_GET['tipo'] ) ) $concat .= " and tipo LIKE '".$_GET['tipo']."' ";

$SQL = "select termoid, palavra, traducao, exemplo from Termos where 1=1 ".$concat;
//exit($SQL);
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
