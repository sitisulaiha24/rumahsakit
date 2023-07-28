<?php

$act = $_GET['act'];

if($act == 'save'){
$kode_obat = $_POST['kode_obat'];
$nama_obat = $_POST['nama_obat'];
$jenis_obat = $_POST['jenis_obat'];
$tahun_produksi = $_POST['tahun_produksi'];
$masa_berlaku = $_POST['masa_berlaku'];

$query = $db->query("INSERT INTO obat (kode_obat, nama_obat, jenis_obat, tahun_produksi, masa_berlaku)
                VALUES ('$kode_obat','$nama_obat','$jenis_obat','$tahun_produksi', '$masa_berlaku')");
if ($query) {
    echo "<script>
    alert('Data sukses disimpan');
    window.location.href='". base_url()."index.php?page=obat';
    </script>";
} 
else{
    echo "<script>
    alert('Data gagal disimpan');
    window.location.href='". base_url()."index.php?page=obat&act=input';
    </script>";
}

} else if($act == 'update'){
    $kode_obat_old = $_POST['kode_obat_old'];
    $kode_obat = $_POST['kode_obat'];
    $nama_obat = $_POST['nama_obat'];
    $jenis_obat = $_POST['jenis_obat'];
    $tahun_produksi = $_POST['tahun_produksi'];
    $masa_berlaku = $_POST['masa_berlaku'];
    $password = $_POST['password'];
    
    if(!empty($password)){
        $password_fix = sha1($password);
        $query = $db->query("UPDATE obat SET kode_obat = '$kode_obat',
                                            nama_obat = '$nama_obat',
                                            jenis_obat = '$jenis_obat',
                                            tahun_produksi = '$tahun_produksi',
                                            masa_berlaku = '$masa_berlaku',
                                            password = '$password_fix'
                                    WHERE kode_obat='$kode_obat_old'");
    }
    else{
        $query = $db->query("UPDATE obat SET kode_obat = '$kode_obat',
                                            nama_obat = '$nama_obat',
                                            jenis_obat = '$jenis_obat',
                                            tahun_produksi = '$tahun_produksi',
                                            masa_berlaku = '$masa_berlaku'
                                    WHERE kode_obat ='$kode_obat_old'");
    
    }
    if ($query) {
        echo "<script>
        alert('Data sukses diubah');
        window.location.href='". base_url()."index.php?page=obat';
        </script>";
    } 
    else{
        echo "<script>
        alert('Data gagal diubah');
        window.location.href='". base_url()."index.php?page=obat&act=input';
        </script>";
        }
    }else if($act == 'hapus'){
        $kode_obat = $_GET['kode_obat'];
        $query = $db->query("DELETE FROM obat WHERE kode_obat = '$kode_obat'");
        if ($query) {
            echo "<script>
            alert('Data sukses dihapus');
            window.location.href='". base_url()."index.php?page=obat';
            </script>";
        } 
        else{
            echo "<script>
            alert('Data gagal dihapus');
            window.location.href='". base_url()."index.php?page=obat';
            </script>";
            }
    }
    else{
        echo "<script>
        alert('Maaf parameter anda tidak valid');
        window.location.href='". base_url()."index.php?page=obat';
        </script>";
    
    }
?>