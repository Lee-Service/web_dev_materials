<!DOCTYPE html>
<html lang=en>

<head>
    <title> SoundTribe | Newsletter </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="../csstylesheets/newsletterstyling.css">

</head>

<body>

<?php
include ('../modularcode/visitornavbar.php')
?>

    <div class="container sign-up">

        <h2>Find your vibe.</h2>

        <p id="narrow"> Every Friday, our team rounds up the most important stories in music into our newsletter. <br> On Saturdays, we'll hook you up with playlists to set your mood with the best-reviewed albums of the week. <br>On Sundays, SoundTribe goes deep on classic
            albums with early review access for our newsletter patrons.</p>

    </div>
    </div>

    <!-- Signup container-->
    <div class="container text-center" id="signup">

        <form id="signup-form">
            <div class="row">
                <div class="col">
                    <input type="email" placeholder="Your email address">
                </div>
                <div class="col">
                    <button aria-labelledby="email-sign-up">Sign up</button>
                </div>
            </div>
        </form>
        <p class="hidden-xs" id="policytag"> Used in accordance with our&nbsp;<a br href="https://www.condenast.com/privacy-policy">privacy policy</a>.</p>
    </div>

    <div class="container text-center">
        <img src="https://img.zeit.de/zeit-magazin/2021/07/christoph-niemann-klavierspielen-notenlesen-lernen-illustration-2/wide__1300x731" class="img-fluid">
    </div>
    
    </div>


    <?php
include ('../modularcode/footerbar.php');
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