<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        .active {
            background-color: #ffcc00 !important;
            border: none !important;
            color: #000 !important;
            font-size: 120%;
        }

        .list-group-item {
            color: #000 !important;
        }


        .LogOut {
            background-color: #000 !important;
            color: #fff !important;
        }

        .LogOut:hover {
            color: #ffcc00 !important;
        }


        .fa-bars {
            top: 93% !important;
        }

        .fa-chevron-down {
            font-size: 80%;
            transition: .5s;
        }
    </style>

</head>

<body>

    <!-- Link List -->
    <div class="container my-5">
        <div class="list-group">
            <h2 href="#" class="list-group-item list-group-item-action active font">
                <i class="fas fa-chevron-down"></i> liky
            </h2>
            <a href="adminItems.php" class="a list-group-item list-group-item-action u">adminItems</a>
            <a href="adminOrders.php" class="b list-group-item list-group-item-action u">adminOrders</a>
            <a href="adminUpdate.php" class="d list-group-item list-group-item-action u">adminUpdate</a>
            <a href="adminUpload.php" class="f list-group-item list-group-item-action u">adminUpload</a>
            <a href="admin.php" class="g list-group-item list-group-item-action u">admin</a>

            <input type="submit" value="loG out" class="LogOut font list-group-item list-group-item-action">
        </div>
    </div>

</body>

</html>