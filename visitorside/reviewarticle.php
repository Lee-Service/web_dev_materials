<?php

$article_id= $_GET["article_id"];
include('../api/connection.php');
$article_endpoint = "http://lservice01.lampt.eeecs.qub.ac.uk/40312791_project/api/api.php?article_id=$article_id";
$display_reviews = file_get_contents($article_endpoint);
$resultReviews = json_decode($display_reviews, true);



include("conn.php");
?>

<hmtl>

    <head>
        <title> SoundTribe | Article </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
        <link rel="stylesheet" type="text/css" href="../csstylesheets/reviewstyling.css">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    </head>

    <body>

        <?php
        include('../modularcode/visitornavbar.php')
        ?>


        <?php

// if(!$result){
//     echo $conn->error;
//   }else{

//     while($row = $result->fetch_assoc()){

//       $search=$row["planet"];

        foreach ($resultReviews as $row) {
            "<div class='container-fluid clearfix' id='albumcontainer'>
            <img src='{$row['AlbumImgUrl']}' class='image-fluid mx-auto d-block' alt='album image of today's' id='albumimage'>
        </div>
        </div>

        <div class='row' id='spacing-10-review'> </div>
        <!--spacing-->

        <div class='container-fluid d-block' id='testcontainer'>
            <div class=' row container-fluid col-12 mx-auto'>
                <!--Row -->

                <div class='col-sm-4 mx-auto'>
                    <div class='container'>
                        <h3 class='ArtistName'>{$row['ArtistName']}</h3>
                        <div class='container'>
                            <h1 class='AlbumTitle'>{$row['AlbumTitle']}</h1>
                        </div>
                    </div>
                    <div class='container mx-auto'>
                        <span class='GenreID' id='genretype'>{$row['Genre']}</span>
                    </div>
                </div>

                <div class='col-sm-4 row-2 mx-auto'>
                    <div class='container'>
                        <h3 class='>&nbsp;</h3>
                        <div class='container'>
                            <h3 class='Label'>{$row['Label']}</h3>
                        </div>
                    </div>
                    <div class='container'>
                        <span id='YearPublished'>
                            <h3 class='>{$row['YearPublished']}</h3>
                        </span>
                    </div>
                </div>

                <div class='col-sm-4 mx-auto my-auto'>
                    <div class='container'>
                        <div class='container-fluid' class='Score' id='score'><span id='ratingspan'>{$row['Score']}%</span></div>
                    </div>
                </div>
            </div>
        </div>

        <div class='row' id='spacing-20-border'></div>

        <div class='container'>

            <h5 class='Tagline'>Each SoundTribe review takes an in-depth look at a significant album or record  - anything not in our archives is eligible.
            </h5>

            <section class='metadata'>
                <span class='AuthorName' id='author'><strong> &mdash; </strong>{$row['AuthorName']}</span>, <span class='AuthorTypeID' id='author'>{$row['AuthorType']}</span>.<br class='hiddenBR'> <strong>&mdash;</strong> Published:
                <Span><time class='DatePublished'>{$row['DatePublished']}</time></Span>
            </section>
        </div>

        <div class='row' id='spacing-20-border'> </div>
        <!--Section separator-->

        <div class='row col-12'>

            <div class='rowadjustmentelement' id='spacing-20-border'> </div>

            <div class='col-10 mx-auto my-auto'>
                <article class='ReviewContent'>
                    <p> {$row['ReviewContent']} </p>
                </article>
            </div>
        </div>
        ";
        }
        ?>




        <div class="row" id="spacing-20-border"> </div>


        <!-- Signup container-->
        <div class="container-fluid my-auto" id="signup">
            <h1>No Spam - Just Jams</h1>
            <p>Stories Dropped Like They're Hot - Weekly.</p>

            <form id="signup-form">
                <div class="row">
                    <div class="col my-auto">
                        <input type="email " placeholder="Your email address">
                    </div>
                    <div class="col">
                        <button aria-labelledby="email-sign-up my-auto">Sign up</button>
                    </div>
                    <div class="container p-2"></div>
                </div>
            </form>
        </div>

        <div class="container" id="spacing-20-border"> </div>

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