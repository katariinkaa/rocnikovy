<?php
//db spojenie
require 'config.php';
session_start();

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

    $selected_val_size = $_POST['size'];
    $selected_val_sex = $_POST['sex'];
    $selected_val_brand = $_POST['brand'];
    $selected_val_category = $_POST['category'];

    $sql = "INSERT INTO items (image, image_title, image_text, credits, brand, category, size, sex, user_id, order_status)
             VALUES ('$image', '$image_title', '$image_text', '$credits', '$selected_val_brand', '$selected_val_category', '$selected_val_size', '$selected_val_sex', '$user_id', '1')";

    $result = mysqli_query($connect, "SELECT * FROM users WHERE user_id='" . $_POST['user_id'] . "'");
    $row = mysqli_fetch_array($result);

    //query
    mysqli_query($connect, $sql);
    $tokens = ($_POST['credits']+$row['user_tokens']);


    $sql1 = "UPDATE users SET user_tokens = '$tokens' 
    WHERE user_id = '".$_POST['user_id']."' ";
    mysqli_query($connect, $sql1);
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
                <input type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" name="image" required>
                <label class="custom-file-label" for="inputGroupFile04"> choose file ...</label>
            </div>
        </div>

        <!-- <div class="form-group">
            <input type="file" name="image" class="form-control">
        </div> -->

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="" class="font">image title</label>
                <input type="text" name="image_title" class="form-control" required>
            </div>

            <div class="form-group col-md-6">
                <label for="" class="font">brand</label>

                <select id="brand" name="brand" class="custom-select" required>

                    <option value="adidas">Adidas</option>
                    <option value="puma">Puma</option>
                    <option value="lenovo">Lenovo</option>
                    <option value="parkside">Parkside</option>
                    <option value="neznama">Neznáma</option>

                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="" class="font">cRedits</label>
                <input type="text" name="credits" class="form-control" required>
            </div>

            <div class="form-group col-md-4">
                <label for="" class="font">size</label>

                <select id="size" name="size" class="custom-select" required>

                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="Xl">XL</option>
                    <option value="---">---</option>

                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="" class="font">sex</label>
                <select id="sex" name="sex" class="custom-select font" required>

                    <option value="Muz">Man</option>
                    <option value="Zena">Woman</option>
                    <option value="ziadne">---</option>

                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="" class="font">category</label>

            <select id="category" name="category" class="custom-select" required>

                <option value="oblecenie">Clothes</option>
                <option value="domacnost">Home</option>
                <option value="elektronika">Technology</option>

            </select>
        </div>

        <div class="form-group">
            <label for="" class="font">useR id</label>
            <input type="text" name="user_id" class="form-control" required>
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