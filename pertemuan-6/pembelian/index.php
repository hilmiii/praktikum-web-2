<!-- 
Nama : Rizky Hilmiawan Anggoro
Rombel : TI-10
NIM : 0110222140 
-->
<?php 
    require_once '../dbkoneksi.php';
    $sql = "SELECT * FROM pembelian";
    $rs = $dbh->query($sql);
?>

<a class="btn btn-success" href="create.php" role="button">Tambah Pembelian</a>
<table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
    <thead>
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Nomor</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
                $nomor  =1 ;
                foreach($rs as $row){
                ?>
        <tr>
            <td><?=$nomor?></td>
            <td><?=$row['tanggal']?></td>
            <td><?=$row['nomor']?></td>
            <td><?=$row['jumlah']?></td>
            <td><?=$row['harga']?></td>
            <td>
                <a class="btn btn-primary" href="edit.php?idedit=<?=$row['id']?>">Edit</a>
                <a class="btn btn-primary" href="delete.php?iddel=<?=$row['id']?>"
                    onclick="if(!confirm('Anda Yakin Hapus Data Produk <?=$row['nomor']?>?')) {return false}">Delete</a>
            </td>
        </tr>
        <?php 
                $nomor++;   
                } 
                ?>
    </tbody>
</table>