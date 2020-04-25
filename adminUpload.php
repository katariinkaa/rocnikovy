<?php
//db spojenie
require 'config.php';

//inicializácia správ na errory
$msg = "";


if (isset($_POST['upload'])) {
	// dostaneme nazov obrazku
	$image = $_FILES['image']['name'];
	// dostaneme text
	$image_text = mysqli_real_escape_string($connect, $_POST['image_text']);
	$credits = mysqli_real_escape_string($connect, $_POST['credits']);
	$image_title = mysqli_real_escape_string($connect, $_POST['image_title']);
	$brand = mysqli_real_escape_string($connect, $_POST['brand']);
	$category = mysqli_real_escape_string($connect, $_POST['category']);
	$size = mysqli_real_escape_string($connect, $_POST['size']);
	$sex = mysqli_real_escape_string($connect, $_POST['sex']);
	$user_id = mysqli_real_escape_string($connect, $_POST['user_id']);

	// ukladanie do adresara images
	$target = "images/" . basename($image);

	$sql = "INSERT INTO items (image, image_title, image_text, credits, brand, category, size, sex, user_id, order_status)
             VALUES ('$image', '$image_title', '$image_text', '$credits', '$brand', '$category', '$size', '$sex', '$user_id', '1')";
	//query
	mysqli_query($connect, $sql);

	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
		$msg = "Image uploaded successfully";
	} else {
		$msg = "Failed to upload image";
	}
}
$result = mysqli_query($connect, "SELECT * FROM items");
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title>Image Upload</title>

	<!-- reset -->
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<!-- css -->
	<link rel="stylesheet" type="text/css" href="css/adminUpdateItem.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- písmo -->
	<link href="https://fonts.googleapis.com/css?family=Major+Mono+Display" rel="stylesheet">
	<!-- font-awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	<style type="text/css">
		/* #content {
			width: 50%;
			margin: 20px auto;
			border: 1px solid #cbcbcb;
		}

		form {
			width: 50%;
			margin: 20px auto;
		}

		form div {
			margin-top: 5px;
		}

		#img_div {
			width: 80%;
			padding: 5px;
			margin: 15px auto;
			border: 1px solid #cbcbcb;
		}

		#img_div:after {
			content: "";
			display: block;
			clear: both;
		}

		img {
			float: left;
			margin: 5px;
			width: 300px;
			height: 140px;
		} */

		.custom-file-label::after {
			content: "bRoWse" !important;
			background-color: #ffcc00 !important;
		}

		form textarea:focus {
			box-shadow: 0 0 0 0.2rem rgba(255, 204, 0, .7) !important;
			border-color: #ffcc00 !important;
		}

		.custom-select:focus {
			box-shadow: 0 0 0 0.2rem rgba(255, 204, 0, .7) !important;
			border-color: #ffcc00 !important;
		}

		.f {
			display: none !important;
		}
	</style>
</head>

<body>

	<!-- Aside 
	<aside class="font">
		<div class="container col-md-7 mb-5">
			<div class="row">
				<div class="my-5">
					<h1>updAte iteMs dAta</h1>
				</div>
			</div>
			<div class="row">
				<p class="pb-5">
					lorem ipsum dolor sit amet consectetur
					adipisicing elit. Ab sapiente excepturi
					tempora, temporibus esse repellend.
				</p>
			</div>
		</div>
	</aside> -->

	<!-- Form -->
	<div id="content" class="container col-md-7 pt-5">

		<form method="POST" action="adminUpload.php" enctype="multipart/form-data">

			<input type="hidden" name="size" value="1000000" class="form-control">

			<!-- Výber obrázka -->
			<div class="input-group mb-3 font">
				<div class="custom-file">
					<input type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" name="image">
					<label class="custom-file-label" for="inputGroupFile04">cHoose file</label>
				</div>
			</div>

			<!-- <div class="form-group">
				<input type="file" name="image" class="form-control">
			</div> -->

			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="" class="font">image title</label>
					<input type="text" name="image_title" class="form-control">
				</div>

				<div class="form-group col-md-6">
					<label for="" class="font">bRAnd</label>
					<input type="text" name="brand" class="form-control">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-4">
					<label for="" class="font">cRedits</label>
					<input type="text" name="credits" class="form-control">
				</div>

				<div class="form-group col-md-4">
					<label for="" class="font">size</label>

					<select id="order_status" name="size" class="custom-select">

						<option value="S">S</option>
						<option value="M">M</option>
						<option value="Xl">XL</option>

					</select>
				</div>
				<div class="form-group col-md-4">
					<label for="" class="font">sex</label>
					<select id="order_status" name="sex" class="custom-select font">

						<option value="Muz">Man</option>
						<option value="Zena">Woman</option>

					</select>
				</div>
			</div>

			<div class="form-group">
				<label for="" class="font">cAteGoRy</label>
				<input type="text" name="category" class="form-control">
			</div>

			<div class="form-group">
				<label for="" class="font">useR id</label>
				<input type="text" name="user_id" class="form-control">
			</div>

			<div class="form-group mt-3">
				<label for="" class="font">teXt</label>
				<textarea id="text" cols="40" rows="4" name="image_text" class="form-control" placeholder="Say something about this image"></textarea>
			</div>

			<button type="submit" name="upload" class="btn py-3 mb-3 col-md-2 font">post</button>

		</form>
	</div>

	<!-- Link Menu -->
	<?php require_once("pcs/link_menu/linkMenu.php") ?>

	<!-- NAV -->
	<?php require_once 'pcs/nav/nav.php' ?>

	<!-- jQuery -->
	<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
	<script type="text/javascript" src="js/js.js"></script>
</body>

</html>