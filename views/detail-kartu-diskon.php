<?php
require_once __DIR__ . '/../models/KartuDiskon.php';

use models\KartuDiskon;

if (!isset($_GET['id'])) {
    header('Location: list-kartu-diskon.php');
    exit;
}

$kartu_diskon = KartuDiskon::find($_GET['id']);

if (!$kartu_diskon) {
    header('Location: list-kartu-diskon.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Praktikum 06</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="../public/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php include_once 'partials/navbar.php'?>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <?php include_once 'partials/sidebar.php'?>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Detail Kartu Diskon</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="list-kartu-diskon.php">Kartu Diskon</a></li>
                            <li class="breadcrumb-item active">Detail Kartu Diskon</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Detail Kartu Diskon
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Nama</th>
                                        <td><?php echo $kartu_diskon['nama'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Persen Diskon</th>
                                        <td><?php echo $kartu_diskon['persen_diskon'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Deskripsi</th>
                                        <td><?php echo $kartu_diskon['deskripsi'] ?></td>
                                    </tr>
                                </table>
                                <div class="mt-3">
                                    <a href="list-kartu-diskon.php" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Back</a>
                                    <a href="edit-kartu-diskon.php?id=<?php echo $kartu_diskon['id'] ?>" class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a>
                                    <a href="delete-kartu-diskon.php?id=<?php echo $kartu_diskon['id'] ?>" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <?php include_once 'partials/footer.php'?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../public/js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="../public/js/datatables-simple-demo.js"></script>
    </body>
</html>
