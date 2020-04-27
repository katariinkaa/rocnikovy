<?php include('server.php') ?>
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
    <link rel="stylesheet" type="text/css" href="css/register.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- písmo -->
    <link href="https://fonts.googleapis.com/css?family=Major+Mono+Display" rel="stylesheet">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<body>
    <!-- Nav -->
    <?php
    require_once 'pcs/nav/nav.php';
    ?>


    <!-- Aside -->
    <aside class="font">
        <div class="container col-md-7 mb-5">
            <div class="row">
                <div class="col-sm my-5">
                    <h1>ReGistRation foRm</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-sm">
                    <p class="pb-5"></p>
                </div>
            </div>
        </div>

        <!-- Form -->

        <div class="container col-md-7">
            <form action="register.php" method="post">
                <?php include('errors.php'); ?>
                <!--<div class="form-row">
                    <div class="form-group col-md">
                        <label for="">fiRst nAMe</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="form-group col-md">
                        <label for="">second nAMe</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                -->
                <div class="form-row">
                    <div class="form-group col-md">
                        <label for="">*username</label>
                        <input type="text" class="form-control" name="user_name" value="<?php echo $username; ?>">
                    </div>
                    <!--
                    <div class="form-group col-md">
                        <label for="">pHone nuMbeR</label>
                        <input type="text" class="form-control">
                    </div>-->
                </div>

                <div class="form-group">
                    <label for="">*eMAil</label>
                    <input type="text" class="form-control" name="user_email" value="<?php echo $email; ?>">
                </div>

                <div class="form-group">
                    <label for="">*pAssWoRd</label>
                    <input type="password" class="form-control" name="user_pass_1">
                </div>

                <div class="form-group">
                    <label for="">*pAssWoRd AGAin</label>
                    <input type="password" class="form-control" name="user_pass_2">
                </div>

                <div class="form-group form-check my-5">

                    <label class="form-check-label" for="">*mandatory data</label>
                </div>

                <button type="submit" class="btn col-md-3 py-3 my-3" name="reg_user">ReGisteR Me</button>
            </form>
        </div>
        <!-- <img src="../img/at.png" alt="Adventure time"> -->
    </aside>

    <!-- Footer -->
    <?php
    require_once 'pcs/footer/footer.php';
    ?>

    <!-- jQuery -->
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="js/js.js"></script>

</body>

</html>