<?php
include_once 'config.php';
include_once 'server.php';
error_reporting(E_ALL ^ E_NOTICE);
error_reporting(E_ERROR | E_PARSE);
$result = mysqli_query($connect, "SELECT * FROM items ");



if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['user_name']);
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>

    <!-- reset -->
    <link rel="stylesheet" type="text/css" href="../css/reset.css">
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="../css/ponuka.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- písmo -->
    <link href="https://fonts.googleapis.com/css?family=Major+Mono+Display" rel="stylesheet">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<body>

    <?php require_once "pcs/nav/nav.php" ?>

    <div class="container-fluid font">
        <div class="row py-3 pl-3 menu">
            <h1><a href="index.php">n<i>&</i>n</a></h1>

            <div class="kredit">
                <h1 class="h5 font">kReditov - <?php echo $_SESSION['user_tokens']; ?></h1>
            </div>
        </div>

        <div class="row">

            <!-- Filter -->

            <div class="container-fluid col-md-2 side">
                <div class="row my-5">
                    <div class="col-md-12">
                        <button class="btn my-3 font lupa" type="button" data-toggle="collapse" data-target="#multiCollapseExample5" aria-expanded="false" aria-controls="multiCollapseExample5">
                            <i class="fas fa-search"></i> Hladaj
                        </button>

                        <div class="collapse" id="multiCollapseExample5">
                            <input type="text" class="search" placeholder="Hladaj">
                        </div>
                    </div>
                </div>
                <form action="#" method="post">
                    <!-- Cena -->
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <button class="btn font" type="button" data-toggle="collapse" data-target="#multiCollapseExample4" aria-expanded="false" aria-controls="multiCollapseExample4">
                                <i class="fas fa-dollar-sign"></i> cena <i class="fas fa-chevron-down"></i>
                            </button>

                            <div class="collapse" id="multiCollapseExample4">
                                <div class="card card-body">
                                    <div class="slidecontainer">
                                        <input type="range" min="1" max="100" value="50" class="custom-range" id="myRange">
                                        <p>Value: <span id="demo"></span> €</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Znacky -->
                    <div class="row mb-3">
                        <div class="col-md-12">

                            <button class="btn mt-3 font" type="button" data-toggle="collapse" data-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample1">
                                <i class="fas fa-signature"></i> Znacky <i class="fas fa-chevron-down"></i>
                            </button>

                            <div class="collapse" id="multiCollapseExample1">
                                <div class="card card-body">

                                    <div class="continer-fluid">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1" name="brand[]" value="adidas">
                                                    <label class="custom-control-label" for="customCheck1">Adidas</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-md-12">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck2" name="brand[]" value="Nike">
                                                    <label class="custom-control-label" for="customCheck2" name="brand[]">Nike</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-md-12">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck3" name="brand[]" value="Puma">
                                                    <label class="custom-control-label" for="customCheck3" name="brand[]">Puma</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Velkosti -->
                    <div class="row mb-3">
                        <div class="col-md-12">

                            <button class="btn mt-3 font" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">
                                <i class="fas fa-ruler"></i> Velkosti <i class="fas fa-chevron-down"></i>
                            </button>

                            <div class="collapse" id="multiCollapseExample2">
                                <div class="card card-body">

                                    <div class="continer-fluid">
                                        <div class="row ">
                                            <div class="col-md-12">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck4" name="size[]" value="M">
                                                    <label class="custom-control-label" for="customCheck4">M</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-md-12">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck5" name="size[]" value="S">
                                                    <label class="custom-control-label" for="customCheck5">S</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-md-12">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck6" name="size[]" value="XXL">
                                                    <label class="custom-control-label" for="customCheck6">XXL (Šimon)</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Pohlavie -->

                    <div class="row">
                        <div class="col-md-12">

                            <button class="btn mt-3 font" type="button" data-toggle="collapse" data-target="#multiCollapseExample3" aria-expanded="false" aria-controls="multiCollapseExample3">
                                <i class="fas fa-venus-mars"></i> poHlavie <i class="fas fa-chevron-down"></i>
                            </button>

                            <div class="collapse" id="multiCollapseExample3">
                                <div class="card card-body">

                                    <div class="continer-fluid">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck7" name="sex[]" value="MUZ">
                                                    <label class="custom-control-label" for="customCheck7">Muz</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-md-12">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck8" name="sex[]" value="ZENA">
                                                    <label class="custom-control-label" for="customCheck8">Zena</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3 font">
                        <div class="col-md-12">
                            <ul class="linky">
                                <li><button type="submit" name="submit">filtruj</button></li>

                                <li class="odhlasit">
                                    <a href="index.php?logout='1'" class="py-5 px-5"> loGout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
            </div>
            </form>


            <?php
            //vypis pre filtrovane znacky
            if (isset($_POST['submit'])) {
                $brand = implode(",", $_POST['brand']);

                $query = mysqli_query($connect, "SELECT * FROM items WHERE brand = '$brand'");
                while ($fetch = mysqli_fetch_assoc($query)) {
                    //fetch a schools data

                }

                //if(!empty($_POST['brand'])) {

                //foreach($_POST['brand'] as $value){
                //echo $value;


                // }

                //}

            }
            ?>

            <!-- Produkty -->


            <div class="container-fluid col-md-10">
                <div class="tab-content" id="pills-tabContent">

                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                        <div class="container-fluid">

                            <div class="row my-5">
                                <?php
                                //filtre pre ponuku
                                if (!isset($_POST['submit'])) {
                                    $results = mysqli_query($connect, "SELECT * FROM items WHERE order_status=1");
                                } else {
                                    $brand = array();
                                    $brand = implode(",", (array) $_POST['brand']);
                                    $size = array();
                                    $size = implode(",", (array) $_POST['size']);
                                    $sex = array();
                                    $sex = implode(",", (array) $_POST['sex']);
                                    //ak je zadana iba velkost
                                    if (empty($brand) && empty($sex) && !empty($size)) {

                                        // echo "size vidim";
                                        $results = mysqli_query(
                                            $connect,
                                            "SELECT * FROM items WHERE size = '$size'"
                                        );
                                    }
                                    //ak je zadana iba znacka
                                    elseif (!empty($brand) && empty($sex) && empty($size)) {

                                        //echo "znacku vidim";
                                        $results = mysqli_query(
                                            $connect,
                                            "SELECT * FROM items WHERE brand = '$brand'"
                                        );
                                    }
                                    //ak je zadane iba pohlavie
                                    elseif (empty($brand) && !empty($sex) && empty($size)) {
                                        //echo "pohlavie vidim";
                                        $results = mysqli_query(
                                            $connect,
                                            "SELECT * FROM items WHERE sex = '$sex'"
                                        );
                                    }
                                    //zadana velkost aj pohlavie
                                    elseif (empty($brand) && !empty($sex) && !empty($size)) {
                                        //echo "size a pohlavie";
                                        $results = mysqli_query(
                                            $connect,
                                            "SELECT * FROM items WHERE size = '$size' AND sex = '$sex'"
                                        );
                                    }
                                    //zadana velkost aj znacka
                                    elseif (!empty($brand) && empty($sex) && !empty($size)) {
                                        //echo "size a znacka";
                                        $results = mysqli_query(
                                            $connect,
                                            "SELECT * FROM items WHERE size = '$size' AND brand = '$brand'"
                                        );
                                    }
                                    //zadana znacka aj pohlavie
                                    elseif (!empty($brand) && !empty($sex) && empty($size)) {
                                        //echo "znacka a pohlavie";
                                        $results = mysqli_query(
                                            $connect,
                                            "SELECT * FROM items WHERE brand = '$brand' AND sex = '$sex'"
                                        );
                                    }
                                    //zadana znacka aj pohlavie aj velkost
                                    elseif (!empty($brand) && !empty($sex) && !empty($size)) {
                                        //echo "znacka a pohlavie a velkost";
                                        $results = mysqli_query(
                                            $connect,
                                            "SELECT * FROM items WHERE brand = '$brand' AND sex = '$sex' AND size = '$size'"
                                        );
                                    }
                                }

                                while ($row = @mysqli_fetch_array($results)) {
                                    //cyklus na vypisovanie items
                                    print

                                        "<div class='col-md-4'>" .
                                        "<a href='openItem.php?product_id=" . $row["product_id"] . " ?>'>" .
                                        "<div id= 'item'>" .
                                        "<div class='produkt font'>" .

                                        "<p><img src=images/" . $row["image"] . " width=200></p>" .

                                        "<div class='txt'>" .

                                        "<h1>" . $row["image_title"] . "</h1>" .

                                        "<i>" . $row["credits"] . "kR</i>" .
                                        "<p>" . $row["image_text"] . "</p>" .

                                        "</div>" .
                                        "</div>" .
                                        "</div>" .
                                        "</a>" .
                                        "</div>";
                                }
                                ?>

                                <!-- 2 straaaanka -->
                                <!-- <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"></div>
                    
                   <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div> -->
                            </div>

                            <div class="container mb-5">
                                <div class="row">
                                    <ul class="nav nav-pills mx-auto" id="pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">1</a>
                                        </li>
                                        <!-- <li class="nav-item">
                                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">2</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">3</a>
                                        </li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    require_once 'pcs/footer/footer.php';
    ?>

    <!-- jQuery -->
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="js/js.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>

</html>