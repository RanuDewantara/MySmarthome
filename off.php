<?php 
    require "koneksi.php";
    
    if (isset($_GET["perangkat"]) && $_GET["perangkat"] == "lampu") {
        $id = $_GET['id'];
        $sql = "UPDATE `tb_lampu` SET `nilai` = 0 WHERE id_lampu='$id'";
        mysqli_query($conn, $sql);
    }
    
    elseif (isset($_GET['perangkat']) && $_GET['perangkat'] == 'kipas') {
        $id = $_GET['id'];
        $sql = "UPDATE `tb_kipas` SET `nilai` = 0 WHERE id_kipas='$id'";
        mysqli_query($conn, $sql);
    }
    
    elseif (isset($_GET['perangkat']) && $_GET['perangkat'] == 'ac'){
        $id = $_GET['id'];
        $sql = "UPDATE `tb_ac` SET `nilai` = 0 WHERE id_ac='$id'";
        mysqli_query($conn, $sql);
    }
    
    elseif (isset($_GET['perangkat']) && $_GET['perangkat'] == 'lcd') {
        $id = $_GET['id'];
        $sql = "UPDATE `tb_lcd` SET `nilai` = 0 WHERE id_lcd='$id'";
        mysqli_query($conn, $sql);
    }
    
    header("Location: index.php");
?>