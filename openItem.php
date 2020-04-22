<?php
include_once 'config.php';
include_once 'server.php';
echo $_SESSION['user_name'];

//inicializácia správ na errory
$msg = "";





$result = mysqli_query($connect, "SELECT * FROM items WHERE product_id='" . $_GET['product_id'] . "'");
$row = mysqli_fetch_array($result);
if (isset($_POST['submit_order'])) {

    // dostaneme text

    $user_id = $_SESSION['user_id'];
    $product_id = $_POST['product_id'];
    $credits = $row['credits'];

    $user_email = $_SESSION['user_email'];
    $name = mysqli_real_escape_string($connect, $_POST['name']);
    $user_street = mysqli_real_escape_string($connect, $_POST['user_street']);
    $user_city = mysqli_real_escape_string($connect, $_POST['user_city']);
    $user_zip = mysqli_real_escape_string($connect, $_POST['user_zip']);
    $phone_number = mysqli_real_escape_string($connect, $_POST['phone_number']);



    $sql = "INSERT INTO orders (product_id, user_id, name, user_street, user_city, user_zip, user_email, phone_number, credits)
             VALUES ('$product_id', '$user_id', '$name', '$user_street', '$user_city','$user_zip',
             '$user_email','$phone_number','$credits')";
    //query
    mysqli_query($connect, $sql);
}
$result = mysqli_query($connect, "SELECT * FROM orders");

?>
<html>

<head>
    <!-- reset -->
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="css/openItem.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- písmo -->
    <link href="https://fonts.googleapis.com/css?family=Major+Mono+Display" rel="stylesheet">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


    <title>Open Card</title>
</head>

<body>
    <!-- Product ID -->
    <input type="hidden" name="product_id" class="txtField" value="<?php echo $row['product_id']; ?>">

    <div>
        <!-- Image -->
        <img name="image" class="txtField col-md-4 float-left" src="images/<?php echo $row['image']; ?>" width=200>

        <table class="table table-bordered col-md-8">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">typ</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">pRoduct id:</th>
                    <td name="product_id"><?php echo $row['product_id']; ?></td>
                </tr>
                <tr>
                    <th scope="row">iMage teXt:</th>
                    <td name="image_text" class="txtField"><?php echo $row['image_text']; ?></td>
                </tr>
                <tr>
                    <th scope="row">bRand:</th>
                    <td name="brand" class="txtField"><?php echo $row['brand']; ?></td>
                </tr>
                <tr>
                    <th scope="row">cAtegory:</th>
                    <td name="category" class="txtField"><?php echo $row['category']; ?></td>
                </tr>
                <tr>
                    <th scope="row">oRder status:</th>
                    <td type="text" name="order_status" class="txtField">
                        <?php
                        if ($row['order_status'] == 1) {
                            echo "dostupné";
                        } else
                            echo "predané";
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">useR id:</th>
                    <td name="user_id" class="txtField"><?php echo $_SESSION['user_id']; ?></td>
                </tr>
                <tr>
                    <th scope="row" style="background: black; color: #fff">cRedits:</th>
                    <td name="credits" class="txtField"><?php echo $row['credits']; ?></td>
                </tr>
            </tbody>
        </table>

        <a class="btn btn-primary font " id="slide">objednAt <i class="fas fa-chevron-down"></i></a>

        <a href="ponuka.php" class="btn btn-primary font">pRoduct list</a>

    </div>
    <!--objednavkovy formular, ktory potrebujem zobrazit az po stlaceni objednat-->
    <div class="hide" id="hide">
        <form action="" method="POST" enctype="multipart/form-data" name="submit_order">
            <input type="hidden" name="action" value="submit">
            <div class="form-row container-fluid">

                <div class="form-group col-md-4">
                    <label for="">name and surname</label>
                    <input class="form-control" name="name" type="text" value="" size="30" />
                </div>

                <div class="form-group col-md-4">
                    <label for="">email</label>
                    <input class="form-control" name="user_email" type="text" id="email" value="<?php echo $_SESSION['user_email']; ?>" size="30" />
                </div>

                <div class="form-group col-md-4">
                    <label for="">address</label>
                    <input class="form-control" name="user_street" type="text" id="address" value="" size="30" />
                </div>

                <div class="form-group col-md-4">
                    <label for="">city</label>
                    <input class="form-control" name="user_city" type="text" id="city" value="" size="30" />
                </div>

                <div class="form-group col-md-4">
                    <label for="">zip code</label>
                    <input class="form-control" name="user_zip" type="text" id="zip_code" value="" size="30" />
                </div>

                <div class="form-group col-md-4">
                    <label for="">phone number</label>
                    <input class="form-control" name="phone_number" type="text" id="phone_number" value="" size="30" />
                </div>

                <div class="form-group col-md-12">
                    <label for="">teXt :</label>
                    <textarea name="message" class="form-control" rows="7" cols="30"></textarea>

                    <button type="submit" value="submit order" name="submit_order" class="btn btn-primary font">sumbit order</button>
                </div>
            </div>
        </form>
    </div>

    <?php require_once "pcs/footer/footer.php" ?>

    <form method="post" action="">
        <tr class="<?php if (isset($message)) {
                        echo $message;
                    } ?>">
        </tr>
    </form>

    <!-- jQuery -->
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="js/js.js"></script>

</body>

</html>