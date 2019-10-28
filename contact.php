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
    <link rel="stylesheet" type="text/css" href="css/contact.css">
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

    <!-- Section -->
    <section class="font mb-5">
        <div class="container col-md-7 mb-5">
            <div class="row">
                <div class="col-sm my-5">
                    <h1>contAct</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <p class="pb-5">lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Ab sapiente excepturi
                        tempora, temporibus esse repellendus,
                        doloremque repellat at atque
                        corporis, accusamus qui in</p>
                </div>
            </div>
        </div>

            <!-- Form -->

        <div class="container col-md-7">
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="">fiRst nAMe</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="">second nAMe</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="">eMAil</label>
                    <input type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="">teXt :</label>
                    <textarea name="" class="form-control" rows="5"></textarea>
                </div>

                <button type="" class="btn col-md-3 py-3 my-3">siGn in</button>
            </form>
        </div>

        <!-- <img src="../img/st.png" alt="Star" width="500"> -->
        <!-- <img src="../img/g.png" alt="Gnom" width="300" class="gnom"> -->
    </section>

    <!-- Footer -->
    <?php
    require_once 'pcs/footer/footer.php';
    ?>

    <!-- jQuery -->
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="js/js.js"></script>

</body>

</html>