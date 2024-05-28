<?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "SELECT * FROM mahasiswa WHERE idmahasiswa = $id";
        $row = $db->getValue($sql);

        // var_dump($row);
    }
?>

<a href="?f=mahasiswa&m=detail&id=<?php echo $id?>" class="btn btn-info btn-sm mb-2">Kembali</a>

<div>
    <form action="" method="post" class="form-group">
        <div>
            <label class="form-label">NIM</label>
            <input type="number" maxlength="10" name="nim" value="<?php echo $row['nim'] ?>" class="form-control" placeholder="NIM" require>
        </div>
        <div>
            <label class="form-label">Mahasiswa</label>
            <input type="text" name="mahasiswa" value="<?php echo $row['mahasiswa'] ?>" class="form-control" placeholder="Mahasiswa" require>
        </div>
        <div>
            <label class="form-label">Alamat</label>
            <input type="text" name="alamat" value="<?php echo $row['alamat'] ?>" class="form-control" placeholder="Alamat" require>
        </div>
        <div>
            <label class="form-label">Tanggal Lahir</label>
            <input type="date" name="tgllahir" value="<?php echo $row['tgllahir'] ?>" class="form-control" placeholder="Tanggal Lahir" require>
        </div>
        <div>
            <label class="form-label">Telp</label>
            <input type="number" maxlength="15" name="telp" value="<?php echo $row['telp'] ?>" class="form-control" placeholder="Telp" require>
        </div>
        <div class="mt-2">
            <input type="submit" name="simpan" value="Simpan" class="btn btn-outline-primary btn-sm">
        </div>
    </form>
</div>

<?php

    if (isset($_POST['simpan'])) {
        $nim = $_POST['nim'];
        $mahasiswa = $_POST['mahasiswa'];
        $alamat = $_POST['alamat'];
        $tgllahir = $_POST['tgllahir'];
        $telp = $_POST['telp'];

        $sql = "UPDATE mahasiswa SET nim='$nim', mahasiswa='$mahasiswa', alamat='$alamat', tgllahir='$tgllahir',telp='$telp' WHERE idmahasiswa = $id";
        // echo $sql;
        $db->exc($sql);
        header("location:?f=mahasiswa&m=detail&id=$id");
    }

?>