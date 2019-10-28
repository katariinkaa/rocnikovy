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
    <!-- písmo -->
    <link href="https://fonts.googleapis.com/css?family=Major+Mono+Display" rel="stylesheet">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<body> 
    <?php 
        require_once 'pcs/nav/nav.php';
    ?>    

<!-- 
    HAEDER     
-->

    <header>
        <i class="login font">loGin</i>

        <div class="flip-card kocky font">
            <div class="flip-card-inner">
                <div class="uvod flip-card-front">
                    <h1>nekupuj <i>noVe</i></h1>
                    <p>i HAte u</p>
                    <p>lorem ipsum dolor sit amet consectetur adipisicing elit Ratione laborum.</p>
                </div>
                <div class="flip-card-back">
                    <h1>n&n</h1>
                    <p>RAdi tA tu opet VidiMe</p>
                    <form action="">
                        <input type="text" placeholder="Meno">
                        <br>
                        <input type="text" placeholder="Heslo">
                        <br>
                        <button class="font">loG-in</button>
                    </form>
                    <a href="">ReGistRAciA</a>
                </div>
            </div>
        </div>


        <div class="oblecenie kocky">
            <div class="black up"></div>
            <div class="text font up">
                <h1>nAHod sA</h1>
                <p>Kys ty Hnis</p>
                <a href="#">HeRe</a>
            </div>
        </div>

        <div class="elektronika kocky">
            <div class="black right"></div>
            <div class="text font right">
                <h1>domacnost</h1>
                <p>Kys ty Hnis</p>
            </div>
        </div>

        <div class="domacnost kocky">
            <div class="black left"></div>
            <div class="text font left">
                <h1>eleKtRo</h1>
                <p>Kys ty Hnis</p>
            </div>
        </div>

        <div class="novinky kocky">
            <div class="black down"></div>
            <div class="text font down">
                <h1>noVinKy</h1>
                <p>Kys ty Hnis</p>
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