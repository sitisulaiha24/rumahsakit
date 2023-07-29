<?php
$act = isset($_GET['act']) ? $_GET['act'] : false;
$kode = isset($_GET['kode_obat']) ? $_GET['kode_obat'] : false;

if($act == 'edit'){
    $url =  base_url() . "index.php?page=obat&act=update";
    if($kode){
    $query = $db->query("SELECT * FROM obat WHERE kode_obat ='$kode'");
    $row = $query->fetch_array();
}else{
    echo "<script>
    alert('Parameter kode obat tidak valid');
    window.location.href='".base_url() . "index.php?page=obat';
    </script>";
    }
}
else{
    $url =  base_url() . "index.php?page=obat&act=save";
}
?>
        <div class="card">
        <div class="card-header">
            Data Obat
        </div>
        <div class="card-body">
        <form action="<?php echo $url; ?>" method="post">
    <input type="hidden" name="kode_obat_old" id="kode_obat_old" value="<?php echo isset($row) ? $row['kode_obat'] : ''; ?>"> 
    <div class="mb-3">
            <label for="kode_obat">Kode Obat Obat</label>
            <input type="text" class="form_control" name="kode_obat" id="kode_obat" value="<?php echo isset($row) ? $row['kode_obat'] : '';?>">
        </div>
        <div class="mb-3">
            <label for="nama_obat">Nama Obat</label>
            <input type="text" class="form_control" name="nama_obat" id="nama_obat" value="<?php echo isset($row) ? $row['nama_obat'] : '';?>">
        </div> 
        <div class="mb-3">
            <label for="jenis_obat" >Jenis Obat</label>
            <input type="text" class="form_control" name="jenis_obat" id="jenis_obat" value="<?php echo isset($row) ? $row['jenis_obat'] : '';?>">
        </div>
        <div class="mb-3">
            <label for="tahun_produksi">Tahun Produksi</label>
            <input type="text" class="form_control" name="tahun_produksi" id="tahun_produksi" value="<?php echo isset($row) ? $row['tahun_produksi'] : '';?>">
        </div>
        <div class="mb-3">
            <label for="masa_berlaku">Masa Berlaku</label>
            <input type="text" class="form_control" name="masa_berlaku" id="masa_berlaku" value="<?php echo isset($row) ? $row['masa_berlaku'] : '';?>">
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