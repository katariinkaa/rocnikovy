<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <title>Document</title> -->

    <style>
        .font {
            font-family: 'Major Mono Display', monospace;
        }

        /*
         * FOOTER
         */
        .forest {
            background-image: url(../img/forest.png);
            background-size: cover;
            height: 100px;
            margin: 0 10% 0 10%;
            /* Tento obrazok tu neostane lebo vyzera hnusne ;D */
        }

        footer {
            background-color: #ffcc00;
            text-align: center;
            width: 100%;
            padding: 3% 0 3% 0;
        }

        footer p {
            font-size: 150%;
        }


        @media screen and (max-width: 800px) {
            footer {
                display: none;
            }
            .forest {
                display: none !important;
            }
        }
    </style>

</head>

<body>
    <div class="forest"></div>
    <footer id="footer" class="font">
        <p>copyRight©2k19.j&M</p>
    </footer>

</body>

</html>