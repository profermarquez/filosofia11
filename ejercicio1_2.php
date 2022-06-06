<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style2.css">
    <title>Document</title>
</head>
<body>
<?php

$var1= $_POST['variable1'];
$var2=$_POST['variable2'];
$var3=$var1;
$var4=0;
$var5=0;

if($var1==1)
{
    if($var2==1)
    {
        $var4=1;
        if($var3==1)
        {
            $var5=1;
        }
        else
        {
            $var5=1;
        }
    }
    else
    {
        
        $var4=0;
        $var5=1;
    }
}
else{
    if($var2)
        {
            $var4=0;
            $var5=1;
        }
    else{
        $var4=0;
        $var5=1;
    }
}


?>
<table id="customers">
      <tr>
        <th>P</th>
        <th>.</th>
        <th>Q</th>
        <th>=></th>
        <th>P</th>

      </tr>
      <tr>
        <td>
            <label><?php echo $var1;?></label>
        </td>
        <td>
            <label ><?php echo $var4;?></label>
        </td>
        <td>
            <label ><?php echo $var2;?></label>
        </td>

        <td>
            <label ><?php echo $var5;?></label>
        </td>
        <td>
            <label ><?php echo $var3;?></label>
        </td>
      </tr>
</table>
</body>
</html>