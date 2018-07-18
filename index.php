<?php 
  include "funcoes.php";
  include "dicionario.php";
  include "header.php";
      
  if( isset( $_GET['acao'] ) && empty( $_GET['acao'] ) ){ 
    include "menu.php";
  }else{
    include "jogo.php";
  }
  
  include "footer.php";