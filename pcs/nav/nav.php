<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        /* tma */
        .tma {
            width: 100%;
            height: 100vh;
            position: fixed;
            top: 0; 
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
            margin: 15% 0 15% 30%;
        }

        .kys {
            position: relative;
            width: 100%;
            height: 15vh;
        }

        /* nav pod ciarov */
        .soc {
            border-top: 1px solid #ffcc00;
            position: relative;
            width: 90%;
            height: 15vh;
            padding-top: 5%;
            margin: 0 5% 0 5%;
        }

        .soc i {
            position: relative;
        }

        .soc li {
            display: inline;
            margin: 0 5% 0 10%;
        }
    </style>

</head>

<body>

    <!-- tma -->
    <div class="tma"></div>

    <i class="fas fa-bars"></i>

    <nav class="font">

        <i class="fas fa-times"></i>

        <h2>About us :</h2>
        <ul>
            <li><a href="contact.php">dAlAjlAMA</a></li>
            <li><a href="#">blAble</a></li>
            <li><a href="#">kontAkt</a></li>
        </ul>

        <h2>ponuKA :</h2>
        <ul>
            <li><a href="#">tRuMp</a></li>
            <li><a href="#">GuGA</a></li>
            <li><a href="#">bAtMAn</a></li>
            <li class="otvor"><a href="#">oblecenie</a>

                <ul class="roll">
                    <li>MiKiny</li>
                    <li>topAnKy</li>
                    <li>noHAVice</li>
                </ul>

            </li>
        </ul>
        <div class="kys"></div>
        <ul class="soc">
            <li><i class="fab fa-instagram"></i></li>
            <li><i class="fab fa-facebook-square"></i></li>
            <li><i class="fas fa-pizza-slice"></i></li>
        </ul>
    </nav>

</body>

</html>