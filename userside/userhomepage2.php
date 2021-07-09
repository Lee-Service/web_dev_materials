<!DOCTYPE html>
<html lang=en>

<head>
    <title> SoundTribe | Homepage </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="../csstylesheets/soundtribe.css">

</head>

<body>

    <?php
include ('../modularcode/usernav.php')
?>


        <div class="nav-scroller" class="parent">
            <nav class="nav d-flex justify-content-between">
                <ul>
                    <li> <a class="p-2 link-secondary" id="current-page" href="../visitorside/homepage2.php">Reviews</a>
                    </li>
                    <li> <a class="p-2 link-secondary" href="#">Best New Music</a></li>
                    <li> <a class="p-2 link-secondary" href="#">Sunday Reviews</a></li>
                    <li> <a class="p-2 link-secondary" href="#">Classics</a></li>
                </ul>
            </nav>

            <div id="genre-filter" class="filter">
                <div class="dropdown dropdown-menu-end">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-earbuds" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M6.825 4.138c.596 2.141-.36 3.593-2.389 4.117a4.432 4.432 0 0 1-2.018.054c-.048-.01.9 2.778 1.522 4.61l.41 1.205a.52.52 0 0 1-.346.659l-.593.19a.548.548 0 0 1-.69-.34L.184 6.99c-.696-2.137.662-4.309 2.564-4.8 2.029-.523 3.402 0 4.076 1.948zm-.868 2.221c.43-.112.561-.993.292-1.969-.269-.975-.836-1.675-1.266-1.563-.43.112-.561.994-.292 1.969.269.975.836 1.675 1.266 1.563zm3.218-2.221c-.596 2.141.36 3.593 2.389 4.117a4.434 4.434 0 0 0 2.018.054c.048-.01-.9 2.778-1.522 4.61l-.41 1.205a.52.52 0 0 0 .346.659l.593.19c.289.092.6-.06.69-.34l2.536-7.643c.696-2.137-.662-4.309-2.564-4.8-2.029-.523-3.402 0-4.076 1.948zm.868 2.221c-.43-.112-.561-.993-.292-1.969.269-.975.836-1.675 1.266-1.563.43.112.561.994.292 1.969-.269.975-.836 1.675-1.266 1.563z" />
                        </svg> &nbsp; Genres
                    </button>
                    <div class="dropdown-menu col-2">
                        <form class="px-4 py-3">
                            <div class="mb-3">
                                <label for="exampleDropdownFormEmail1" class="form-label">Select Genres</label>

                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <div class="form-check select-all">
                                    <input id="all" class="form-check-input" type="checkbox" onclick="updateText()">
                                    <label for="all">
                                        <p id="changetext">Select all</p>
                                    </label>
                                </div>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <div class="mb-3">
                                    <div class="form-check checkbox rows">
                                        <input type="checkbox" class="form-check-input" id="dropdownCheck box1">
                                        <label class="form-check-label" for="dropdownCheck">
                                            Electronic
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-check checkbox rows">
                                        <input type="checkbox" class="form-check-input" id="dropdownCheck" id="box2">
                                        <label class="form-check-label" for="dropdownCheck">
                                            Folk/Country
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-check checkbox rows">
                                        <input type="checkbox" class="form-check-input" id="dropdownCheck" id="box3">
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
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
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
                <h2> Latest Reviews</h2>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">

            </div>
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

                <div class="col">
                    <div id="album-image">
                        <a href=""><img src="images/slowrush.jpg"></a>
                    </div>
                    <ul class="artist-details">
                        <li class="album-title">The Slow Rush</li>
                        <li class="album-artist">Tame Impala</li>

                    </ul>
                    <ul class="review-meta-data">
                        <li class="genre-list">Rock</li>
                        <li class="reviews-author"><span>By: </span>Eddie Rizzard</li>
                    </ul>
                    <time class="published-time" datetime="">16 hrs ago</time>
                </div>

                <div class="col">

                    <div id="album-image">
                        <a href="https://pitchfork.com/reviews/albums/nick-cave-warren-ellis-carnage/"><img src="images/songs.jpg"></a>
                    </div>
                    <ul class="artist-details">
                        <li class="album-title">Songs</li>
                        <li class="album-artist">Adrianne Lenker</li>

                    </ul>
                    <ul class="review-meta-data">
                        <li class="genre-list">Folk</li>
                        <li class="reviews-author"><span>By: </span>Emily Floss</li>
                    </ul>
                    <time class="published-time" datetime="">16 hrs ago</time>
                </div>

                <div class="col">

                    <div id="album-image">
                        <a href="https://pitchfork.com/reviews/albums/nick-cave-warren-ellis-carnage/"><img src="images/minecraftc418.jpg"></a>
                    </div>
                    <ul class="artist-details">
                        <li class="album-title">Minecraft</li>
                        <li class="album-artist">C418</li>

                    </ul>
                    <ul class="review-meta-data">
                        <li class="genre-list">Gaming / Electronic</li>
                        <li class="reviews-author"><span>By: </span>Rob Adams</li>
                    </ul>
                    <time class="published-time" datetime="">22 hrs ago</time>
                </div>

                <div class="col">

                    <div id="album-image">
                        <a href=""><img src="images/hotfuss.jpg"></a>
                    </div>
                    <ul class="artist-details">
                        <li class="album-title">Hot Fuss</li>
                        <li class="album-artist">The Killers</li>

                    </ul>
                    <ul class="review-meta-data">
                        <li class="genre-list">Rock</li>
                        <li class="reviews-author"><span>By:</span> Lee Service</li>
                    </ul>
                    <time class="published-time" datetime="">23 hrs ago</time>
                </div>

                <div class="col">

                    <div id="album-image">
                        <a href=""><img src="images/KingsOfLeon-OnlyByTheNightCover.jpg"></a>
                    </div>
                    <ul class="artist-details">
                        <li class="album-title">Only by the Night</li>
                        <li class="album-artist">Kings of Leon</li>

                    </ul>
                    <ul class="review-meta-data">
                        <li class="genre-list">Rock</li>
                        <li class="reviews-author"><span>By:</span> Lee Service</li>
                    </ul>
                    <time class="published-time" datetime="">March 7 2021</time>
                </div>

                <div class="col">

                    <div id="album-image">
                        <a href=""><img src="images/plasticbeach.jpg"></a>
                    </div>
                    <ul class="artist-details">
                        <li class="album-title">Plastic Beach</li>
                        <li class="album-artist">Gorrilaz</li>

                    </ul>
                    <ul class="review-meta-data">
                        <li class="genre-list">Electronic / Rock</li>
                        <li class="reviews-author"><span>By: </span>Nicole Ferguson</li>
                    </ul>
                    <time class="published-time" datetime="">March 7 2021</time>
                </div>

                <div class="col">
                    <div id="album-image">
                        <a href=""><img src="images/massiveattack.jpg"></a>
                    </div>
                    <ul class="artist-details">
                        <li class="album-title">Blue Lines</li>
                        <li class="album-artist">Massive Attack</li>

                    </ul>
                    <ul class="review-meta-data">
                        <li class="genre-list">Electronic</li>
                        <li class="reviews-author"><span>By: </span>Gerry Halliwell</li>
                    </ul>
                    <time class="published-time" datetime="">March 7 2021</time>
                </div>

                <div class="col">
                    <div id="album-image">
                        <a href=""><img src="images/A-Tribe-Called-Quest-TheLowEndTheory-LP_grande.jpg"></a>
                    </div>
                    <ul class="artist-details">
                        <li class="album-title">The Low End Theory</li>
                        <li class="album-artist">A Tribe Called Quest</li>

                    </ul>
                    <ul class="review-meta-data">
                        <li class="genre-list">Rap</li>
                        <li class="reviews-author"><span>By: </span> Wallace Gromit</li>
                    </ul>
                    <time class="published-time" datetime="">March 7 2021</time>
                </div>

                <div class="col">
                    <div id="album-image">
                        <a href=""><img src="images/fleetfoxes.jpg"></a>
                    </div>
                    <ul class="artist-details">
                        <li class="album-title">Fleet Foxes</li>
                        <li class="album-artist">Fleet Foxes</li>

                    </ul>
                    <ul class="review-meta-data">
                        <li class="genre-list">Folk / Country</li>
                        <li class="reviews-author"><span>By: </span>Peter Parker</li>
                    </ul>
                    <time class="published-time" datetime="">March 6 2021</time>
                </div>

                <div class="col">
                    <div id="album-image">
                        <a href=""><img src="images/blackkeyselcamino.jpg"></a>
                    </div>
                    <ul class="artist-details">
                        <li class="album-title">El Camino</li>
                        <li class="album-artist">The Black Keys</li>

                    </ul>
                    <ul class="review-meta-data">
                        <li class="genre-list"> Rock</li>
                        <li class="reviews-author"><span>By: </span>Lee Service</li>
                    </ul>
                    <time class="published-time" datetime="">March 6 2021</time>
                </div>

                <div class="col">
                    <div id="album-image">
                        <a href=""><img src="images/adele21.jpg"></a>
                    </div>
                    <ul class="artist-details">
                        <li class="album-title">21</li>
                        <li class="album-artist">Adele</li>

                    </ul>
                    <ul class="review-meta-data">
                        <li class="genre-list">Pop / R&B</li>
                        <li class="reviews-author"><span>By: </span>David Williams</li>
                    </ul>
                    <time class="published-time" datetime="">March 5 2021</time>
                </div>


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