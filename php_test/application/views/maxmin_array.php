<!DOCTYPE html>
<html lang="en">
<head>
	<title>Minmax Array</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
 
	<div class="container mt-3">
 
		<div class="container mt-5 text-center">
			<h1>Mencari nilai minimal dan maksimal</h1>
			<div class="card mt-5">
				<div class="card-body mx-auto">
					<form class="form-inline" method="GET" action="">

                        <label for="array">Masukkan nilai array (pisahkan dengan koma):</label><br>
						<input type="text" name="array" class="form-control mr-2 mt-2 mb-2" required>
                        
						<button name="submit" type="submit" class="btn btn-primary mt-2">Get Minmax</button>
					</form>
				</div>

                <?php 
                	if (isset($_GET['submit'])) {
                    function nilaiMax($array)  
                    { 
                    $n = count($array);  
                    $max = $array[0]; 
                    for ($i = 1; $i < $n; $i++)  
                        if ($max < $array[$i]) 
                            $max = $array[$i]; 
                        return $max;        
                    } 
                    
                    function nilaiMin($array)  
                    { 
                    $n = count($array);  
                    $min = $array[0]; 
                    for ($i = 1; $i < $n; $i++)  
                        if ($min > $array[$i]) 
                            $min = $array[$i]; 
                        return $min;        
                    } 

                   
                        $input = $_GET['array'];
                        $array = explode(',', $input);
                        $array = array_map('trim', $array); // Menghilangkan spasi di sekitar elemen array
                        $array = array_map('floatval', $array); // Mengonversi elemen menjadi angka float atau integer

                        echo "Nilai Maksimum : " . nilaiMax($array) . "<br>"; 
                        echo "Nilai Minimum : " . nilaiMin($array) . "<br>";
                        
                }
                    
                ?> 

			</div>
		</div>
	</div>
</body>
</html>

