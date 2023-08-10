<?php
session_start();
if (!isset($_SESSION['credito'])) {
    $_SESSION['credito'] = 5;
}   

if (isset($_POST['restar'])) {
    if ($_SESSION['credito'] > 0) {
        $_SESSION['credito']--;
    }
    header("Location: Ejercicio4.php"); 
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Jugar</title>
</head>
<body>
    <h1>Credito: <?php echo $_SESSION['credito'];
    if($_SESSION['credito']>0){
    echo" Sigue Jugando";
    
    }else{
        echo" Credito insuficiente";
    }
    
    ?></h1>
    <form action="" method="post">
        <button type="submit" name="restar">Jugar</button>
    </form>
</body>
</html>
