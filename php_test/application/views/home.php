<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Coding Chalenge</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<!-- <script>
	function navigate(pageName) {
		window.location.href = pageName;
	}
</script> -->

<body>

    <div class="container text-center mt-4">

        <div>

            <div class="jumbotron mb-4">
                <h1 class="display-4 mb-4">Coding Test Chalenge</h1>
                <p class="lead">Silahkan Pilih Beberapa Menu dibawah berikut sesuai kebutuhan anda</p>
            </div>

		

            <div class="row">
                <div class="col-md-3 mb-3">
                    <a href="index.php/pecah_angka" class="card" style="text-decoration:none;">
					<img src="angka.jpg" class="card-img-top" alt="..." style="width: auto; height: 150px;">
                        <div class="card-body">
                            <p class="card-text">SIMPLE APP PECAH ANGKA</p>
                        </div>
                    </a>
                </div>

				<div class="col-md-3 mb-3">
                    <a href="index.php/maxmin_array" class="card" style="text-decoration:none;">
					<img src="minmax.jpg" class="card-img-top" alt="..." style="width: auto; height: 150px;">
                        <div class="card-body">
                            <p class="card-text">SIMPLE APP MAX MIN ANGKA</p>
                        </div>
                    </a>
                </div>

				<div class="col-md-3 mb-3">
                    <a href="index.php/combine_array" class="card" style="text-decoration:none;">
					<img src="combine.png" class="card-img-top" alt="..." style="width: auto; height: 150px;">
                        <div class="card-body">
                            <p class="card-text">SIMPLE APP COMBINE ARRAY</p>
                        </div>
                    </a>
                </div>
				
				<div class="col-md-3 mb-3">
                    <a href="index.php/selisih_tanggal" class="card" style="text-decoration:none;">
					<img src="tanggal.jpg" class="card-img-top" alt="..." style="width: auto; height: 150px;">
                        <div class="card-body">
                            <p class="card-text">SIMPLE APP SELISIH TANGGAL</p>
                        </div>
                    </a>
                </div>

            </div>

        </div>
    </div>

</body>

</html>