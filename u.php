<?php
session_start();
include 'Conexion.php';
//error_reporting(0);
$tallesDisponibles =  [];
$cant =  [];

if ($_SESSION['tipotalle'] == '1') {
    if (isset($_POST['S'])) {// si recibe de s
        if ($_POST['S'] > 0) { //si es mayor a 0
            $_SESSION['talleS'] = $_POST['S']; //guarda nro 
            $_SESSION['tS'] = $_POST['tS']; //guarda talle
            $tallesDisponibles[] = $_SESSION['tS']; //Array de talles
            $cant[] = $_SESSION['talleS']; //Array de numeros
        }
    }
    if (isset($_POST['M'])) {
        if ($_POST['M'] > 0) {
            $_SESSION['talleM'] = $_POST['M'];
            $_SESSION['tM'] = $_POST['tM'];
            $tallesDisponibles[] = $_SESSION['tM'];
            $cant[] = $_SESSION['talleM'];
        }
    }
    if (isset($_POST['L'])) {
        if ($_POST['L'] > 0) {
            $_SESSION['talleL'] = $_POST['L'];
            $_SESSION['tL'] = $_POST['tL'];
            $tallesDisponibles[] = $_SESSION['tL'];
            $cant[] = $_SESSION['talleL'];
        }
    }
    if (isset($_POST['XL'])) {
        if ($_POST['XL'] > 0) {
            $_SESSION['talleXL'] = $_POST['XL'];
            $_SESSION['tXL'] = $_POST['tXL'];
            $tallesDisponibles[] = $_SESSION['tXL'];
            $cant[] = $_SESSION['talleXL'];
        }
    }
    if (isset($_POST['XXL'])) {
        if ($_POST['XXL'] > 0) {
            $_SESSION['talleXXL'] = $_POST['XXL'];
            $_SESSION['tXXL'] = $_POST['tXXL'];
            $tallesDisponibles[] = $_SESSION['tXXL'];
            $cant[] = $_SESSION['talleXXL'];
        }
    }
    if (isset($_POST['3XL'])) {
        if ($_POST['3XL'] > 0) {
            $_SESSION['talle3XL'] = $_POST['3XL'];
            $_SESSION['t3XL'] = $_POST['t3XL'];
            $tallesDisponibles[] = $_SESSION['t3XL'];
            $cant[] = $_SESSION['talle3XL'];
        }
    }
    if (isset($_POST['4XL'])) {
        if ($_POST['4XL'] > 0) {
            $_SESSION['talle4XL'] = $_POST['4XL'];
            $_SESSION['t4XL'] = $_POST['t4XL'];
            $tallesDisponibles[] = $_SESSION['t4XL'];
            $cant[] = $_SESSION['talle4XL'];
        }
    }
    if (isset($_POST['5XL'])) {
        if ($_POST['5XL'] > 0) {
            $_SESSION['talle5XL'] = $_POST['5XL'];
            $_SESSION['5XL'] = $_POST['5XL'];
            $tallesDisponibles[] = $_SESSION['t5XL'];
            $cant[] = $_SESSION['talle5XL'];
        }
    }
}
if ($_SESSION['tipotalle'] == '3') {
    if (isset($_POST['36'])) {
        if ($_POST['36'] > 0) {
            $_SESSION['talle36'] = $_POST['36'];
            $_SESSION['t36'] = $_POST['t36'];
            $tallesDisponibles[] = $_SESSION['t36'];
            $cant[] = $_SESSION['talle36'];
        }
    }
    if (isset($_POST['38'])) {
        if ($_POST['38'] > 0) {
            $_SESSION['talle38'] = $_POST['38'];
            $_SESSION['t38'] = $_POST['t38'];
            $tallesDisponibles[] = $_SESSION['t38'];
            $cant[] = $_SESSION['talle38'];
        }
    }
    if (isset($_POST['40'])) {
        if ($_POST['40'] > 0) {
            $_SESSION['talle40'] = $_POST['40'];
            $_SESSION['t40'] = $_POST['t40'];
            $tallesDisponibles[] = $_SESSION['t40'];
            $cant[] = $_SESSION['talle40'];
        }
    }
    if (isset($_POST['42'])) {
        if ($_POST['42'] > 0) {
            $_SESSION['talle42'] = $_POST['42'];
            $_SESSION['t42'] = $_POST['t42'];
            $tallesDisponibles[] = $_SESSION['t42'];
            $cant[] = $_SESSION['talle42'];
        }
    }
    if (isset($_POST['44'])) {
        if ($_POST['44'] > 0) {
            $_SESSION['talle44'] = $_POST['44'];
            $_SESSION['t44'] = $_POST['t44'];
            $tallesDisponibles[] = $_SESSION['t44'];
            $cant[] = $_SESSION['talle44'];
        }
    }
    if (isset($_POST['46'])) {
        if ($_POST['46'] > 0) {
            $_SESSION['talle46'] = $_POST['46'];
            $_SESSION['t46'] = $_POST['t46'];
            $tallesDisponibles[] = $_SESSION['t46'];
            $cant[] = $_SESSION['talle46'];
        }
    }
    if (isset($_POST['48'])) {
        if ($_POST['48'] > 0) {
            $_SESSION['talle48'] = $_POST['48'];
            $_SESSION['t48'] = $_POST['t48'];
            $tallesDisponibles[] = $_SESSION['t48'];
            $cant[] = $_SESSION['talle48'];
        }
    }
    if (isset($_POST['50'])) {
        if ($_POST['50'] > 0) {
            $_SESSION['talle50'] = $_POST['50'];
            $_SESSION['t50'] = $_POST['t50'];
            $tallesDisponibles[] = $_SESSION['t50'];
            $cant[] = $_SESSION['talle50'];
        }
    }
    if (isset($_POST['52'])) {
        if ($_POST['52'] > 0) {
            $_SESSION['talle52'] = $_POST['52'];
            $_SESSION['t52'] = $_POST['t52'];
            $tallesDisponibles[] = $_SESSION['t52'];
            $cant[] = $_SESSION['talle52'];
        }
    }
    if (isset($_POST['54'])) {
        if ($_POST['54'] > 0) {
            $_SESSION['talle54'] = $_POST['54'];
            $_SESSION['t54'] = $_POST['t54'];
            $tallesDisponibles[] = $_SESSION['t54'];
            $cant[] = $_SESSION['talle54'];
        }
    }
    if (isset($_POST['56'])) {
        if ($_POST['56'] > 0) {
            $_SESSION['talle56'] = $_POST['56'];
            $_SESSION['t56'] = $_POST['t56'];
            $tallesDisponibles[] = $_SESSION['t56'];
            $cant[] = $_SESSION['talle56'];
        }
    }
}
if ($_SESSION['tipotalle'] == '4') {
    if (isset($_POST['39'])) {
        if ($_POST['39'] > 0) {
            $_SESSION['nro39'] = $_POST['39'];
            $_SESSION['t39'] = $_POST['t39'];
            $tallesDisponibles[] = $_SESSION['t39'];
            $cant[] = $_SESSION['nro39'];
        }
    }
    if (isset($_POST['40'])) {
        if ($_POST['40'] > 0) {
            $_SESSION['nro40'] = $_POST['40'];
            $_SESSION['t40'] = $_POST['t40'];
            $tallesDisponibles[] = $_SESSION['t40'];
            $cant[] = $_SESSION['nro40'];
        }
    }
    if (isset($_POST['41'])) {
        if ($_POST['41'] > 0) {
            $_SESSION['nro41'] = $_POST['41'];
            $_SESSION['t41'] = $_POST['t41'];
            $tallesDisponibles[] = $_SESSION['t41'];
            $cant[] = $_SESSION['nro41'];
        }
    }
    if (isset($_POST['42'])) {
        if ($_POST['42'] > 0) {
            $_SESSION['nro42'] = $_POST['42'];
            $_SESSION['t42'] = $_POST['t42'];
            $tallesDisponibles[] = $_SESSION['t42'];
            $cant[] = $_SESSION['nro42'];
        }
    }
    if (isset($_POST['43'])) {
        if ($_POST['43'] > 0) {
            $_SESSION['nro43'] = $_POST['43'];
            $_SESSION['t43'] = $_POST['t43'];
            $tallesDisponibles[] = $_SESSION['t43'];
            $cant[] = $_SESSION['nro43'];
        }
    }
    if (isset($_POST['44'])) {
        if ($_POST['44'] > 0) {
            $_SESSION['nro44'] = $_POST['44'];
            $_SESSION['t44'] = $_POST['t44'];
            $tallesDisponibles[] = $_SESSION['t44'];
            $cant[] = $_SESSION['nro44'];
        }
    }
    if (isset($_POST['45'])) {
        if ($_POST['45'] > 0) {
            $_SESSION['nro45'] = $_POST['45'];
            $_SESSION['t45'] = $_POST['t45'];
            $tallesDisponibles[] = $_SESSION['t45'];
            $cant[] = $_SESSION['nro45'];
        }
    }
}
$comprueba = "SELECT COUNT(*) nombreProd FROM prod WHERE nombreProd = '$_SESSION[nombreProd]' ";
$res3 = mysqli_query($conn, $comprueba);
$fila = mysqli_fetch_assoc($res3);
if ($fila['nombreProd'] == 0) {
    $insert = "INSERT INTO prod (nombreProd, categoria, descripcion, precio) VALUES ('$_SESSION[nombreProd]', '$_SESSION[cat]', '$_SESSION[descripcion]','$_SESSION[precio]')";
    $res2 = mysqli_query($conn, $insert);
}

for ($i = 0; $i < count($tallesDisponibles); $i++) {
    $query = "INSERT INTO detalleproducto (producto, color, talle, cant) VALUES ('$_SESSION[nombreProd]', '$_SESSION[color]', '$tallesDisponibles[$i]', '$cant[$i]')";
    $r = mysqli_query($conn, $query);
}

header("Location: cargarProducto5.php");
