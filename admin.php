<?php
include_once 'config.php';
$result = mysqli_query($connect, "SELECT * FROM users WHERE user_roles = 'user'");
?>
<!DOCTYPE html>
<html>

<head>

    <!-- reset -->
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="css/admin.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- písmo -->
    <link href="https://fonts.googleapis.com/css?family=Major+Mono+Display" rel="stylesheet">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <title>Delete employee data</title>
</head>

<body>
    <div class="container-fluid">
        <table class="table table-bordered">
            <thead class="thead font">
                <tr>
                    <th scope="col">useR id</th>
                    <th scope="col">useR nAme</th>
                    <th scope="col">useR emAil</th>
                    <th scope="col">useR tokens</th>
                    <th scope="col">useR Roles</th>
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
                        <td><?php echo $row["user_id"]; ?></td>
                        <td><?php echo $row["user_name"]; ?></td>
                        <td><?php echo $row["user_email"]; ?></td>
                        <td><?php echo $row["user_tokens"]; ?></td>
                        <td><?php echo $row["user_roles"]; ?></td>
                        <td><a href="adminUpdate.php?user_id=<?php echo $row["user_id"]; ?>" class="btn font">updAte</a></td>
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