<?php
include_once 'config.php';
$result = mysqli_query($connect, "SELECT * FROM orders ");
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
    <style>
        .container-fluid {
            padding: 0 !important;
        }

        .btn:hover {
            color: #ffcc00;
        }

        .fa-bars {
            top: 93% !important;
        }

        .btn:focus {
            box-shadow: none !important;
            border-color: none !important;
        }

        .a{
            display: block !important;
        }
        .b {
            display: none !important;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <table class="table table-bordered">
            <thead class="thead font">
                <tr>
                    <th scope="col">order id</th>
                    <th scope="col">pRoduct id</th>
                    <th scope="col">useR id</th>
                    <th scope="col">name</th>
                    <th scope="col">street</th>
                    <th scope="col">city</th>
                    <th scope="col">zip</th>
                    <th scope="col">phone number</th>
                    <th scope="col">cRedits</th>
                    <th scope="col">order status</th>
                    <th scope="col">potvrdit</th>

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
                        <td> <a href="adminOrders.php?order_id=<?php echo $row["order_id"]; ?>"><?php echo $row["order_id"]; ?></a></td>
                        <td><?php echo $row["product_id"]; ?></td>
                        <td><?php echo $row["user_id"]; ?></td>
                        <td><?php echo $row["name"]; ?></td>
                        <td><?php echo $row["user_street"]; ?></td>
                        <td><?php echo $row["user_city"]; ?></td>
                        <td><?php echo $row["user_zip"]; ?></td>
                        <td><?php echo $row["phone_number"]; ?></td>
                        <td><?php echo $row["credits"]; ?></td>

                        <form action="#" method="post">
                            <td>
                                <select id="order_status" name="order_status" class="custom-select">

                                    <option value="<?php echo $row['order_status']; ?>"><?php echo $row['order_status']; ?></option>
                                    <option value="Čaka na vybavenie">čaká na vybavenie</option>
                                    <option value="Spracováva sa">Spracováva sa</option>
                                    <option value="Odoslané">Odoslané</option>
                                    <option value="Doručené">Doručené</option>
                                </select>
                            </td>
                            <td>
                                <input type="submit" name="submit" value="Submit" class="btn">
                            </td>

                        </form>
                        <?php
                        if (isset($_POST['submit'])) {
                            echo $row['order_id'];

                            echo $_GET['order_id'];
                            $order_id = $_GET['order_id'];

                            $selected_val = $_POST['order_status'];  // Storing Selected Value In Variable

                            mysqli_query($connect, "UPDATE orders set order_status='" . $selected_val . "'
                     WHERE order_id='" . $order_id . "'");
                            $message = "Record Modified Successfully";
                            header("Location:adminOrders.php");
                        }

                        ?>


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