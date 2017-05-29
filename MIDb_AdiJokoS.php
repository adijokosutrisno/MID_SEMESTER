<html>
<head>
<title>MID SEMESTER</title>
</head>
<body>
<center>
<div id="header"><h1>PENDAFTARAN PELANGGAN BARU</h1></div>
</center>
<?php
if(isset($_POST['send']))
{
	echo"Nama Lengkap		:".$_POST["nama"]."<br>";
	echo"Jenis Kelamin		:".$_POST["JK"]."<br>";
	echo"Email				:".$_POST["email"]."<br>";
	echo"Nama Negara		:".$_POST["negara"]."<br>";
	echo"Kota				:".$_POST["kota"]."<br>";
	echo"Alamat				:".$_POST["alamat"]."<br>";
	echo"Kode Post			:".$_POST["kode"]."<br>";
	echo"No. Telepon		:".$_POST["telepon"]."<br>";
	echo"No. Handphone		:".$_POST["HP"]."<br>";
	echo"No. Faksimili		:".$_POST["faks"]."<br>";
}
?>
</body>
</html> 