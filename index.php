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
<form method="post" action="proses.php">
  <div class="form-group">
    <label for="f(x)">Batas f(x)</label>
    <input type="text" class="form-control" name="f(x)" id="f(x)" required>
  </div>
  <div class="form-group">
    <label for="awal">Batas Awal</label>
    <input type="text" class="form-control" name="awal" id="awal" required>
  </div>
  <div class="form-group">
    <label for="akhir">Batas Akhir</label>
    <input type="text" class="form-control" name="akhir" id="akhir" required>
  </div>
  <div class="form-group">
    <label for="error">Error</label>
    <input type="text" class="form-control" name="error" id="error" required>
  </div>
  <button type="submit" class="btn btn-primary">Proses</button>
</form>
</div>
<center>
	<hr size="2" color="#0000CC">
Kelompok 1 | Ristianingsih - Maknum Munib - Putri Damayani</center><br>
</body>
</html>