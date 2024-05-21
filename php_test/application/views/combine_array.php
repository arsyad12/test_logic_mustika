<!DOCTYPE html>
<html lang="en">
<head>
	<title>Combine Array</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
 
	<div class="container mt-3">
 
		<div class="container mt-5 text-center">
			<h1>Combine Array</h1>
			<div class="card mt-5">
				<div class="card-body mx-auto">
					<form class="form-inline" method="GET" action="">

                        <label for="array">masukan array 1 (pisahkan dengan koma)</label><br>
						<input type="text" name="array1" class="form-control mr-2 mt-2 mb-2" required>

                        <label for="array">masukan array 2 (pisahkan dengan koma)</label><br>
						<input type="text" name="array2" class="form-control mr-2 mt-2 mb-2" required>
                        
						<button name="submit" type="submit" class="btn btn-primary mt-2">Gabungkan array</button>
					</form>
				</div>

                <?php 
				if (isset($_GET['submit'])) {

					$array1 = $_GET['array1'];
					
					$array2 = $_GET['array2'];

                     // Memisahkan string menjadi array
                $array1 = explode(',', $array1);
                $array2 = explode(',', $array2);

                // Menghilangkan spasi di sekitar elemen array
                $array1 = array_map('trim', $array1);
                $array2 = array_map('trim', $array2);

                // Menggabungkan kedua array
                $combinedArray = array_merge($array1, $array2);
                $arraytostr = implode(', ' , $combinedArray) ;

                // Menampilkan hasil
                echo "<div class='mt-3'><h3>Hasil Penggabungan Array:</h3>";
                echo $arraytostr;

				}
				?>

			</div>
		</div>
	</div>
</body>
</html>

