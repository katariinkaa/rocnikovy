<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if (empty($_POST['email'])) {
        $emailError = 'Email is empty';
    } else {
        $email = $_POST['email'];

        // validating the email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailError = 'Invalid email';
        }
    }
    if (empty($_POST['message'])) {
        $messageError = 'Message is empty';
    } else {
        $message = $_POST['message'];
    }
    if (empty($emailError) && empty($messageError)) {
        $date = date('j, F Y h:i A');

        $emailBody = "
			<html>
			<head>
				<title>$email is contacting you</title>
			</head>
			<body style=\"background-color:#fafafa;\">
				<div style=\"padding:20px;\">
					Date: <span style=\"color:#888\">$date</span>
					<br>
					Email: <span style=\"color:#888\">$email</span>
					<br>
					Message: <div style=\"color:#888\">$message</div>
				</div>
			</body>
			</html>
		";

        $headers =     'From: Contact Form <katka2803@gmail.com>' . "\r\n" .
            "Reply-To: $email" . "\r\n" .
            "MIME-Version: 1.0\r\n" .
            "Content-Type: text/html; charset=iso-8859-1\r\n";

        $to = 'katka2803@gmail.com';
        $subject = 'Contacting you';

        if (mail($to, $subject, $emailBody, $headers)) {
            $sent = true;
        }
    }
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
            <form action="contact.php" method="POST" enctype="multipart/form-data" name="contact_form">
                <input type="hidden" name="action" value="submit">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="">name</label>
                        <input class="form-control" name="name" type="text" value="" size="30" />
                    </div>

                    <div class="form-group col-md-6">
                        <label for="">email</label>
                        <input class="form-control" name="email" type="text" id="email" value="" size="30" />
                    </div>
                </div>


                <div class="form-group">
                    <label for="">teXt :</label>
                    <textarea class="form-control" name="message" class="form-control" rows="7" cols="30"></textarea>
                </div>

                <button type="submit" value="Send email" name="send_email" class="btn py-3 mb-3 col-md-2">send</button>
            </form>

            <?php if (isset($emailError) || isset($messageError)) : ?>
                <div id="error-message">
                    <?php
                    echo isset($emailError) ? $emailError . '<br>' : '';
                    echo isset($messageError) ? $messageError . '<br>' : '';
                    ?>
                </div>
            <?php endif; ?>


            <?php if (isset($sent) && $sent === true) : ?>
                <div id="done-message">
                    Your data was succesfully submitted
                </div>
            <?php endif; ?>

        </div>



        <img src="../img/st.png" alt="Star" width="500">
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