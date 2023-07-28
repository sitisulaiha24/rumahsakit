
        <div class="card">
            <div class="card-header">
            Data pasien
        </div>
        <div class="card-body"> 
        
<a class="btn btn-primary btn-sm" href="<?php echo base_url() . 'index.php?page=pasien&act=input';?>">
    <i class="fa-solid fa-circle-plus"></i> Tambah Data
</a>
    <?php
    $query = $db->query("SELECT * FROM pasien");
    ?>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>No</th>
            <th>Id pasien</th>
            <th>Nama pasien</th>
            <th>Jenis kelamin</th>
            <th>No Telp</th>
            <th>Alamat</th>
            <th>Tanggal Lahir</th>
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
                    <td><?php echo $row['id_pasien'];?></td>
                    <td><?php echo $row['nama_pasien'];?></td>
                    <td><?php echo $row['jenis_kelamin'];?></td>
                    <td><?php echo $row['no_telp'];?></td>
                    <td><?php echo $row['alamat'];?></td>
                    <td><?php echo $row['tanggal_lahir'];?></td>
                    <td><a class="btn btn-outline-success btn-sm" href="<?php echo base_url(); ?>index.php?page=pasien&act=edit&id_pasien=<?php echo $row['id_pasien']; ?>"><i class="fa-regular fa-pen-to-square"></i></a> 
                        <a class="btn btn-outline-danger btn-sm" href="<?php echo base_url(); ?>index.php?page=pasien&act=hapus&id_pasien=<?php echo $row['id_pasien']; ?>"><i class="fa-solid fa-trash-can"></i></a>
                </tr>
                <?php
            }  
            ?>
        </tbody>
        </table>
    </div>
</div>
