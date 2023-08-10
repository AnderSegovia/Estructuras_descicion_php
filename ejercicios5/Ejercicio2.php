
    <?php 
    $efectivo =5;
    $sodaLata=0.75;

    if($efectivo>0){
        $cambio=$efectivo-$sodaLata;
        if($cambio>=0){
            echo"su cambio es  $".$cambio;
        }else{
            echo"el efectivo es insuficiente, ingrese una cantidad mayor";
        }
    }
    ?>
