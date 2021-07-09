<?php

$name = $_POST['postedname'];
$endpoint = "http://lservice01.lampt.eeecs.qub.ac.uk/40312791_project/api/api.php";
$posteddata = http_build_query(array('var1' => $name));
$opts = array( 'http'=> array(
    'method' => 'POST', 'header' => 'Content-Type: application/x-www-form-urlencoded',
    'content'=>$posteddata
)
);

$context = stream_context_create($opts);
$result = file_get_contents($endpoint,false, $context);
?>


<!DOCTYPE html>
<html lang=en>

<head>
    <title> SoundTribe | Sign-up </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="../csstylesheets/signupstyling.css">

</head>

<body>

    <?php
    include('../modularcode/visitornavbar.php')
    ?>

        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="../visitorside/homepage2.php">SoundTribe</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../visitorside/homepage2.php">Reviews</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../visitorside/newsletterpage.php">Newsletter</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../visitorside/signuppage.php">Register</a>
                        </li>

                        <!-------------------- Dropdown Signin -------------------------------------------->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                           Sign-in   
                        </a>
                            <!-- form-->
                            <div class="dropdown-menu p-4">
                                <div class="form-group">
                                    <label for="exampleDropdownFormEmail2">Email address</label>
                                    <input type="email" class="form-control" id="exampleDropdownFormEmail2" placeholder="email@example.com">
                                </div>
                                <div class="form-group">
                                    <label for="exampleDropdownFormPassword2">Password</label>
                                    <input type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="dropdownCheck2">
                                        <label class="form-check-label" for="dropdownCheck2">
                                        Remember me
                                    </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Sign in</button>
                                </form>
                                <!-- end form -->

                        </li>
                    </ul>

                    <!-------------------- Search field -------------------------------------------->

                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg></button>
                    </form>

                    </div>
                </div>
        </nav>



        <div class="container sign-up">

            <h2>Join the Tribe.</h2>

            <p id="narrow">Save your favourite articles and get tailored reviews to help you explore more of the music you love.
            </p>
        </div>



        <!-- Signup container-->
        <div class="container text-center" id="signup">


            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 m-auto">
                        <action="r" method="post" accept-charset="utf-8" class="form" role="form">
                            <fieldset>
                                <legend class="text-center">Let's make it official.</legend>
                                <div class="row">
                                    <div class="col-xs-6 col-md-6">
                                        <input type="text" name="firstname" value="" class="form-control input-lg" placeholder="First Name" />
                                    </div>
                                    <div class="col-xs-6 col-md-6">
                                        <input type="text" name="lastname" value="" class="form-control input-lg" placeholder="Last Name" />
                                    </div>
                                </div>
                                <input type="text" name="email" value="" class="form-control input-lg" placeholder="Your Email" /><input type="password" name="password" value="" class="form-control input-lg" placeholder="Password" /><input type="password"
                                    name="confirm_password" value="" class="form-control input-lg" placeholder="Confirm Password" />
                                </action>
                    </div>
                </div>


                <div class="container">
                    <p id="newslettertext">Want to sign up to our newsletter?</p>
                </div>
            </div>

            <div class="container col-6" id="radioOptions">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                    &nbsp;Sure.
                </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                    &nbsp;No thanks.
                </label>
                </div>
            </div>


            <button class="btn-lg btn-primary btn-block signup-btn" type="submit">
            Create my account</button>
            </fieldset>
            </form>
        </div>
        <div class="container text-center">
            <img class="img-fluid" src="https://static01.nyt.com/images/2020/05/24/magazine/24mag-christoph-hands-08/24mag-christoph-hands-08-master495-v2.jpg">
        </div>

        <?php
    include('../modularcode/footerbar.php');
    ?>

            <!-- JavaScript:-->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js "></script>
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
            <script>
                $().button('toggle')
            </script>
</body>
</hmtl>