<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
    <title>login</title>
</head>
<body>
<?php
if(!isset($SESSION['login'])){
    include('login.php');
}else{
    include('home.php');
}

?>

</body>
</html>