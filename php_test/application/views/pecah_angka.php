<!DOCTYPE html>
<html lang="en">
<head>
	<title>Memecah angka</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
 
	<div class="container mt-3">
 
		<div class="container mt-5 text-center">
			<h1>Memecah angka</h1>
			<div class="card mt-5">
				<div class="card-body mx-auto">
					<form class="form-inline" method="GET" action="">

						<label>Masukan angka</label>
						<input type="number" name="angka_awal" class="form-control mr-2 mt-2 mb-2" required>
                        
						<button name="submit" type="submit" class="btn btn-primary">Pecah angka</button>
					</form>
				</div>
 
				<?php 
				if (isset($_GET['submit'])) {

					$angka_awal = $_GET['angka_awal'];
					
					$panjang = strlen($angka_awal);


						for ($i = 0; $i < $panjang; $i++) {
							
							$digit = $angka_awal[$i];

							if ($digit != 0) {
								// Kalikan digit dengan 10 pangkat (panjang - i - 1)
								$nilai = $digit * pow(10, $panjang - $i - 1);
								echo $nilai . "<br>";
							}
						}

				}
				?>
			</div>
		</div>
	</div>
</body>
</html>





