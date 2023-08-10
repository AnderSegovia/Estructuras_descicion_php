<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    $salario =700;
    $descuento=0;
    if($salario>0 and $salario<=450){
        $descuento=$salario*0.08;
    }

    else if($salario>450 and $salario<=600){
        $descuento=$salario*0.15;
    }

   else  if($salario>600 and $salario<=800){
        $descuento=$salario*0.18;
    }

   else if($salario>800){
        $descuento=$salario*0.20;
    }
    echo "El descuento de su salario es ".$descuento;
    ?>
    
</body>
</html>