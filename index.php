<?php
// v openItem ten header alebo nav kde pise logo N&N a kredity rozhadzuje mi
// sprava ze nemas dost kreditov sa mi vypise len hore a nie ako okno
// kredity v ponuke pise rovno hore pri N&N a nie napravo
?>


<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>NekupujNove</title>

    <!-- reset -->
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- písmo -->
    <link href="https://fonts.googleapis.com/css?family=Major+Mono+Display" rel="stylesheet">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<body>
    <?php
    require_once 'pcs/nav/nav.php';
    ?>

    <!-- 
    HAEDER     
-->

    <header class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-md-4">

                <i class="login font">loGin</i>

                <div class="flip-card kocky col-md-12">
                    <div class="flip-card-inner">
                        <div class="uvod flip-card-front font">
                            <h1>nekupuj <i>noVe</i></h1>
                            <p>welcome</p>
                            <p>lorem ipsum dolor sit amet consectetur adipisicing elit Ratione laborum.</p>
                        </div>
                        <div class="flip-card-back container-fluid">
                            <h1 class="font">n&n</h1>
                            <form method="post" action="index.php" class="px-4">
                                <?php include('errors.php'); ?>
                                <div class="form-group mb-4">
                                    <label for="exampleInputEmail1" class="font">Meno</label>
                                    <input type="text" name="user_name" class="form-control">
                                </div>
                                <div class="form-group mb-5">
                                    <label for="exampleInputEmail1" class="font">Heslo</label>
                                    <input type="password" name="user_pass" class="form-control">
                                </div>
                                <div class="row">
                                    <button type="submit" class="log font mx-auto" name="login_user">loG-in</button>
                                </div>
                                <div class="row">
                                    <a href="register.php" class="mx-auto font">ReGistRAciA</a>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="oblecenie kocky col-md-12">
                    <div class="black up"></div>
                    <div class="text font up">
                        <h1>oblecenie</h1>
                        <a href='ponuka.php?category="oblecenie" ?>'>HeRe</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="elektronika kocky col-md-12">
                    <div class="black right"></div>
                    <div class="text font right">
                        <h1>domacnost</h1>
                        <a href="#">HeRe</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="row m-0">
            <div class="col-md-4 mt-2">
                <div class="domacnost kocky col-md-12">
                    <div class="black left"></div>
                    <div class="text font left">
                        <h1>eleKtRo</h1>
                        <a href="#">HeRe</a>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="novinky kocky col-md-12">
                    <div class="black down"></div>
                    <div class="text font down">
                        <h1>noVinKy</h1>
                        <a href="#">HeRe</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <?php
    require_once 'pcs/footer/footer.php';
    ?>

    <!-- jQuery -->
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="js/js.js"></script>

</body>

</html>