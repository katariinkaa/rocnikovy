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
</head>

<body>
    <!-- Nav -->
    <?php
    require_once 'pcs/nav/nav.php';
    ?>

    <!-- Section -->
    <section class="font">
        <div class="container-fluid my-5">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">pRofil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">nAHRAne-Veci</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">nAHRAt</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">

                <!-- Profil -->
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row p-5">
                        <div class="col-md-3">
                            <img src="../img/rick.png" alt="foto" width="200" class="pb-5">

                            <!-- jeho udaje -->
                            <ul>
                                <li>Meno</li>
                                <li>pRieZVisko</li>
                                <li>eMAil@GMAil.coM</li>
                            </ul>
                            <a href="#">ZMenit udAje</a>
                        </div>
                        <div class="col-md-2">
                            <h2 class="mb-5">Meno</h2>
                            <p><span>158</span> - kR</p>

                            <i>tam fakt neviemco zatial bude tak tam dam super obrazok :D</i>
                            <br><br><br>
                            <i>-------></i>
                        </div>
                        <div class="col-md-7 bci">

                        </div>
                    </div>
                </div>


                <!-- Nahrane-veci -->
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>


                <!-- Form -->
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="container py-5">
                        <p>To je len na rychlo ze ci by tam vosiel</p>
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="">fiRst nAMe</label>
                                    <input type="text" class="form-control">
                                </div>

                                <div class="form-group col-md">
                                    <label for="">second nAMe</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="">pppPseudoniM</label>
                                    <input type="text" class="form-control">
                                </div>

                                <div class="form-group col-md">
                                    <label for="">pHone nuMbeR</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="">eMAil</label>
                                <input type="text" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="">pAssWoRdc :-(</label>
                                <input type="password" class="form-control">
                            </div>

                            <button type="" class="btn col-md-3 py-3 my-3">ReGisteR Me</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->


    <!-- jQuery -->
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="js/js.js"></script>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>