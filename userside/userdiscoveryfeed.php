<!DOCTYPE html>
<html lang=en>

<head>
    <title> SoundTribe | DiscoveryFeed </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="../csstylesheets/newsletterstyling.css">


</head>

<body>

<?php
        include('../modularcode/usernav.php')
        ?>


    <div class="header text-center">
        <img id="readingdino" src="../images/readingman.jpg" />
        <h1>{USERNAMES} Discovery Feed</h1>
        <p>Our reviews page, but curated to your music taste. Treat yourself. </p>
    </div>
    <div class="container">
        <hr>
    </div>



    <div class="container">
        <div class="row row-col-6">
            <div class="col">

                <div id="album-image">
                    <a href="https://pitchfork.com/reviews/albums/nick-cave-warren-ellis-carnage/"><img src="https://media.pitchfork.com/photos/603720b2952445e97fb60cfc/1:1/w_160/NC_CARNAGE_PACKSHOT_NOISE.jpg"></a>
                </div>
                <ul class="artist-details">
                    <li class="album-title">Carnage</li>
                    <li class="album-artist">Nic Cage &amp; The Bad Seeds</li>

                </ul>
                <ul class="review-meta-data">
                    <li class="genre-list">Rock</li>
                    <li class="reviews-author"><span>By: </span>Lee Service</li>
                </ul>
                <time class="published-time" datetime="">2 hrs ago</time>
            </div>


            <div class="col">

                <div id="album-image">
                    <a href=""><img src="images/daft-punk-homework.jpg"></a>
                </div>
                <ul class="artist-details">
                    <li class="album-title">Homework</li>
                    <li class="album-artist">Daft Punk</li>

                </ul>
                <ul class="review-meta-data">
                    <li class="genre-list">Electronic</li>
                    <li class="reviews-author"><span>By: </span>Aidan Bromvich</li>
                </ul>
                <time class="published-time" datetime="">5 hrs ago</time>
            </div>

            <div class="col">

                <div id="album-image">
                    <a href=""><img src="images/Since_i_left_you.jpg"></a>
                </div>
                <ul class="artist-details">
                    <li class="album-title">Since I Left You</li>
                    <li class="album-artist">The Avalanches</li>

                </ul>
                <ul class="review-meta-data">
                    <li class="genre-list">Electronic / Experimental</li>
                    <li class="reviews-author"><span>By: </span>Gus Fussard</li>
                </ul>
                <time class="published-time" datetime="">13 hrs ago</time>
            </div>

        </div>
    </div>

    <?php
        include('../modularcode/footerbar.php')
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