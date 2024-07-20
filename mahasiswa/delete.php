<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];


    $sql = "SELECT * FROM mahasiswa WHERE idmahasiswa = $id";
    // echo $sql;
    $row = $db->getValue($sql);
}
?>

<div class="bg-light shadow col align-self-center w-50 p-5">
    <div class="m-5">
        <form action="" method="post">
            <p>Hapus Data Mahasiswa <b><?php echo $row['mahasiswa'] ?></b></p>
            <br>
            <input type="submit" value="Hapus" name="hapus" class="btn btn-danger btn-sm">
            <input type="submit" value="Batal" name="batal" class="btn btn-secondary btn-sm">
        </form>
    </div>
</div>

<?php
if (isset($_POST['hapus'])) {
    $sql = "DELETE FROM mahasiswa WHERE idmahasiswa = $id";
    $db->exc($sql);
    header("location:?f=mahasiswa&m=select");
} elseif (isset($_POST['batal']))
    header("location:?f=mahasiswa&m=detail&id=$id");
?>