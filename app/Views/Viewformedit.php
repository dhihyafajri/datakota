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

<title>Form Edit Data Kota</title>
</head>
<body>
<br/>
<h2 class="text-muted text-center">Edit Data Kota</h2>
&nbsp &nbsp <button type="button" class="btn btn-primary btn-lg rounded-pill" onclick="window.location='../index'">Kembali</button>
<br/>
<br/>
<?= form_open('Datakota/updatedata') ?>
<table class="table">
<tr>
    <td>
        ID Kota:
    </td>
    <td>
        <input class="form-control" type="text" name="idkota" value="<?= $idkota;?>" maxlength="4" readonly>
    </td>
</tr>
<tr>
    <td>
        Nama Kota:
    </td>
    <td>
        <input class="form-control" type="text" name="kota" maxlength="15" value="<?= $kota;?>">
    </td>
</tr>
<tr>
    <td>
        Nama Pemimpin:
    </td>
    <td>
        <input class="form-control" type="text" name="pemimpin" maxlength="20" value="<?= $pemimpin;?>">
    </td>
</tr>
<tr>
    <td>
        Tanggal Berdiri:
    </td>
    <td>
        <input class="form-control" type="date" name="tanggal" value="<?= $tanggal;?>">
    </td>
</tr>
<tr>
    <td>
        Jumlah Penduduk:
    </td>
    <td>
        <input class="form-control" type="number" min=0  name="penduduk" maxlength="10" value="<?= $penduduk;?>">
    </td>
</tr>
<tr>
    <td>
        Luas Wilayah:
    </td>
    <td>
        <input class="form-control" type="number" step=any min=0 name="wilayah" maxlength="10" value="<?= $wilayah;?>">
    </td>
</tr>
<tr>
    <td>
        Jenis Kota:
    </td>
    <td>
        <label class="radio-inline"><input   type="radio" name="jenis" <?=$jenis=="Istimewa" ? "checked" : ""?> value="Istimewa">&nbsp Istimewa</label>&nbsp &nbsp
        <label class="radio-inline"><input  type="radio" name="jenis" <?=$jenis=="Otonom" ? "checked" : ""?> value="Otonom">&nbsp Otonom</label>&nbsp &nbsp
        <label class="radio-inline"><input  type="radio" name="jenis" <?=$jenis=="Percontohan" ? "checked" : ""?> value="Percontohan">&nbsp Percontohan</label>
    </td>
</tr>
<tr>
    <td>
        Keunggulan:
    </td>
    <td>
        <input class="form-control" type="text" name="keunggulan" size="50" value="<?= $keunggulan;?>">
    </td>
</tr>
<tr>
    <td>
    </td>
    <td>
        <input class="form-control btn-success" type="submit" value="Update Data">
    </td>
</tr>
</table>
<?= form_close(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>