<main role="main" class="inner cover">
<div class="accordion" id="MenuCollapse">
    
    <?php
    $SQL="select grupo, count(*) as vocabularios from Termos group by grupo order by grupo";
    $RS  = mysqli_query($conn, $SQL) or die("Erro");
    if( $RS->num_rows >0 ){
        while($Grupo = mysqli_fetch_array($RS)){
        ?>            

        <div class="card">
            <div class="card-header" id="<?=fClean($Grupo['grupo'])?>">
                <h5 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse<?=fClean($Grupo['grupo'])?>" aria-expanded="true" aria-controls="collapse<?=fClean($Grupo['grupo'])?>">
                    <?=$Grupo['grupo']?> <br/><span class="spanTotal"><?=$Grupo['vocabularios']?> Palavras</span>
                </button>
                </h5>
            </div>
            <div id="collapse<?=fClean($Grupo['grupo'])?>" class="collapse" aria-labelledby="<?=fClean($Grupo['grupo'])?>" data-parent="#MenuCollapse">
                <div class="card-body">
                    
                    <div class="accordion" id="SubMenuCollapse">
                    <?php
                    $SQL="select grupo, unidade, count(*) as vocabularios from Termos where grupo like '".$Grupo['grupo']."' group by grupo, unidade order by grupo, unidade";
                    $RS2  = mysqli_query($conn, $SQL) or die("Erro");
                    if( $RS2->num_rows >0 ){
                        while($Unidade = mysqli_fetch_array($RS2)){
                        ?>            

                        <div class="card">
                            <div class="card-header" id="<?=fClean($Unidade['unidade'])?>">
                                <h5 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse<?=fClean($Unidade['unidade'])?>" aria-expanded="true" aria-controls="collapse<?=fClean($Unidade['unidade'])?>">
                                    <?=$Unidade['unidade']?> <br/><span class="spanTotal"><?=$Unidade['vocabularios']?> Palavras</span>
                                </button>
                                </h5>
                            </div>
                            <div id="collapse<?=fClean($Unidade['unidade'])?>" class="collapse" aria-labelledby="<?=fClean($Unidade['unidade'])?>" data-parent="#SubMenuCollapse">
                                <div class="card-body card-body-text">
                                    
                                    <div class="accordion accordionText" id="CategoriaCollapse">
                                    <?php
                                    $SQL="select grupo, unidade, tipo, count(*) as vocabularios from Termos where unidade like '".$Unidade['unidade']."' group by grupo, unidade, tipo order by grupo, unidade, tipo";
                                    $RS3  = mysqli_query($conn, $SQL) or die("Erro");
                                    if( $RS3->num_rows >0 ){
                                        echo "<a href='index.php?acao=game&grupo=".$Grupo['grupo']."&unidade=".$Unidade['unidade']."'>".$Unidade['unidade']."</a><hr style='margin:0'/>";
                                        while($Tipo = mysqli_fetch_array($RS3)){
                                        ?>            
                                            <a href='index.php?acao=game&grupo=<?=$Grupo['grupo']?>&unidade=<?=$Unidade['unidade']?>&tipo=<?=$Tipo['tipo']?>'><?=$Tipo['tipo']?> <br/><span class="spanTotal"><?=$Tipo['vocabularios']?> Palavras</span></a>
                                            <br/>
                                        <?
                                        }
                                    }
                                    ?>
                                    </div>
                                    
                                
                                </div>
                            </div>
                        </div>

                        <?
                        }
                    }
                    ?>
                    </div>

                
                </div>
            </div>
        </div>

        <?
        }
    }
    ?>

</div>
</main>
    <!--
        $SQL="select grupo, unidade, tipo, count(*) as vocabularios from Termos group by grupo, unidade, tipo order by grupo, unidade, tipo";

        <div class="card">
            <div class="card-header" id="Unit04">
                <h5 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Unit 04        
                </button>
                </h5>
            </div>
            <div id="collapseOne" class="collapse" aria-labelledby="Unit04" data-parent="#MenuCollapse">
                <div class="card-body">
                    <ul>
                        <li>Prepositions (13)</li>
                        <li>Bedroom Objects (22)</li>
                    </ul>
                </div>
            </div>
        </div>
        -->