<?php
    include 'koneksi.php';

    if(isset($_POST['aksi'])){
        if($_POST['aksi'] == "add"){

            $nama_kegiatan = $_POST['nama_kegiatan'];
            $sertifikat =  $_FILES['sertifikat']['name'];


            $dir = "img/";
            $tmpFile = $_FILES['sertifikat']['tmp_name'];

            move_uploaded_file($tmpFile, $dir . $sertifikat);






            $query = "INSERT INTO mahasiswa VALUES(null, '$nama_kegiatan', '$sertifikat')";
            $sql = mysqli_query($conn, $query);

        if($sql){
            header("location: index.php");
            // echo "data berhasil di tambahkan <a href='index.php'>[home]</a>";
        } else {
            echo "data gagal";
        }



            echo "<br>Tambah Data <a href='index.php'>[home]</a>";
        } else if($_POST['aksi'] == "edit"){
            // echo "Edit Data <a href='index.php'>[home]</a>";
            header("location: index.php");
            $id = $_POST['id'];
            $nama_kegiatan = $_POST['nama_kegiatan'];

            $queryShow = "SELECT * FROM portofolio WHERE id = '$id';";
            $sqlShow = mysqli_query($conn, $queryShow);
            $result = mysqli_fetch_assoc($sqlShow);

            if($_FILES['sertifikat']['name'] == ""){
            $sertifikat = $result['sertifikat'];
            }else {
                $sertifikat = $_FILES['sertifikat']['name'];

            unlink("img/" . $result['sertifikat']);
            move_uploaded_file($_FILES['sertifikat']['tmp_name'], 'img/'.$_FILES['sertifikat']['name']);
            }

            $query = "UPDATE portofolio SET nama_kegiatan='$nama_kegiatan', sertifikat='$sertifikat' WHERE id='$id';";

            $sql = mysqli_query($conn, $query);
            header("location: index.php");
        }
    }
    if (isset($_GET['hapus'])) {
        $id = $_GET['hapus'];
    
        $queryDelete = "DELETE FROM mahasiswa WHERE id = '$id';";
        $sqlDelete = mysqli_query($conn, $queryDelete);
    
        if ($sqlDelete) {
            header("Location: index.php");
            exit;
        } else {
            echo "Data gagal dihapus: " . mysqli_error($conn);
        }
    }
    
?>