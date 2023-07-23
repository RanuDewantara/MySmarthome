<?php 
    include "koneksi.php";

    $log = mysqli_query($conn,
                            "
                            SELECT * FROM log_lampu UNION
                            SELECT * FROM log_kipas UNION
                            SELECT * FROM log_ac UNION
                            SELECT * FROM log_lcd UNION
                            SELECT * FROM log_suhu UNION
                            SELECT * FROM log_kelembapan UNION
                            SELECT * FROM log_daya UNION
                            SELECT * FROM log_tegangan UNION
                            SELECT * FROM log_arus UNION
                            SELECT * FROM log_energi
                            ORDER BY ts DESC LIMIT 4
                            ");
?>

<?php foreach ($log as $act) : ?>
    <tr class="border">
        <td style='border: 1px solid;'><?= $act['ts']; ?></td>
        <td style='border: 1px solid;'><?= $act['status']; ?></td>
    </tr>
<?php endforeach ?>