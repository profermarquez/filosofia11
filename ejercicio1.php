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
//$data[];

if( isset($_POST['variable']) && (isset($_POST['operador'])) ){
	$var = $_POST['variable'];
    $operador = $_POST['operador'];
	
    echo '<table cellspacing="5" cellpadding="5">
      <tr>';
    $c=0;
	foreach($var as $v) 
    {
        if(isset($v)){
            echo '<th>'. $v . "<th>";
           }
        
       if(isset($operador[$c])){
        echo '<th>'.$operador[$c].'</th>';
       }
       $c++;
	}
    echo '</tr>';
}
$arr_uni = array_unique($var);
//print_r(count($arr_uni));
$total_col = count($var) + count($operador);
//print_r($total_col);

?>

    <footer>
        <a href="/filosofia11/ejercicios.html">Volver</a>.
    </footer>
</body>
</html>