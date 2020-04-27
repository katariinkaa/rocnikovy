<?php
include_once 'config.php';
if (count($_POST) > 0) {
    mysqli_query($connect, "
UPDATE items set product_id='" . $_POST['product_id'] . "', image_text='" . $_POST['image_text'] . "',
 image='" . $_POST['image'] . "', uploaded_on='" . $_POST['uploaded_on'] . "' ,brand='" . $_POST['brand'] . "'
 , user_id='" . $_POST['user_id'] . "', credits='" . $_POST['credits'] . "' , order_status='" . $_POST['order_status'] . "',
 category='" . $_POST['category'] . "', image_title='jj', size='uu', sex='zienka 'WHERE product_id='" . $_POST['product_id'] . "'");
    $message = "Record Modified Successfully";
    header("Location:adminItems.php");
}
$result = mysqli_query($connect, "SELECT * FROM items WHERE product_id='" . $_GET['product_id'] . "'");
$row = mysqli_fetch_array($result);
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Update Items Data</title>

    <!-- reset -->
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="css/adminUpdateItem.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- písmo -->
    <link href="https://fonts.googleapis.com/css?family=Major+Mono+Display" rel="stylesheet">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

</head>

<body>

    <!-- Form -->
    <div class="container col-md-7 font">
        <form name="frmUser" method="post" action="">
            <div>
                <?php
                if (isset($message)) {
                    echo $message;
                }
                ?>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="">pRoduct id:</label>
                    <input type="hidden" name="product_id" class="txtField form-control" value="<?php echo $row['product_id']; ?>">
                    <input type="text" name="product_id" class="form-control" value="<?php echo $row['product_id']; ?>">
                </div>

                <div class="form-group col-md-6">
                    <label for="">imAGe teXt:</label>
                    <input type="text" name="image_text" class="txtField form-control" value="<?php echo $row['image_text']; ?>">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="">imAGe:</label>
                    <input type="text" name="image" class="txtField form-control" value="<?php echo $row['image']; ?>">
                </div>

                <div class="form-group col-md-6">
                    <label for="">uploaded on:</label>
                    <input type="text" name="uploaded_on" class="txtField form-control" value="<?php echo $row['uploaded_on']; ?>">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="">bRAnd:</label>
                    <input type="text" name="brand" class="txtField form-control" value="<?php echo $row['brand']; ?>">
                </div>

                <div class="foem-group col-md-6">
                    <label for="">useR id:</label>
                    <input type="text" name="user_id" class="txtField form-control" value="<?php echo $row['user_id']; ?>">
                </div>
            </div>

            <div class="form-group">
                <label for="">cRedits:</label>
                <input type="text" name="credits" class="txtField form-control" value="<?php echo $row['credits']; ?>">
            </div>

            <div class="form-group">
                <label for="">oRdeR stAtus:</label>
                <input type="text" name="order_status" class="txtField form-control" value="<?php echo $row['order_status']; ?>">
            </div>

            <div class="form-group">
                <label for="">cAteGory:</label>
                <input type="text" name="category" class="txtField form-control" value="<?php echo $row['category']; ?>">
            </div>

            <button type="submit" name="submit" value="subMit" class="buttom btn col-md-3 py-3 my-3">submit</button>
        </form>
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