<?php 
    include "koneksi.php";
    $sql = mysqli_query($conn, "SELECT * FROM data_ruangan");
?>

<?php foreach ($sql as $data) : ?>
    <tr>
        <td>Suhu</td>
        <td>&nbsp;:</td>
        <td>
            &nbsp;<?= $data['suhu2']; ?>°C
        </td>
    </tr>
    <tr>
        <td>Kelembapan</td>
        <td>&nbsp;:</td>
        <td>
            &nbsp;<?= $data['kelembapan2']; ?>% RH
        </td>
    </tr>
    <tr>
        <td>Daya</td>
        <td>&nbsp;:</td>
        <td>
            &nbsp;<?= $data['daya2']; ?> Watt
        </td>
    </tr>
    <tr>
        <td>Tegangan</td>
        <td>&nbsp;:</td>
        <td>
            &nbsp;<?= $data['tegangan2']; ?> Volt
        </td>
    </tr>
    <tr>
        <td>Arus</td>
        <td>&nbsp;:</td>
        <td>
            &nbsp;<?= $data['arus2']; ?> Ampere
        </td>
    </tr>
    <tr>
        <td>Energi</td>
        <td>&nbsp;:</td>
        <td>
            &nbsp;<?= $data['energi2']; ?> kWh
        </td>
    </tr>
    
<?php endforeach ?>
