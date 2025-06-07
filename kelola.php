<!DOCTYPE html>

<?php
    include 'koneksi.php';

    $nama_kegiatan = ' ';
    $sertifikat = ' ';

    if(isset($_GET['ubah'])) {
        $id = $_GET['ubah'];

        $query = "SELECT * FROM mahasiswa WHERE id = '$id';";
        $sql = mysqli_query($conn, $query);

        $result = mysqli_fetch_assoc($sql);

    $nama_kegiatan = $result['nama_kegiatan'];
    $sertifikat = $result['sertifikat'];

        // var_dump($result);

        // die();
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style2.css">
    <link href="fontawesome/css/fontawesome.css" rel="stylesheet" />
    <!-- update existing v5 CSS to use v6 icons and assets -->
    <link href="fontawesome/css/fontawesome.min.css" rel="stylesheet" />
    <link href="fontawesome/css/all.min.css" rel="stylesheet" />
    <link href="fontawesome/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-light bg-light mb-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                CRUD MAHASISWA
            </a>
        </div>
    </nav>
    <div class="container">
        <form method="POST" action="proses.php" enctype="multipart/form-data">
            <input type="hidden" value="<?php echo $id;?>" name="id">
            <div class="mb-3 row">
                <label for="nama_kegiatan" class="col-sm-2 col-form-label">Nama kegiatan</label>
                <div class="col-sm-10">
                <input type="text" name="nama_kegiatan" class="form-control" id="nama_kegiatan" placeholder="Ex:dicoding" value="<?php echo $nama_kegiatan;?>">
            </div>     
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label">foto sertifikat</label>
                <input <?php if (!isset($_GET['ubah'])) {
                    echo "required";} ?> class="form-control" type="file" name="sertifikat" id="sertifikat" value="<?php echo $sertifikat;?>">    
            </div>
            <div class="mb-3 mt-4">
                <div class="col">
                    <?php
                        if(isset($_GET['ubah'])){
                    ?>
                        <button type="submit" name="aksi" value="edit" class="btn btn-primary">
                            simpan
                        </button>
                    <?php
                        } else {
                    ?>
                        <button type="submit" name="aksi" value="add" class="btn btn-primary">
                            <i class="fa fa-floppy-o" aria-hidden="true"></i>
                            tambahkan
                        </button>
                    <?php
                        } 
                    ?>
                    <a href="index.php" type="button" class="btn btn-danger">
                        batal
                    </a>
                </div>
            </div>
        </form>     
    </div>
</body>
</html>