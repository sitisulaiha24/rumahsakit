<?php

$act = isset($_GET['act']) ? $_GET['act'] : false;
$kode = isset($_GET['id_dokter']) ? $_GET['id_dokter'] : false;

if($act == 'edit'){
    $url = base_url() . "index.php?page=dokter&act=update";
    if($kode){
    $query = $db->query("SELECT * FROM dokter WHERE id_dokter ='$kode'");
    $row = $query->fetch_array();
}else{
    echo "<script>
    alert('Parameter id dokter tidak valid');
    window.location.href= '".base_url() . "index.php?page=dokter';
    </script>";
    }
}
else{
    $url = base_url() . "index.php?page=dokter&act=save";
}
?>
        <div class="card">
        <div class="card-header">
            Input Data Dokter
        </div>
        <div class="card-body">
        <form action="<?php echo $url; ?>" method="post">
    <input type="hidden" name="id_dokter_old" id="id_dokter_old" value="<?php echo isset($row) ? $row['id_dokter'] : ''; ?>"> 
    <div class="mb-3">
            <label for="id_dokter">Id Dokter</label>
            <input type="text" class="form_control" name="id_dokter" id="id_dokter" value="<?php echo isset($row) ? $row['id_dokter'] : '';?>">
        </div>
    <div class="mb-3">
            <label for="nama_dokter">Nama dokter</label>
            <input type="text" name="nama_dokter" id="nama_dokter" value="<?php echo isset($row) ? $row['nama_dokter'] : '';?>">
        </div> 
        <div class="mb-3">
            <label for="jenis_kelamin" >Jenis kelamin</label>
            <input type="text" name="jenis_kelamin" id="kjenis_kelamin" value="<?php echo isset($row) ? $row['jenis_kelamin'] : '';?>">
        </div>
        <div class="mb-3">
            <label for="no_telp">No Telp</label>
            <input type="text" name="no_telp" id="no_telp" value="<?php echo isset($row) ? $row['no_telp'] : '';?>">
        </div>
        <div class="mb-3">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" id="alamat" value="<?php echo isset($row) ? $row['alamat'] : '';?>">
        </div>
        <div class="mb-3">
            <label for="diagnosis_penyakit">Diagnosis Penyakit</label>
            <input type="text" name="diagnosis_penyakit" id="diagnosis_penyakit" value="<?php echo isset($row) ? $row['diagnosis_penyakit'] : '';?>">
        </div>
        <div class="mb-3">
            <label for="meracik_obat">Meracik Obat</label>
            <input type="text" name="meracik_obat" id="meracik_obat" value="<?php echo isset($row) ? $row['meracik_obat'] : '';?>">
        </div>
        <div class="mb-3">
        <a class="btn btn-outline-danger btn-sm float-start" href="list_dokter.php">
    <i class="fa-solid fa-chevron-left"></i>
        Kembali
    </a>
    <button class="btn btn-outline-primary btn-sm float-end" type="submit">
            <i class="fa-regular fa-floppy-disk"></i>
            Simpan Data
        </button>
    </div>
    </form>
    </div>
    </div>