<html>
<head>
<title> Form Pendaftaran </title>
<link rel="stylesheet" type="text/css" href="latihan.css">
</head>
<body>
<h1><center> Form Pendaftaran </center></h1>
<center><div class="kotak_daftar">
<p class="tulisan_daftar"> Silahkan Isi Form Pendaftaran Berikut Ini </p>
<center>
<form action="input_daftar.php" name="beli" method="post">
	<table>
	<tr>
<td>
<label> ID </label></td>
<td>
<input type="text" name="id" class="form_daftar" placeholder="Masukkan ID Anda"/></td>
</tr>
<tr><td height="20px"></td></tr>
<tr>
<td>
<label> Username </label></td>
<td>
<input type="text" name="username" class="form_daftar" placeholder="Masukkan Username Anda"/></td>
</tr>
<tr><td height="20px"></td></tr>
<tr>
<td>
<label> Password </label></td>
<td>
<input type="password" name="password" class="form_daftar" placeholder="Masukkan Password Anda"></td>
</tr>
<tr><td height="20px"></td></tr>
<tr>
<td>
<label> Nomor Handphone </label></td>
<td>
<input type="text" name="nomor_hp" class="form_daftar" placeholder="Masukkan Nomor Anda"></td>
</tr>
<tr><td height="20px"></td></tr>
<tr>
<td>
<label> Jenis Kelamin </label></td>
<td>
<select name="jenis_kelamin" class="form_daftar1">
<option value="laki-laki"> Laki-Laki </option> 
<option value="perempuan"> Perempuan </option>
</select>
</td>
</tr>
</table>
<br/>
<br/>
<input type="submit" name="tbl" value="Register" class="tombol"/>
</center>

</center>
</form>
</div>