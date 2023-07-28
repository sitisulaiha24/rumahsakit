<?php
$act = $_GET['act'];

if($act == 'save'){
$id_pasien = $_POST['id_pasien'];
$nama_pasien = $_POST['nama_pasien'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$no_telp = $_POST['no_telp'];
$alamat = $_POST['alamat'];
$tanggal_lahir = $_POST['tanggal_lahir'] ;

$query = $db->query("INSERT INTO pasien (id_pasien, nama_pasien, jenis_kelamin, no_telp, alamat, tanggal_lahir)
                VALUES ('$id_pasien','$nama_pasien','$jenis_kelamin','$no_telp', '$alamat', '$tanggal_lahir')");
if ($query) {
    echo "<script>
    alert('Data sukses disimpan');
    window.location.href='". base_url()."index.php?page=pasien';
    </script>";
} 
else{
    echo "<script>
    alert('Data gagal disimpan');
    window.location.href='". base_url()."index.php?page=pasien&act=input';
    </script>";
}

} else if($act == 'update'){
    $id_pasien_old = $_POST['id_pasien_old'];
    $id_pasien = $_POST['id_pasien'];
    $nama_pasien = $_POST['nama_pasien'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $no_telp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $password = $_POST['password'];
    
    if(!empty($password)){
        $password_fix = sha1($password);
        $query = $db->query("UPDATE pasien SET id_pasien = '$id_pasien',
                                            nama_pasien = '$nama_pasien',
                                            jenis_kelamin = '$jenis_kelamin',
                                            no_telp = '$no_telp',
                                            alamat = '$alamat',
                                            tanggal_lahir = '$tanggal_lahir',
                                            password = '$password_fix'
                                    WHERE id_pasien='$id_pasien_old'");
    }
    else{
        $query = $db->query("UPDATE pasien SET id_pasien = '$id_pasien',
                                            nama_pasien = '$nama_pasien',
                                            jenis_kelamin = '$jenis_kelamin',
                                            no_telp = '$no_telp',
                                            alamat = '$alamat',
                                            tanggal_lahir = '$tanggal_lahir'
                                    WHERE id_pasien ='$id_pasien_old'");
    
    }
    if ($query) {
        echo "<script>
        alert('Data sukses diubah');
        window.location.href='". base_url()."index.php?page=pasien';
        </script>";
    } 
    else{
        echo "<script>
        alert('Data gagal diubah');
        window.location.href='". base_url()."index.php?page=pasien&act=input';
        </script>";
        }
    }else if($act == 'hapus'){
        $id_pasien = $_GET['id_pasien'];
        $query = $db->query("DELETE FROM pasien WHERE id_pasien = '$id_pasien'");
        if ($query) {
            echo "<script>
            alert('Data sukses dihapus');
            window.location.href='". base_url()."index.php?page=pasien';
            </script>";
        } 
        else{
            echo "<script>
            alert('Data gagal dihapus');
            window.location.href='". base_url()."index.php?page=pasien';
            </script>";
            }
    }
    else{
        echo "<script>
        alert('Maaf parameter anda tidak valid');
        window.location.href='". base_url()."index.php?page=pasien';
        </script>";
    
    }
?>