<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$link = mysqli_connect("localhost", "root", "", "verdad1");

if( isset($_POST['variable']) && (isset($_POST['operador'])) ){
	$var = $_POST['variable'];
    $operador = $_POST['operador'];

    $tabla='CREATE TABLE tabla1(id INT NOT NULL PRIMARY KEY AUTO_INCREMENT';
    $c=0;
	foreach($var as $v) 
    {
        if(isset($v)){
            $campo1= ', '. $v . ' VARCHAR(1) NOT NULL';
            $tabla=$tabla.$campo1;
           }
        
       if(isset($operador[$c])){
        $ope1 = ', '.$operador[$c].' VARCHAR(1) NOT NULL';
        $tabla=$tabla.$ope1;
       }
       $c++;
	}
    $tabla = $tabla . ')';
    echo $tabla;

    if(mysqli_query($link, $tabla)){
        echo "Table created successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
     
    // Close connection
    mysqli_close($link);
}

?>
</body>
</html>