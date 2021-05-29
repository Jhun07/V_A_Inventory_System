<?php
  ob_start();
  require_once('includes/load.php');
  if($session->isUserLoggedIn(true)) { redirect('home.php', false);}
?>
<?php include_once('layouts/header.php'); ?>
<!doctype html>
<html lang="en">

<head>
    <title>V & A Pharmacy | Login</title>
    <link rel="icon" href="./images/logo.png">
    <meta charset="utf-8">
    <!-- css -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<!-- background -->

<body style="background-image: url(images/background2.png);background-repeat: no-repeat; background-size: cover;">
    <section class="ftco-section">
        <div class="container ">
            <div class="row justify-content-center">
            </div>
            <div class="row justify-content-center ">
                <div class="col-md-12 col-lg-10 shadow-lg bg-rimary rounded">
                    <div class="wrap d-md-flex " >
                        <div class="img" style="background-image: url(images/background.jpeg);">
                        </div>
                        <div class="login-wrap p-4 p-md-5  ">
                            <div class="d-flex ">

                                <div class="w-100">
                                    <div class="w-100">
                                        <h1 class="mb-4">V & A Pharmacy</h1>
                                    </div>
                                    <h3 class="mb-4 ">Log In</h3>
                                </div>
                                <div class="w-100">
                                    <p class="social-media d-flex justify-content-end">
                                        <a href="#"
                                            class="social-icon d-flex align-items-center justify-content-center"><span
                                                class="fa fa-facebook"></span></a>
                                        <a href="#"
                                            class="social-icon d-flex align-items-center justify-content-center"><span
                                                class="fa fa-twitter"></span></a>
                                    </p>
                                </div>
                            </div>
                            <?php echo display_msg($msg); ?>
                            <form method="post" action="auth.php" class="clearfix">
                                <div class="form-group">
                                    <label for="username" class="control-label">Username</label>
                                    <input type="name" class="form-control" name="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label for="Password" class="control-label">Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-warning"
                                        style="border-radius:0% ;margin-left:40%;">Login</button>
                                </div>
                            </form>
                        </div>
                        <?php include_once('layouts/footer.php'); ?>
                    </div>
                </div>
            </div>
        </div>
        </div>
</body>
</html>