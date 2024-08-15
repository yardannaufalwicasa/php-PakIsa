<?php
    require_once ("content.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $sekolah;?></title>
</head>
<body>
    <h1><?= $sekolah; ?></h1>
    <p><?= $isi; ?></p>
    <hr>
    <h1>Jadwal Pelajaran RPL tahun 2024/2025</h1>
    <table border="1">
        <thead>
            <tr>
                <td><?= $hari[0];?></td>
                <td><?= $hari[1];?></td>
                <td><?= $hari[2];?></td>
                <td><?= $hari[3];?></td>
                <td><?= $hari[4];?></td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $pelajaran[2];?></td>
                <td><?= $pelajaran[1];?></td>
                <td><?= $pelajaran[5];?></td>
                <td><?= $pelajaran[7];?></td>
                <td><?= $pelajaran[3];?></td>

            </tr>
            <tr>
                <td><?= $pelajaran[6];?></td>
                <td><?= $pelajaran[3];?></td>
                <td><?= $pelajaran[7];?></td>
                <td><?= $pelajaran[1];?></td>
                <td><?= $pelajaran[9];?></td>
            </tr>
            <tr>
                <td><?= $pelajaran[6];?></td>
                <td><?= $pelajaran[2];?></td>
                <td><?= $pelajaran[6];?></td>
                <td><?= $pelajaran[3];?></td>
                <td><?= $pelajaran[9];?></td>
            </tr>
        </tbody>
    </table>

    <hr>
    <img src="images/<?= $gambar[1];?>" alt="">
</body>
</html>