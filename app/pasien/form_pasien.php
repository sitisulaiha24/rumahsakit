<?php
$act = isset($_GET['act']) ? $_GET['act'] : false;
$kode = isset($_GET['id_pasien']) ? $_GET['id_pasien'] : false;

if($act == 'edit'){
    $url = base_url() . "index.php?page=pasien&act=update";
    if($kode){
    $query = $db->query("SELECT * FROM pasien WHERE id_pasien ='$kode'");
    $row = $query->fetch_array();
}else{
    echo "<script>
    alert('Parameter id pasien tidak valid');
    window.location.href='".base_url() . "index.php?page=pasien';
    </script>";
    }
}
else{
    $url = base_url() . "index.php?page=pasien&act=save";
}
?>

        <div class="card">
        <div class="card-header">
            Data Pasien
        </div>
        <div class="card-body">
        <form action="<?php echo $url; ?>" method="post">
    <input type="hidden" name="id_pasien_old" id="id_pasien_old" value="<?php echo isset($row) ? $row['id_pasien'] : ''; ?>"> 
    <div class="mb-3">
            <label for="id_pasien">Id Pasien</label>
            <input type="text" class="form_control" name="id_pasien" id="id_pasien" value="<?php echo isset($row) ? $row['id_pasien'] : '';?>">
        </div>
        <div class="mb-3">
            <label for="nama_pasien">Nama Pasien</label>
            <input type="text" class="form_control" name="nama_pasien" id="nama_pasien" value="<?php echo isset($row) ? $row['nama_pasien'] : '';?>">
        </div> 
        <div class="mb-3">
            <label for="jenis_kelamin" >Jenis kelamin</label>
            <input type="text" class="form_control" name="jenis_kelamin" id="jenis_kelamin" value="<?php echo isset($row) ? $row['jenis_kelamin'] : '';?>">
        </div>
        <div class="mb-3">
            <label for="no_telp">No Telp</label>
            <input type="text" class="form_control" name="no_telp" id="no_telp" value="<?php echo isset($row) ? $row['no_telp'] : '';?>">
        </div>
        <div class="mb-3">
            <label for="alamat">Alamat</label>
            <input type="text" class="form_control" name="alamat" id="alamat" value="<?php echo isset($row) ? $row['alamat'] : '';?>">
        </div>
        <div class="mb-3">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="text" class="form_control" name="tanggal_lahir" id="tanggal_lahir" value="<?php echo isset($row) ? $row['tanggal_lahir'] : '';?>">
        </div>
        <div class="mb-3">
        <a class="btn btn-outline-danger btn-sm float-start" href="list_pasien.php">
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