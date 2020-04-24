<?php
include_once 'config.php';
if (count($_POST) > 0) {
    mysqli_query($connect, "UPDATE users set user_id='" . $_POST['user_id'] . "', user_name='" . $_POST['user_name'] . "', user_email='" . $_POST['user_email'] . "', user_tokens='" . $_POST['user_tokens'] . "' ,user_roles='" . $_POST['user_roles'] . "' WHERE user_id='" . $_POST['user_id'] . "'");
    $message = "Record Modified Successfully";
}
$result = mysqli_query($connect, "SELECT * FROM users WHERE user_id='" . $_GET['user_id'] . "'");
$row = mysqli_fetch_array($result);
?>
<html>

<head>
    <!-- reset -->
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="css/adminUpdate.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- písmo -->
    <link href="https://fonts.googleapis.com/css?family=Major+Mono+Display" rel="stylesheet">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


    <title>Update Employee Data</title>
</head>

<body>
    <div class="container font pt-5">
        <form name="frmUser" method="post" action="">
            <div class="form-group">
                <div>
                    <?php if (isset($message)) {
                        echo $message;
                    } ?>
                </div>

                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">useR id:</label>
                        <input type="hidden" name="user_id" class="txtField" value="<?php echo $row['user_id']; ?>">
                        <input type="text" name="user_id" class="txtField form-control" value="<?php echo $row['user_id']; ?>">
                    </div>

                    <div class="form-group col-md-6 ">
                        <label for="exampleInputEmail1">useR nAMe:</label>
                        <input type="text" name="user_name" class="txtField form-control" value="<?php echo $row['user_name']; ?>">
                    </div>

                </div>

                <label for="exampleInputEmail1">useR eMAil:</label>
                <input type="text" name="user_email" class="mb-2 txtField form-control" value="<?php echo $row['user_email']; ?>">

                <label for="exampleInputEmail1">useR tokens:</label>
                <input type="text" name="user_tokens" class="mb-2 txtField form-control" value="<?php echo $row['user_tokens']; ?>">

                <label for="exampleInputEmail1">useR Roles:</label>
                <input type="text" name="user_roles" class="txtField form-control" value="<?php echo $row['user_roles']; ?>">

                <input type="submit" name="submit" value="subMit" class="buttom btn col-md-2 py-3 my-3">
            </div>
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