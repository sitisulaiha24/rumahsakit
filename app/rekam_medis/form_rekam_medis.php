<?php

$act = isset($_GET['act']) ? $_GET['act'] : false;
$kode = isset($_GET['id_rekam_medis']) ? $_GET['id_rekam_medis'] : false;

if($act == 'edit'){
    $url =  base_url() . "index.php?page=rekam_medis&act=update";
    if($kode){
    $query = $db->query("SELECT * FROM rekam_medis WHERE id_rekam_medis ='$kode'");
    $row = $query->fetch_array();
}else{
    echo "<script>
    alert('Parameter id rekam_medis tidak valid');
    window.location.href='".base_url() . "index.php?page=rekam_medis';
    </script>";
    }
}
else{
    $url =  base_url() . "index.php?page=rekam_medis&act=save";
}
?>
        <div class="card">
        <div class="card-header">
            Data Rekam Medis
        </div>
        <div class="card-body">
        <form action="<?php echo $url; ?>" method="post">
    <input type="hidden" name="id_rekam_medis_old" id="id_rekam_medis_old" value="<?php echo isset($row) ? $row['id_rekam_medis'] : ''; ?>"> 
    <div class="mb-3">
            <label for="id_rekam_medis">Id rekam_medis</label>
            <input type="text" class="form_control" name="id_rekam_medis" id="id_rekam_medis" value="<?php echo isset($row) ? $row['id_rekam_medis'] : '';?>">
        </div>
        <div class="mb-3">
            <label for="tanggal">Tanggal</label>
            <input type="text" class="form_control" name="tanggal" id="tanggal" value="<?php echo isset($row) ? $row['tanggal'] : '';?>">
        </div> 
        <div class="mb-3">
            <label for="keluhan" >Keluhan</label>
            <input type="text" class="form_control" name="keluhan" id="keluhan" value="<?php echo isset($row) ? $row['keluhan'] : '';?>">
        </div>
        <div class="mb-3">
            <label for="pemeriksaan">Pemeriksaan</label>
            <input type="text" class="form_control" name="pemeriksaan" id="pemeriksaan" value="<?php echo isset($row) ? $row['pemeriksaan'] : '';?>">
        </div>
        <div class="mb-3">
            <label for="pengobatan">Pengobatan</label>
            <input type="text" class="form_control" name="pengobatan" id="pengobatan" value="<?php echo isset($row) ? $row['pengobatan'] : '';?>">
        </div>
        <div class="mb-3">
        <a class="btn btn-outline-danger btn-sm float-start" href="javascript:history.back()">
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