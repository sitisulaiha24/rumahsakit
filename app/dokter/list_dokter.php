
        <div class="card">
            <div class="card-header">
            Data Dokter
        </div>
        <div class="card-body"> 
        
<a class="btn btn-primary btn-sm" href="<?php echo base_url() . 'index.php?page=dokter&act=input';?>">
    <i class="fa-solid fa-circle-plus"></i> Tambah Data
</a>
    <?php
    $query = $db->query("SELECT * FROM dokter");
    ?>
    <table class="table table-striped">

        <thead>
        <tr>
            <th>No</th>
            <th>Id Dokter</th>
            <th>Nama Dokter</th>
            <th>Jenis kelamin</th>
            <th>No Telp</th>
            <th>Alamat</th>
            <th>Diagnosis Penyakit</th>
            <th>Meracik Obat</th>
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
                    <td><?php echo $row['id_dokter'];?></td>
                    <td><?php echo $row['nama_dokter'];?></td>
                    <td><?php echo $row['jenis_kelamin'];?></td>
                    <td><?php echo $row['no_telp'];?></td>
                    <td><?php echo $row['alamat'];?></td>
                    <td><?php echo $row['diagnosis_penyakit'];?></td>
                    <td><?php echo $row['meracik_obat'];?></td>
                    <td><a class="btn btn-outline-success btn-sm" href="<?php echo base_url(); ?>index.php?page=dokter&act=edit&id_dokter=<?php echo $row['id_dokter']; ?>"><i class="fa-regular fa-pen-to-square"></i></a> 
                        <a class="btn btn-outline-danger btn-sm" href="<?php echo base_url(); ?>index.php?page=dokter&act=hapus&id_dokter=<?php echo $row['id_dokter']; ?>"><i class="fa-solid fa-trash-can"></i></a>
                </tr>
                <?php
            }  
            ?>
        </tbody>
        </table>
    </div>
</div>
