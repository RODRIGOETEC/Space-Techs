<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animes</title>
</head>
<body>
<h1> Boku No Hero </h1> 
<?php 

$temp = 0;

?>
<table border="5">
<?php
while ($temp<6){
    $temp=$temp+1;
    ?>
    <tr>
    <td>Temporada: </td>
    <td><?php echo $temp; ?></td>
    <td> <input type="Button" value="Assistir"></td>
</tr>
<?php
}
?>
</table>
    
</body>
</html>
