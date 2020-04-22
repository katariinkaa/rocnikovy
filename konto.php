<?php
include 'config.php';
// Starting the session, to use and 
// store data in session variable 
session_start();

// If the session variable is empty, this 
// means the user is yet to login 
// User will be sent to 'login.php' page 
// to allow the user to login 
if (!isset($_SESSION['user_name'])) {
    $_SESSION['msg'] = "you have to log in first";
    header('location: index.php');
}

// Logout button will destroy the session, and 
// will unset the session variables 
// User will be headed to 'login.php' 
// after loggin out 
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>NekupujNove</title>

    <!-- reset -->
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="css/konto.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- písmo -->
    <link href="https://fonts.googleapis.com/css?family=Major+Mono+Display" rel="stylesheet">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <style>

    </style>

</head>

<body>
    <!-- Nav -->
    <?php require_once 'pcs/nav/nav.php' ?>

    <!-- Form -->
    <!-- Creating notification when the 
				user logs in -->

    <!-- Accessible only to the users that 
				have logged in already -->
    <?php if (isset($_SESSION['success'])) : ?>
        <div class="error success">
            <h3 id="alert" class="font">
                <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']);
                ?>
            </h3>
        </div>
    <?php endif ?>

    <!-- information of the user logged in -->
    <!-- welcome message for the logged in user -->

    <?php if (isset($_SESSION['user_name'])) : ?>
        <!-- <p>
            Welcome
            <strong>
                <?php echo $_SESSION['user_name']; ?>
            </strong>
        </p>
        <p>

        </p> -->

    <?php endif ?>
    <?php

    if (isset($_POST['update_data'])) {

        mysqli_query($connect, "UPDATE users set user_id='" . $_POST['user_id'] . "', user_name='" . $_POST['user_name'] . "', user_email='" . $_POST['user_email'] . "' WHERE user_id='" . $_SESSION['user_id'] . "'");
        // dostaneme nazov obrazku


    }

    ?>

    <div class="zmena p-5">

        <h1 class="font">pRofil</h1>

        <i class="fas fa-times"></i>

        <form action="konto.php" method="post">

            <div class="form-group">
                <label for="" class="font">Meno</label>
                <input type="text" class="form-control" name="user_name" value="<?php echo $_SESSION['user_name'] ?>">
            </div>

            <div class="form-group">
                <label for="" class="font">useR id</label>
                <input type="text" class="form-control" name="user_id" value="<?php echo $_SESSION['user_id'] ?>"> </div>

            <div class="form-group">
                <label for="" class="font">eMAil</label>
                <input type="text" class="form-control" name="user_email" value="<?php echo $_SESSION['user_email'] ?>">
            </div>

            <div class="form-group">
                <label for="" class="font">pseudoniM</label>
                <input type="text" class="form-control">
            </div>

            <div class="form-group">
                <label for="" class="font">pRofil pHoto</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile02" name="image">
                        <label class="custom-file-label font" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">. . .</label>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn zmenit pos py-2 font" name="update_data"><i class="far fa-edit"></i> ZMenit</button>

        </form>
    </div>






    <div class="kredit">
        <h1 class="h6 font">kReditov - <?php echo $_SESSION['user_tokens']; ?></h1>
    </div>


    <div class="dropdown font nav_B ml-2 my-2">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            link
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <ul class="nav nav-pills my-3 font nav_B_b" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
                </li><br>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">nAHRAne-Veci</a>
                </li><br>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">objednAvky</a>
                </li>
                    <button type="button" value="odHlAsit" name="logout" class="mt-5 btn p-0 odhlasit">
                        <a href="index.php?logout='1'" class="nav-link">loGout</a>
                    </button>
            </ul>
        </div>
    </div>





    <div class="container-fluid">
        <ul class="nav nav-pills my-3 font nav_A" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">nAHRAne-Veci</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">objednAvky</a>
            </li>
            <li class="nav-item ml-1">
                <button type="button" value="odHlAsit" name="logout" class="btn p-0 odhlasit">
                    <a href="index.php?logout='1'" class="nav-link">loGout</a>
                </button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">

            <!-- Profil -->

            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row mt-5">
                    <div class="card col-md-6 mx-auto p-0 br">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="../img/rick.png" class="card-img m-1 br" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title font">poznaMka:</h5>
                                    <p class="card-text my-4" style="line-height: 220%">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, eaque!</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>

                                    <button type="button" value="ZMeeenit" class="btn zmenit font p-2">
                                        <a href="#">ZMenit <i class="far fa-edit"></i></a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card col-md-5 mx-auto p-0 br">
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col"><i class="fas fa-user-edit"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">user id</th>
                                        <td><?php echo $_SESSION['user_id']; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">user name</th>
                                        <td><?php echo $_SESSION['user_name']; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">user Roles</th>
                                        <td><?php echo $_SESSION['user_roles']; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">user email</th>
                                        <td><?php echo $_SESSION['user_email']; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">pseudoniM</th>
                                        <td>pseudonym</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Nahrane-veci -->

            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <?php
                include_once 'config.php';
                $result = mysqli_query($connect, "SELECT * FROM items where user_id=$_SESSION[user_id];");
                ?>

                <table class="table table-bordered">
                    <thead class="font">
                        <tr>
                            <td>pRoduct id</td>
                            <td>iMaGe text</td>
                            <td>iMage</td>
                            <td>uploaded on</td>
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

                                <td><img src="img/<?php echo $row["image"] ?>" width="60"> </td>

                                <td><?php echo $row["uploaded_on"]; ?></td>
                            </tr>
                        <?php
                            $i++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>

            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <?php
                include_once 'config.php';
                $result = mysqli_query($connect, "SELECT * FROM orders where user_id=$_SESSION[user_id];");


                ?>
                <table class="table table-bordered">
                    <thead class="font">
                        <tr>
                            <td>pRoduct id</td>
                            <td>useR id</td>
                            <td>oRder id</td>
                            <td>cRedits</td>
                            <td>oRdeR stAtus</td>

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
                                <td><?php echo $row["user_id"]; ?></td>
                                <td><?php echo $row["order_id"] ?></td>
                                <td><?php echo $row["credits"] ?></td>
                                <td><?php echo $row["order_status"] ?></td>


                            </tr>
                        <?php
                            $i++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="js/js.js"></script>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>