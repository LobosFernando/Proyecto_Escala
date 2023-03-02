<?php
session_start();

$_SESSION['cat']= $_POST['catElegida'];
$lastChar = substr($_SESSION['cat'], -1);
if ($lastChar=='M'){
    $_SESSION['catCortada'] = substr($_SESSION['cat'], 0, -1);
}
else{
    $_SESSION['catCortada']=$_SESSION['cat'];
}
    header("Location: Categoria.php");

?>