<?php
    header("Content-Type:application/json; charset=utf8");
    include "koneksi.php";

    /*  Untuk Update Data gunakan ini untuk RESTful API
    
    https://smkn3metro.my.id/update.php?suhu1=0&suhu2=0&suhu3=0&kelembapan1=0&kelembapan2=0&kelembapan3=0&daya1=0&daya2=0&daya3=0&tegangan1=0&tegangan2=0&tegangan3=0&arus1=0&arus2=0&arus3=0&energi1=0&energi2=0&energi3=0
    
    */

    if($_SERVER['REQUEST_METHOD']==='GET'){
        $sql = "SELECT * FROM data_ruangan";
        $query = mysqli_query($conn, $sql);

        $array = array();
        
        while ($data = mysqli_fetch_assoc($query)) {
            $array[] = $data;
        }
        echo json_encode($array);
    } elseif ($_SERVER['REQUEST_METHOD']==='PUT') {
        $suhu1 = $_GET['suhu1'];
        $suhu2 = $_GET['suhu2'];
        $suhu3 = $_GET['suhu3'];
        $kelembapan1 = $_GET['kelembapan1'];
        $kelembapan2 = $_GET['kelembapan2'];
        $kelembapan3 = $_GET['kelembapan3'];
        $daya1 = $_GET['daya1'];
        $daya2 = $_GET['daya2'];
        $daya3 = $_GET['daya3'];
        $tegangan1 = $_GET['tegangan1'];
        $tegangan2 = $_GET['tegangan2'];
        $tegangan3 = $_GET['tegangan3'];
        $arus1 = $_GET['arus1'];
        $arus2 = $_GET['arus2'];
        $arus3 = $_GET['arus3'];
        $energi1 = $_GET['energi1'];
        $energi2 = $_GET['energi2'];
        $energi3 = $_GET['energi3'];

        $sql = "UPDATE data_ruangan SET suhu1='$suhu1', suhu2='$suhu2', suhu3='$suhu3', kelembapan1='$kelembapan1', kelembapan2='$kelembapan2', kelembapan3='$kelembapan3', daya1='$daya1', daya2='$daya2', daya3='$daya3', tegangan1='$tegangan1',tegangan2='$tegangan2', tegangan3='$tegangan3', arus1='$arus1', arus2='$arus2', arus3='$arus3', energi1='$energi1', energi2='$energi2', energi3='$energi3'";

        $cek = mysqli_query($conn, $sql);

        if ($cek) {
            $data = [
                'status' => 'Success'
            ];
            echo json_encode($data);
        } else {
            $data = [
                'status' => 'Try Again'
            ];
            echo json_encode($data);
        }
        
    }
?>
