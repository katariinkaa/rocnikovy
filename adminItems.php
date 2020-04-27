<?php
include_once 'config.php';
$result = mysqli_query($connect, "SELECT * FROM items ");
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- reset -->
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="css/adminItems.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- písmo -->
    <link href="https://fonts.googleapis.com/css?family=Major+Mono+Display" rel="stylesheet">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <title>Document</title>

    <title>Delete employee data</title>
</head>

<body>
    <div class="container-fluid">
        <table class="table table-bordered">
            <thead class="thead font">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">image teXt</th>
                    <th scope="col">bRAnd</th>
                    <th scope="col">useR id</th>
                    <th scope="col">cRedits</th>
                    <th scope="col">stock</th>
                    <th scope="col">categoRy</th>
                    <th scope="col">iMAGe</th>
                    <th scope="col">uploAded on</th>
                    <th scope="col">updAte</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                while ($row = mysqli_fetch_array($result)) {
                    if ($i % 2 == 0)
                        $classname = "even";
                    else
                        $classname = "odd";
                ?>
                    <tr class="<?php if (isset($classname)) echo $classname; ?>">
                        <td><?php echo $row["product_id"]; ?></td>
                        <td><?php echo $row["image_text"]; ?></td>
                        <td><?php echo $row["brand"]; ?></td>
                        <td><?php echo $row["user_id"]; ?></td>
                        <td><?php echo $row["credits"]; ?></td>
                        <td><?php echo $row["order_status"]; ?></td>
                        <td><?php echo $row["category"]; ?></td>

                        <td><img src="/images/<?php echo $row["image"]; ?>" width="60"> </td>

                        <td><?php echo $row["uploaded_on"]; ?></td>

                        <td><a href="adminUpdateItem.php?product_id=<?php echo $row["product_id"];?>" class="btn font">update</a></td>
                    </tr>
                <?php
                    $i++;
                }
                ?>
            </tbody>
        </table>
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