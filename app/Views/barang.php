<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Harga</th>
        </tr>
        <?php $no=1; foreach($getBarang as $li){?>
            <tr>
                <td><?= $no?></td>
                <td><?= $li['nama_barang']?></td>
                <td>Rp<?= number_format($li['harga_jual'])?></td>
            </tr>
        <?php $no++;}?>
    </table>
</body>
</html>