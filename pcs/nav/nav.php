<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        a {
            text-decoration: none !important;
        }

        /* tma */
        .tma {
            width: 100%;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background-color: black;
            z-index: 2;
            opacity: .9;
        }

        /* BARS */
        .fa-bars {
            position: fixed;
            top: 2%;
            left: 1%;
            font-size: 200%;
            z-index: 1;
            cursor: pointer;
        }

        .fa-times {
            cursor: pointer;
        }

        /* 
         * NAV 
         */
        nav {
            padding: 2% 0 2% 0;
            position: fixed;
            background-color: black;
            width: 20vw;
            height: 100vh;
            z-index: 3;
            top: 0;
            left: -20vw;
            transition: .5s;
            color: white;
        }

        nav i {
            font-size: 150%;
            position: absolute;
            top: 1%;
            right: 5%;
        }

        nav h2 {
            font-size: 150%;
            margin-left: 5%;
        }

        nav a {
            text-decoration: none;
            color: #999999;
            transition: .2s;
        }

        nav a:hover {
            color: white;
            margin-left: 10%;
        }

        nav ul {
            margin-bottom: 15%;
        }

        nav li {
            /* border: 1px solid red; */
            width: 35%;
            margin: 10% 0 0 15%;
        }

        /* nav roll */
        .otvor {
            position: relative;
        }

        .roll {
            position: absolute;
            width: 160%;
            top: 500%;
            transition: .5s;
            opacity: 0;
        }

        .roll li {
            margin: 10% 0 10% 30%;
        }

        .roll li:hover {
            color: #ffcc00;
        }

        /* 
         * @media_queries
         */

        @media (max-width: 780px) {
            nav {
                width: 100%;
                height: 100%;
                left: -100%;
                /* text-align: center; */
            }

            nav h2 {
                margin-left: 2%;
            }

            nav ul {
                margin-bottom: 5%;
            }

            nav li {
                /* border: 1px solid red; */
                width: 35%;
                margin: 6% 0 0 10%;
            }

            /* nav roll */
            .roll li {
                margin: 15% 0 3% 30%;
            }

            /* nav pod ciarov */
            .soc {
                text-align: center;
                width: 100%;
                height: 5vh;
                padding-top: 1%;
                margin: 0%;
            }


        }
    </style>

</head>

<body>

    <!-- tma -->
    <div class="tma"></div>

    <i class="fas fa-bars"></i>

    <nav class="font">

        <i class="fas fa-times"></i>

        <h2>Menu :</h2>
        <ul>
            <li><a href="index.php">home</a></li>
            <li><a href="konto.php">profile</a></li>
            <li><a href="ponuka.php">offer</a></li>
            <li><a href="register.php">ReGisteR</a></li>
        </ul>

        <h2>offer :</h2>
        <ul>
            <li><a href="#">home</a></li>
            <li><a href="#">technology</a></li>
            <li><a href="#">news</a></li>
            <li class="otvor"><a href="#">clothes</a>

              <!--  <ul class="roll">
                    <li>sweatshirts</li>
                    <li>shoes</li>
                    <li>trousers</li>
                </ul>-->

            </li>
        </ul>
        <!-- <div class="kys"></div>
        <ul class="soc">
            <li><i class="fab fa-instagram"></i></li>
            <li><i class="fab fa-facebook-square"></i></li>
            <li><i class="fas fa-pizza-slice"></i></li>
        </ul> -->
    </nav>

</body>

</html>