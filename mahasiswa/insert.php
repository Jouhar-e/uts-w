<div>
    <form action="" method="post" class="form-group">
        <div>
            <label class="form-label">NIM</label>
            <input type="number" maxlength="10" name="nim" class="form-control" placeholder="NIM" require>
        </div>
        <div>
            <label class="form-label">Mahasiswa</label>
            <input type="text" name="mahasiswa" class="form-control" placeholder="Mahasiswa" require>
        </div>
        <div>
            <label class="form-label">Alamat</label>
            <input type="text" name="alamat" class="form-control" placeholder="Alamat" require>
        </div>
        <div>
            <label class="form-label">Tanggal Lahir</label>
            <input type="date" name="tgllahir" class="form-control" placeholder="Tanggal Lahir" require>
        </div>
        <div>
            <label class="form-label">Telp</label>
            <input type="number" maxlength="15" name="telp" class="form-control" placeholder="Telp" require>
        </div>
        <div class="mt-2">
            <input type="submit" name="simpan" value="Simpan" class="btn btn-outline-primary">
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

        $sql = "INSERT INTO mahasiswa VALUES (null,'$nim','$mahasiswa','$alamat','$tgllahir','$telp')";
        // echo $sql;
        $db->exc($sql);
        header("location:?f=mahasiswa&m=select");
    }

?>