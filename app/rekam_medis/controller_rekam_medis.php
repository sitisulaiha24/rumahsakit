<?php

$act = $_GET['act'];

if($act == 'save'){
$id_rekam_medis = $_POST['id_rekam_medis'];
$tanggal = $_POST['tanggal'];
$keluhan = $_POST['keluhan'];
$pemeriksaan = $_POST['pemeriksaan'];
$pengobatan = $_POST['pengobatan'];
$query = $db->query("INSERT INTO rekam_medis (id_rekam_medis, tanggal, keluhan, pemeriksaan, pengobatan)
                VALUES ('$id_rekam_medis','$tanggal','$keluhan','$pemeriksaan', '$pengobatan')");
if ($query) {
    echo "<script>
    alert('Data sukses disimpan');
    window.location.href='". base_url()."index.php?page=rekam_medis';
    </script>";
} 
else{
    echo "<script>
    alert('Data gagal disimpan');
    window.location.href='". base_url()."index.php?page=rekam_medis&act=input';
    </script>";
}

} else if($act == 'update'){
    $id_rekam_medis_old = $_POST['id_rekam_medis_old'];
    $id_rekam_medis = $_POST['id_rekam_medis'];
    $tanggal = $_POST['tanggal'];
    $keluhan = $_POST['keluhan'];
    $pemeriksaan = $_POST['pemeriksaan'];
    $pengobatan = $_POST['pengobatan'];
    $password = $_POST['password'];
    
    if(!empty($password)){
        $password_fix = sha1($password);
        $query = $db->query("UPDATE rekam_medis SET id_rekam_medis = '$id_rekam_medis',
                                            tanggal = '$tanggal',
                                            keluhan = '$keluhan',
                                            pemeriksaan = '$pemeriksaan',
                                            pengobatan = '$pengobatan',
                                            password = '$password_fix'
                                    WHERE id_rekam_medis='$id_rekam_medis_old'");
    }
    else{
        $query = $db->query("UPDATE rekam_medis SET id_rekam_medis = '$id_rekam_medis',
                                            tanggal = '$tanggal',
                                            keluhan = '$keluhan',
                                            pemeriksaan = '$pemeriksaan',
                                            pengobatan = '$pengobatan'
                                    WHERE id_rekam_medis ='$id_rekam_medis_old'");
    
    }
    if ($query) {
        echo "<script>
        alert('Data sukses diubah');
        window.location.href='". base_url()."index.php?page=rekam_medis';
        </script>";
    } 
    else{
        echo "<script>
        alert('Data gagal diubah');
        window.location.href='". base_url()."index.php?page=rekam_medis&act=input';
        </script>";
        }
    }else if($act == 'hapus'){
        $id_rekam_medis = $_GET['id_rekam_medis'];
        $query = $db->query("DELETE FROM rekam_medis WHERE id_rekam_medis = '$id_rekam_medis'");
        if ($query) {
            echo "<script>
            alert('Data sukses dihapus');
            window.location.href='". base_url()."index.php?page=rekam_medis';
            </script>";
        } 
        else{
            echo "<script>
            alert('Data gagal dihapus');
            window.location.href='". base_url()."index.php?page=rekam_medis';
            </script>";
            }
    }
    else{
        echo "<script>
        alert('Maaf parameter anda tidak valid');
        window.location.href='". base_url()."index.php?page=rekam_medis';
        </script>";
    
    }
?>