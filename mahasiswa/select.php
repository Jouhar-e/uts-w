<div>
    <a href="?f=mahasiswa&m=insert" class="btn btn-primary">Tambah Data</a>
</div>

<?php
$sql = "SELECT * FROM mahasiswa";
$row = $db->getData($sql);

// var_dump($row);
$no = 1;
?>

<table class="table  mt-2">
    <thead>
        <tr>
            <th>NO</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Tanggal Lahir</th>
            <th>Telp</th>
            <th>Detail</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($row)) : ?>
            <?php foreach ($row as $key) : ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $key['nim'] ?></td>
                    <td><?php echo $key['mahasiswa'] ?></td>
                    <td><?php echo $key['alamat'] ?></td>
                    <td><?php echo $key['tgllahir'] ?></td>
                    <td><?php echo $key['telp'] ?></td>
                    <td><a href="?f=mahasiswa&m=detail&id=<?php echo $key['idmahasiswa'] ?>" class="btn btn-info btn-sm">Detail</a></td>
                </tr>
            <?php endforeach ?>
        <?php endif ?>
    </tbody>
</table>