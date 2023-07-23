<?php 
    $host = "localhost";
    $user = "root";
    $pw = "";
    $db = "mysmarthome";

    $conn = mysqli_connect($host, $user, $pw, $db);

    // Lampu Ruang 1
    $l1 = mysqli_query($conn, "SELECT * FROM tb_lampu WHERE id_lampu = 1");
    $qLampu1RG = mysqli_fetch_array($l1, MYSQLI_ASSOC);
    $l2 = mysqli_query($conn, "SELECT * FROM tb_lampu WHERE id_lampu = 2");
    $qLampu2RG = mysqli_fetch_array($l2, MYSQLI_ASSOC);

    // Lampu Ruang 2
    $labA1 = mysqli_query($conn, "SELECT * FROM tb_lampu WHERE id_lampu = 3");
    $qLampu1LA = mysqli_fetch_array($labA1, MYSQLI_ASSOC);
    $labA2 = mysqli_query($conn, "SELECT * FROM tb_lampu WHERE id_lampu = 4");
    $qLampu2LA = mysqli_fetch_array($labA2, MYSQLI_ASSOC);
    $labA3 = mysqli_query($conn, "SELECT * FROM tb_lampu WHERE id_lampu = 5");
    $qLampu3LA = mysqli_fetch_array($labA3, MYSQLI_ASSOC);
    $labA4 = mysqli_query($conn, "SELECT * FROM tb_lampu WHERE id_lampu = 6");
    $qLampu4LA = mysqli_fetch_array($labA4, MYSQLI_ASSOC);

    // Lampu Ruang 3
    $labB1 = mysqli_query($conn, "SELECT * FROM tb_lampu WHERE id_lampu = 7");
    $qLampu1LB = mysqli_fetch_array($labB1, MYSQLI_ASSOC);
    $labB2 = mysqli_query($conn, "SELECT * FROM tb_lampu WHERE id_lampu = 8");
    $qLampu2LB = mysqli_fetch_array($labB2, MYSQLI_ASSOC);
    $labB3 = mysqli_query($conn, "SELECT * FROM tb_lampu WHERE id_lampu = 9");
    $qLampu3LB = mysqli_fetch_array($labB3, MYSQLI_ASSOC);
    $labB4 = mysqli_query($conn, "SELECT * FROM tb_lampu WHERE id_lampu = 10");
    $qLampu4LB = mysqli_fetch_array($labB4, MYSQLI_ASSOC);

    // Kipas Ruang 1
    $k1 = mysqli_query($conn, "SELECT * FROM tb_kipas WHERE id_kipas = 1");
    $qKipas1 = mysqli_fetch_array($k1, MYSQLI_ASSOC);
    $k2 = mysqli_query($conn, "SELECT * FROM tb_kipas WHERE id_kipas = 2");
    $qKipas2 = mysqli_fetch_array($k2, MYSQLI_ASSOC);

    // AC Ruang 2
    $acA1 = mysqli_query($conn, "SELECT * FROM tb_ac WHERE id_ac = 1");
    $qACLA1 = mysqli_fetch_array($acA1, MYSQLI_ASSOC);
    $acA2 = mysqli_query($conn, "SELECT * FROM tb_ac WHERE id_ac = 2");
    $qACLA2 = mysqli_fetch_array($acA2, MYSQLI_ASSOC);

    // AC Ruang 3
    $acB1 = mysqli_query($conn, "SELECT * FROM tb_ac WHERE id_ac = 3");
    $qACLB1 = mysqli_fetch_array($acB1, MYSQLI_ASSOC);
    $acB2 = mysqli_query($conn, "SELECT * FROM tb_ac WHERE id_ac = 4");
    $qACLB2 = mysqli_fetch_array($acB2, MYSQLI_ASSOC);

    // LCD
    $lcdA = mysqli_query($conn, "SELECT * FROM tb_lcd WHERE id_lcd = 1");
    $qLCDA = mysqli_fetch_array($lcdA, MYSQLI_ASSOC);
    $lcdB = mysqli_query($conn, "SELECT * FROM tb_lcd WHERE id_lcd = 2");
    $qLCDB = mysqli_fetch_array($lcdB, MYSQLI_ASSOC);
?>
