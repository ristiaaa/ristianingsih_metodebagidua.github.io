<!DOCTYPE html>
<html>
<head>
	<title>Metode Bagi Dua (Bisection)</title>
	<link rel="stylesheet" href="bootstrap.min.css">
	<style>
		.footer {
		position: fixed;
		left: 0;
		bottom: 0;
		width: 100%;
		background-color: darkslategray;
		color: white;
		text-align: center;
		}
	</style>
</head>
<body>
<center><h3>METODE BAGI DUA (BISECTION)</h3>
Aplikasi perhitungan untuk menentukan akar persamaan dengan metode bagi dua (Bisection Method)</center><br>
<hr size="2" color="#0000CC">

<div class="container">
<center><a href="index.php" class="btn btn-danger">Kembali</a><br></center>

<?php
$f = $_POST['f(x)'];
$a = $_POST['awal'];
$b = $_POST['akhir'];
$error = $_POST['error'];

echo "Nilai Toleransi = <b>".$error."</b><br><br>";

function fungsi($f){
	// $hasil = ($x*$x*$x)+4*($x*$x)-11*$x-30;
	// return $hasil;
	return $f;
}

echo "<table class='table ' align='center'>
	<thead>
		<tr>
			<td>No</td>
			<td>A</td>
			<td>B</td>
			<td>C</td>
			<td>f(A)</td>
			<td>f(B)</td>
			<td>f(C)</td>
			<td>Selang A</td>
			<td>Selang B</td>
			<td>Lebar Selang</td>
			<td>Lanjut / Berhenti</td>
		</tr>
	</thead>";

$no = 1;
$lebarSelang = $error;
while (abs($lebarSelang) >= $error){
	$fungsiA = fungsi($a);
	$fungsiB = fungsi($b);
	// if ($fungsiA * $fungsiB < 0) {
		$c = ($a+$b)/2;
		$fungsiC = fungsi($c);
	// }

	echo "	<tbody><tr>
				<td>$no</td>
				<td>$a</td>
				<td>$b</td>
				<td>$c</td>
				<td>$fungsiA</td>
				<td>$fungsiB</td>
				<td>$fungsiC</td>";

	if ($fungsiC * $fungsiA < 0) {
		$b = $c;
	} else {
		$a = $c;
	}
	$lebarSelang = $b-$a;
	if ($lebarSelang > $error) {
		$iterasi = "Lanjut";
	} else {
		$iterasi = "Berhenti";
	}

	echo "		<td>$a</td>
				<td>$b</td>
				<td>$lebarSelang</td>
				<td>$iterasi</td>
			</tr></tbody>";
	$no++;
}
echo "</table>";
echo "<br>Maka Nilai hampiran akar = ".$fungsiC."<br>";
echo "Pada X = ".$c."<br>";
echo "Pada iterasi ke ".($no-1);
?>

</div>
<center>
	<hr size="2" color="#0000CC">
Kelompok 1 | Ristianingsih - Maknum Munib - Putri Damayani</center><br>

</body>
</html>