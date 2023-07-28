<?php
$act = $_GET['act'];

if($act == 'save'){
$id_dokter = $_POST['id_dokter'];
$nama_dokter = $_POST['nama_dokter'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$no_telp = $_POST['no_telp'];
$alamat = $_POST['alamat'];
$diagnosis_penyakit = $_POST['diagnosis_penyakit'] ;
$meracik_obat = $_POST['meracik_obat'] ;

$query = $db->query("INSERT INTO dokter (id_dokter, nama_dokter, jenis_kelamin, no_telp, alamat, diagnosis_penyakit, meracik_obat)
                VALUES ('$id_dokter','$nama_dokter','$jenis_kelamin','$no_telp', '$alamat', '$diagnosis_penyakit', '$meracik_obat')");

if ($query) {
    echo "<script>
    alert('Data sukses disimpan');
    window.location.href='". base_url()."index.php?page=dokter';
    </script>";
} 
else{
    echo "<script>
    alert('Data gagal disimpan');
    window.location.href='". base_url()."index.php?page=dokter&act=input';
    </script>";
}

} else if($act == 'update'){
    $id_dokter = $_POST['id_dokter'];
    $nama_dokter = $_POST['nama_dokter'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $no_telp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];
    $diagnosis_penyakit = $_POST['diagnosis_penyakit'] ;
    $meracik_obat = $_POST['meracik_obat'] ;
    $password = $_POST['password'];   
    
    if(!empty($password)){
        $password_fix = sha1($password);
        $query = $db->query("UPDATE dokter SET id_dokter = '$id_dokter',
                                            nama_dokter = '$nama_dokter',
                                            jenis_kelamin = '$jenis_kelamin',
                                            no_telp = '$no_telp',
                                            alamat = '$alamat',
                                            diagnosis_penyakit = '$diagnosis_penyakit',
                                            password = '$password_fix'
                                    WHERE id_dokter='$id_dokter_old'");
    }
    else{
        $query = $db->query("UPDATE dokter SET id_dokter = '$id_dokter',
                                            nama_dokter = '$nama_dokter',
                                            jenis_kelamin = '$jenis_kelamin',
                                            no_telp = '$no_telp',
                                            alamat = '$alamat',
                                            diagnosis_penyakit = '$diagnosis_penyakit'
                                    WHERE id_dokter ='$id_dokter_old'");
    
    }
    if ($query) {
        echo "<script>
        alert('Data sukses diubah');
        window.location.href='". base_url()."index.php?page=dokter';
        </script>";
    } 
    else{
        echo "<script>
        alert('Data gagal diubah');
        window.location.href='". base_url()."index.php?page=dokter&act=input';
        </script>";
        }
    }else if($act == 'hapus'){
        $id_dokter = $_GET['id_dokter'];
        $query = $db->query("DELETE FROM dokter WHERE id_dokter = '$id_dokter'");
        if ($query) {
            echo "<script>
            alert('Data sukses dihapus');
            window.location.href='". base_url()."index.php?page=dokter';
            </script>";
        } 
        else{
            echo "<script>
            alert('Data gagal dihapus');
            window.location.href='". base_url()."index.php?page=dokter';
            </script>";
            }
    }
    else{
        echo "<script>
        alert('Maaf parameter anda tidak valid');
        window.location.href='". base_url()."index.php?page=dokter';
        </script>";
    
    }
?>