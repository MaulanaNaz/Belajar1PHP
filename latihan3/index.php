<?php

include("mahasiswa.php"); //bisa juga pake requir_once dan requir


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP - Method GET</title>
</head>
<body>
    <h1 align="center">Daftar Mahasiswa UNIKO</h1>

    <table border="1" cellpadding="5" align="center">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Foto</th>
            <th colspan="3">Aksi</th>
            <?php foreach($mhs as $m) : ?>
                <tr>
                    <td><?= $m["nim"] ?></td>
                    <td><?= $m["nama"] ?></td>
                    <td>
                        <img  width="200" src="<?= $m["image"] ?>">
                    </td>
                    <td>
                        <a href="detail.php?nim=<?= $m["nim"] ?>&nama=<?= $m["nama"]?>&alamat=<?= $m["alamat"]?>&prodi=<?= $m["prodi"]?>&image=<?= $m["image"] ?>">Lihat</a>
                    </td>
                    <td>
                        <a href="#">Edit</a>
                    </td>
                    <td>
                        <a href="#">Hapus</a>
                    </td>
                </tr>
            <?php endforeach ?>

        </tr>
    </table>
    

</body>
</html>