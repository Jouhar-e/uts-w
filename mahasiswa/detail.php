<?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "SELECT * FROM mahasiswa WHERE idmahasiswa = $id";
        $row = $db->getValue($sql);

        // var_dump($row);
    }
?>

<table class="table">
    <tr>
        <td>NIM</td>
        <td>:</td>
        <td><?php echo $row['nim'] ?></td>
    </tr>
    <tr>
        <td>Mahasiswa</td>
        <td>:</td>
        <td><?php echo $row['mahasiswa'] ?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><?php echo $row['alamat'] ?></td>
    </tr>
    <tr>
        <td>Tanggal Lahir</td>
        <td>:</td>
        <td><?php echo $row['tgllahir'] ?></td>
    </tr>
    <tr>
        <td>Telp</td>
        <td>:</td>
        <td><?php echo $row['telp'] ?></td>
    </tr>
    <tr>
        <td colspan="3">
            <a href="?f=mahasiswa&m=update&id=<?php echo $id?>" class="btn btn-warning btn-sm">Ubah</a>
            <a href="?f=mahasiswa&m=delete&id=<?php echo $id?>" class="btn btn-danger btn-sm">Hapus</a>
        </td>
    </tr>
</table>