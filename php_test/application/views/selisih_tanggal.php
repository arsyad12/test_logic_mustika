<!DOCTYPE html>
<html lang="en">
<head>
	<title>Selisih Tanggal</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
 
	<div class="container mt-3">
 
		<div class="container mt-5 text-center">
			<h1>Menghitung Selisih Tanggal</h1>
			<div class="card mt-5">
				<div class="card-body mx-auto">
					<form class="form-inline" method="GET" action="">

						<label>Tanggal 1</label>
						<input type="date" name="tanggal_1" class="form-control mr-2 mt-3" required>

						<label class="mt-4">Tanggal 2</label>
						<input type="date" name="tanggal_2" class="form-control mr-2 mt-3" required>
						<br>
                        
						<button name="submit" type="submit" class="btn btn-primary">Hitung</button>
					</form>
				</div>
 
				<?php 
				if (isset($_GET['submit'])) {
					$tanggal_1 = date_create($_GET['tanggal_1']); 
					$tanggal_2 = date_create($_GET['tanggal_2']); 
					$diff = date_diff($tanggal_1, $tanggal_2); 
					$selisih = $diff->format('Selisih %R%a hari');
					echo $tanggal_1->format('Y-m-d')."<br>";					
					echo $tanggal_2->format('Y-m-d')."<br>";					
					echo $selisih;
				}
				?>
			</div>
		</div>
	</div>
</body>
</html>