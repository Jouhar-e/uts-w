<?php

require_once "module.php";
$db = new DB;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <title>Tugas UTS 1</title>
</head>

<body>
    <div class="container">
        <div class="row bg-white shadow">
            <div class="col-md-3 m-3">
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="?f=mahasiswa&m=select">Data Mahasiswa</a>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col mt-4">
                <?php
                if (isset($_GET['f']) && isset($_GET['m'])) {
                    $f = $_GET['f'];
                    $m = $_GET['m'];

                    $file = $f . "/" . $m . ".php";
                    require_once $file;
                } else {
                    require_once "mahasiswa/select.php";
                }
                ?>
            </div>
        </div>
        <div class="row"></div>
    </div>
</body>

</html>
