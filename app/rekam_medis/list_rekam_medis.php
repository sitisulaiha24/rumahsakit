
        <div class="card">
            <div class="card-header">
            Data rekam medis
        </div>
        <div class="card-body"> 
        
<a class="btn btn-primary btn-sm" href="<?php echo base_url() . 'index.php?page=rekam_medis&act=input';?>">
    <i class="fa-solid fa-circle-plus"></i> Tambah Data
</a>
    <?php
    $query = $db->query("SELECT * FROM rekam_medis");
    ?>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>No</th>
            <th>Id Rekam Medis</th>
            <th>Tanggal</th>
            <th>Keluhan</th>
            <th>Pemeriksaan</th>
            <th>Pengobatan</th>
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
                    <td><?php echo $row['id_rekam_medis'];?></td>
                    <td><?php echo $row['tanggal'];?></td>
                    <td><?php echo $row['keluhan'];?></td>
                    <td><?php echo $row['pemeriksaan'];?></td>
                    <td><?php echo $row['pengobatan'];?></td>
                    <td><a class="btn btn-outline-success btn-sm" href="<?php echo base_url(); ?>index.php?page=rekam_medis&act=edit&id_rekam_medis=<?php echo $row['id_rekam_medis']; ?>"><i class="fa-regular fa-pen-to-square"></i></a> 
                        <a class="btn btn-outline-danger btn-sm" href="<?php echo base_url(); ?>index.php?page=rekam_medis&act=hapus&id_rekam_medis=<?php echo $row['id_rekam_medis']; ?>"><i class="fa-solid fa-trash-can"></i></a>
                </tr>
                <?php
            }  
            ?>
        </tbody>
        </table>
    </div>
</div>
