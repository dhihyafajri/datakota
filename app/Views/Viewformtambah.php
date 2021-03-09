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
<title>Form Tambah Data Kota</title>
</head>
<body>
<br/>
<h2 class="text-muted text-center">Tambah Data Kota</h2>
&nbsp &nbsp <button type="button" class="btn btn-primary btn-lg rounded-pill" onclick="window.location='../Datakota/index'">Kembali</button>
<br/>
<br/>
<?= form_open('Datakota/simpandata') ?>
<form action="<?php echo base_url().'Datakota/insert_data' ?>" method="post">
<table class="table">
<tr>
    <td>
        Nama Kota:
    </td>
    <td>
        <input class="form-control" type="text" name="kota" maxlength="15" required>
    </td>
</tr>
<tr>
    <td>
        Nama Pemimpin:
    </td>
    <td>
        <input class="form-control" type="text" name="pemimpin" maxlength="20" required>
    </td>
</tr>
<tr>
    <td>
        Tanggal Berdiri:
    </td>
    <td>
        <input class="form-control" type="date" name="tanggal" required>
    </td>
</tr>
<tr>
    <td>
        Jumlah Penduduk:
    </td>
    <td>
        <input class="form-control" type="number" min=0  name="penduduk" maxlength="10" required>
    </td>
</tr>
<tr>
    <td>
        Luas Wilayah:
    </td>
    <td>
        <input class="form-control" type="number" step=any min=0 name="wilayah" maxlength="10" required>
    </td>
</tr>
<tr>
    <td>
        Jenis Kota:
    </td>
    <td>
        <label class="radio-inline"> <input  type="radio" name="jenis" value="Istimewa" required>&nbsp Istimewa </label>&nbsp &nbsp
        <label class="radio-inline"> <input  type="radio" name="jenis" value="Otonom">&nbsp Otonom </label>&nbsp &nbsp
        <label class="radio-inline"> <input  type="radio" name="jenis" value="Percontohan">&nbsp Percontohan </label>
    </td>
</tr>
<tr>
    <td>
        Keunggulan:
    </td>
    <td>
        <input class="form-control" type="text" name="keunggulan" size="50" required>
    </td>
</tr>
<tr>
    <td>
    </td>
    <td>
        <button class="form-control btn-success third" type="submit" value="Simpan Data" name="sub">Simpan Data</button>
        
        
    </td>
</tr>
</table>
</form>
<?= form_close(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>