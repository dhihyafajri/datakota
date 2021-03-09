<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<style>
    @media print{
        .btn,
        th:nth-child(9),
        td:nth-child(9)
        {
            display:none;
        }
    }
</style>
<title>Data Kota</title>
</head>
<body>
<div class="card">
<div class="card-header">
<h2 class="text-muted text-center">Data Kota</h2>
<br>
    <div class="btn-toolbar justify-content-center">
        <div class="btn-group">
        <button type="button" class="btn btn-success btn-lg rounded-pill" onclick="window.location='../Datakota/formtambah'">&nbsp  Entry &nbsp </button>
        &nbsp&nbsp<button type="button" class="btn btn-outline-secondary fa fa-print btn-lg rounded-pill" onclick="window.print()">&nbsp Print &nbsp </button>
        &nbsp&nbsp<button class="btn btn-primary  btn-lg rounded-pill" type="button" onclick="window.location='<?php echo site_url('Datakota/chart/')?>'">&nbsp &nbsp Info &nbsp &nbsp </button>
        </div>
    </div>
    <br>
</div>
<div class="card-body">
<table class="table">
 <thead class="thead-light">
    <tr>
        <th>ID Kota</th>
        <th>Nama Kota</th>
        <th>Nama Pemimpin</th>
        <th>Tanggal Berdiri</th>
        <th>Jumlah Penduduk</th>
        <th>Luas Wilayah</th>
        <th>Jenis Kota</th>
        <th>Keunggulan</th>
        <th colspan="2"  style="text-align:center;">Action</th>
    </tr>
 </thead>
 <tbody>
    <?php 
        foreach ($tampildata as $row):
    ?>
    <tr>
        <td><?= $row->idkota  ?></td>
        <td><?= $row->namakota  ?></td>
        <td><?= $row->namapemimpin  ?></td>
        <td><?= $row->tglberdiri  ?></td>
        <td><?= $row->jmlpenduduk  ?></td>
        <td><?= $row->luaswilayah  ?></td>
        <td><?= $row->jeniskota  ?></td>
        <td><?= $row->keunggulan  ?></td>
        <td>
            <button class="btn btn-danger rounded-pill" type="button" onclick="hapus('<?= $row->idkota ?>')">Delete</button>
            <button class="btn btn-primary rounded-pill" type="button" onclick="window.location='<?php echo site_url('Datakota/formedit/'.$row->idkota)?>'">&nbsp Edit &nbsp</button>
        </td>
    </tr>
    <?php 
        endforeach;
    ?>
 </tbody>
</table>
</div>
</div>
<script>
    function hapus(idkota){
        pesan = confirm('Anda Yakin Hapus Data Kota?');

        if (pesan){
            window.location.href=("<?= site_url('Datakota/hapus/') ?>") +idkota;
        }else return false;
    }
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>