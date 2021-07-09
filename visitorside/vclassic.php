<?php
include('../api/connection.php');
//$review_id = $_GET['keyid'];

$classic_reviews_endpoint = "http://lservice01.lampt.eeecs.qub.ac.uk/40312791_project/api/api.php?classic_reviews";
$display_reviews = file_get_contents($classic_reviews_endpoint);
$resultReviews = json_decode($display_reviews, true); //couldn't decode from json format

?>

<!DOCTYPE html>
<html lang=en>

<head>
    <title> SoundTribe | Classics </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Bootstrap 5 CSS with JavaScript & Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="../csstylesheets/soundtribe.css">

</head>

<body>

    <?php
    include('../modularcode/visitornavbar.php')
    ?>


<div class="nav-scroller" class="parent">
        <nav class="nav d-flex justify-content-between">
            <ul>
                <li> <a class="p-2 link-secondary" id="current-page" href="http://lservice01.lampt.eeecs.qub.ac.uk/40312791_project/visitorside/homepage2.php?showreviews">Reviews</a>
                </li>
                <li> <a class="p-2 link-secondary" href="http://lservice01.lampt.eeecs.qub.ac.uk/40312791_project/visitorside/vbestnewmusic.php?best_new_music">Best New Music</a></li>
                <li> <a class="p-2 link-secondary" href="http://lservice01.lampt.eeecs.qub.ac.uk/40312791_project/visitorside/vsundayreviews.php?sunday_reviews">Sunday Reviews</a></li>
                <li> <a style="color:black" class="p-2 link-secondary" href="http://lservice01.lampt.eeecs.qub.ac.uk/40312791_project/visitorside/vclassic.php?classic_reviews">Classics</a></li>
             </ul>
        </nav>

        <div id="genre-filter" class="filter">
            <div class="dropdown dropdown-menu-end">
                <button class="btn btn-secondary dropdown-toggle " type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-earbuds" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6.825 4.138c.596 2.141-.36 3.593-2.389 4.117a4.432 4.432 0 0 1-2.018.054c-.048-.01.9 2.778 1.522 4.61l.41 1.205a.52.52 0 0 1-.346.659l-.593.19a.548.548 0 0 1-.69-.34L.184 6.99c-.696-2.137.662-4.309 2.564-4.8 2.029-.523 3.402 0 4.076 1.948zm-.868 2.221c.43-.112.561-.993.292-1.969-.269-.975-.836-1.675-1.266-1.563-.43.112-.561.994-.292 1.969.269.975.836 1.675 1.266 1.563zm3.218-2.221c-.596 2.141.36 3.593 2.389 4.117a4.434 4.434 0 0 0 2.018.054c.048-.01-.9 2.778-1.522 4.61l-.41 1.205a.52.52 0 0 0 .346.659l.593.19c.289.092.6-.06.69-.34l2.536-7.643c.696-2.137-.662-4.309-2.564-4.8-2.029-.523-3.402 0-4.076 1.948zm.868 2.221c-.43-.112-.561-.993-.292-1.969.269-.975.836-1.675 1.266-1.563.43.112.561.994.292 1.969-.269.975-.836 1.675-1.266 1.563z" />
                    </svg> &nbsp; Genres
                </button>
                <div class="dropdown-menu col-2 text-left">
                    <form class="px-4 py-3">
                        <div class="mb-3">
                            <label for="exampleDropdownFormEmail1" class="form-label text-center">Select Genres</label>
                            <hr class="dropdown-divider">

                            <div class="form-check select-all">
                                <input id="all" class="form-check-input" type="checkbox" onclick="updateText()">
                                <label for="all">
                                    Select all
                                </label>
                            </div>


                            <hr class="dropdown-divider mx-auto text-center">

                            <div class="mb-3">
                                <div class="form-check checkbox rows">
                                    <input type="checkbox" class="form-check-input" id="dropdownCheck">
                                    <label class="form-check-label" for="dropdownCheck">
                                        Electronic
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-check checkbox rows">
                                    <input type="checkbox" class="form-check-input" id="dropdownCheck">
                                    <label class="form-check-label" for="dropdownCheck">
                                        Folk/Country
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-check checkbox rows">
                                    <input type="checkbox" class="form-check-input" id="dropdownCheck">
                                    <label class="form-check-label" for="dropdownCheck">
                                        Jazz
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-check checkbox rows">
                                    <input type="checkbox" class="form-check-input" id="dropdownCheck">
                                    <label class="form-check-label" for="dropdownCheck">
                                        Pop/R&B
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-check checkbox rows">
                                    <input type="checkbox" class="form-check-input" id="dropdownCheck">
                                    <label class="form-check-label" for="dropdownCheck">
                                        Rock
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-check checkbox rows">
                                    <input type="checkbox" class="form-check-input" id="dropdownCheck">
                                    <label class="form-check-label" for="dropdownCheck">
                                        Experimental
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-check checkbox rows">
                                    <input type="checkbox" class="form-check-input" id="dropdownCheck">
                                    <label class="form-check-label" for="dropdownCheck">
                                        Global
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-check checkbox rows">
                                    <input type="checkbox" class="form-check-input" id="dropdownCheck">
                                    <label class="form-check-label" for="dropdownCheck">
                                        Metal
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-check checkbox rows">
                                    <input type="checkbox" class="form-check-input" id="dropdownCheck">
                                    <label class="form-check-label" for="dropdownCheck">
                                        Rap/Hiphop
                                    </label>
                                </div>
                            </div>

                            <hr class="dropdown-divider">

                            <button type="submit" class="btn btn-primary">Update results</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </nav>
    </div>

    <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4 pt-1">

        </div>
        <div class="col-4 text-center">
            <h2> Classic Reviews</h2>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center">
        </div>
    </div>

    <div class="container">
        <div class="row row-col-6">

            <?php
            // if (!$result) {
            //     echo $conn->error;
            // } else {

                 foreach ($resultReviews as $row) {

                    echo " <div class='col'>
                <div id='album-image'>
                    <a href=''></a><img src='{$row['AlbumImgUrl']}'></a>
                </div>
                <ul class='artist-details'>
                    <li class='album-title'>{$row['AlbumTitle']}</li>
                    <li class='album-artist'>{$row['ArtistName']}</li>

                </ul>
                <ul class='review-meta-data'>
                    <li class='genre-list'>{$row['Genre']}</li>
                    <li class='reviews-author'><span>By: </span>{$row['AuthorName']} </li>
                </ul>
                <time class='published-time' datetime=''>{$row['DatePublished']} </time>
                </div> ";
                 }
            // }
            ?>


        </div>
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

    <script>
        $('#all').change(function(e) {
            if (e.currentTarget.checked) {
                $('.rows').find('input[type="checkbox"]').prop('checked', true);
                document.getElementById('changetext').innerHTML = "Unselect All";

            } else {
                $('.rows').find('input[type="checkbox"]').prop('checked',
                    false);
                document.getElementById('changetext').innerHTML = "Select All";
            }
        });
    </script>

</body>
</hmtl>