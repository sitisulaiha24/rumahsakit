
        <div class="card">
            <div class="card-header">
            Data obat
        </div>
        <div class="card-body"> 
        
<a class="btn btn-primary btn-sm" href="<?php echo base_url() . 'index.php?page=obat&act=input';?>">
    <i class="fa-solid fa-circle-plus"></i> Tambah Data
</a>
    <?php
    $query = $db->query("SELECT * FROM obat");
    ?>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>No</th>
            <th>kode obat</th>
            <th>Nama obat</th>
            <th>Jenis Obat</th>
            <th>Tahun Produksi</th>
            <th>Masa Berlaku</th>
            <th>Act</th>
        </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            while($row = $query->fetch_array()){
                ?>
                <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $row['kode_obat'];?></td>
                    <td><?php echo $row['nama_obat'];?></td>
                    <td><?php echo $row['jenis_obat'];?></td>
                    <td><?php echo $row['tahun_produksi'];?></td>
                    <td><?php echo $row['masa_berlaku'];?></td>
                    <td><a class="btn btn-outline-success btn-sm" href="<?php echo base_url(); ?>index.php?page=obat&act=edit&kode_obat=<?php echo $row['kode_obat']; ?>"><i class="fa-regular fa-pen-to-square"></i></a> 
                        <a class="btn btn-outline-danger btn-sm" href="<?php echo base_url(); ?>index.php?page=obat&act=hapus&kode_obat?<?php echo $row['kode_obat']; ?>"><i class="fa-solid fa-trash-can"></i></a>
                </tr>
                <?php
            }  
            ?>
        </tbody>
        </table>
    </div>
</div>
