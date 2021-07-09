<?php

// header('Access-Control-Allow-Origin: *'); //we give everyone access, not limiting

//heads on what we allow here

include "connection.php";
//header('content-type: application/json'); // accept jsons
header('Access-Control-Allow-Methods: POST');

// what are we allowing here? We're allowing a comma separated list and we want content type and the allowed methods with authorisation and other stuff
// see from 18.30 in video 2 - php from scratch
//header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');


if ($conn) {

    //List all Reviews And Album Details
    if (isset($_GET["showreviews"])) {

        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        $sqlquery = "SELECT * FROM SOUNDTRIBE_ReviewArticleData LEFT JOIN SOUNDTRIBE_Author ON SOUNDTRIBE_Author.AuthorID = SOUNDTRIBE_ReviewArticleData.ReviewAuthorID LEFT JOIN SOUNDTRIBE_DayPublished ON SOUNDTRIBE_DayPublished.DayPublishedID = SOUNDTRIBE_ReviewArticleData.DayPublishedID LEFT JOIN SOUNDTRIBE_AlbumDetails ON SOUNDTRIBE_AlbumDetails.AlbumDetailsID = SOUNDTRIBE_ReviewArticleData.AlbumDetailsID LEFT JOIN SOUNDTRIBE_BestNewMusicStatus ON SOUNDTRIBE_BestNewMusicStatus.BestNewMusicStatusID = SOUNDTRIBE_ReviewArticleData.BestNewMusicStatusID LEFT JOIN SOUNDTRIBE_Artist ON SOUNDTRIBE_Artist.ArtistID = SOUNDTRIBE_AlbumDetails.AlbumArtist LEFT JOIN SOUNDTRIBE_Genre ON SOUNDTRIBE_Genre.GenreID = SOUNDTRIBE_AlbumDetails.AlbumGenre WHERE SOUNDTRIBE_ReviewArticleData.DatePublished = (SELECT MAX(SOUNDTRIBE_ReviewArticleData.DatePublished)) LIMIT 90";
        $result = $conn->query($sqlquery);

        if ($result) {
            $i = 0;

            header('Content-type: application/json');

            while ($row = mysqli_fetch_assoc($result)) {

                $response[$i]['ReviewDataID'] = $row['ReviewDataID'];
                $response[$i]['ReviewAuthorID'] = $row['ReviewAuthorID'];
                $response[$i]['DatePublished'] = $row['DatePublished'];
                $response[$i]['DayPublishedID'] = $row['DayPublishedID'];
                $response[$i]['YearPublished'] = $row['YearPublished'];
                $response[$i]['AlbumDetailsID'] = $row['AlbumDetailsID'];
                $response[$i]['ReviewContent'] = utf8_encode($row['ReviewContent']);
                $response[$i]['Score'] = $row['Score'];
                $response[$i]['BestNewMusicStatusID'] = $row['BestNewMusicStatusID'];
                $response[$i]['AuthorID'] = $row['AuthorID'];
                $response[$i]['AuthorName'] = $row['AuthorName'];
                $response[$i]['AuthorType'] = $row['AuthorType'];
                $response[$i]['DayPublishedID'] = $row['DayPublishedID'];
                $response[$i]['DayPublished'] = $row['DayPublished'];
                $response[$i]['AlbumDetailsID'] = $row['AlbumDetailsID'];
                $response[$i]['AlbumTitle'] = $row['AlbumTitle'];
                $response[$i]['AlbumArtist'] = $row['AlbumArtist'];
                $response[$i]['YearReleased'] = $row['YearReleased'];
                $response[$i]['AlbumLabel'] = $row['AlbumLabel'];
                $response[$i]['AlbumGenre'] = $row['AlbumGenre'];
                $response[$i]['AlbumImgUrl'] = $row['AlbumImgUrl'];
                $response[$i]['BestNewMusicStatusID'] = $row['BestNewMusicStatusID'];
                $response[$i]['ArtistID'] = $row['ArtistID'];
                $response[$i]['ArtistName'] = $row['ArtistName'];
                $response[$i]['GenreID'] = $row['GenreID'];
                $response[$i]['Genre'] = $row['Genre'];
                $i++;
            }
            echo json_encode($response);
        } else {
            echo json_encode("Nothing found.");
        }
    }

    //List Reviews by Sunday Reviews;
    if (isset($_GET['sunday_reviews'])) {

        $sqlquery = "SELECT * FROM SOUNDTRIBE_ReviewArticleData LEFT JOIN SOUNDTRIBE_Author ON SOUNDTRIBE_Author.AuthorID = SOUNDTRIBE_ReviewArticleData.ReviewAuthorID LEFT JOIN SOUNDTRIBE_DayPublished ON SOUNDTRIBE_DayPublished.DayPublishedID = SOUNDTRIBE_ReviewArticleData.DayPublishedID LEFT JOIN SOUNDTRIBE_AlbumDetails ON SOUNDTRIBE_AlbumDetails.AlbumDetailsID = SOUNDTRIBE_ReviewArticleData.AlbumDetailsID LEFT JOIN SOUNDTRIBE_BestNewMusicStatus ON SOUNDTRIBE_BestNewMusicStatus.BestNewMusicStatusID = SOUNDTRIBE_ReviewArticleData.BestNewMusicStatusID LEFT JOIN SOUNDTRIBE_Artist ON SOUNDTRIBE_Artist.ArtistID = SOUNDTRIBE_AlbumDetails.AlbumArtist LEFT JOIN SOUNDTRIBE_Genre ON SOUNDTRIBE_Genre.GenreID = SOUNDTRIBE_AlbumDetails.AlbumGenre WHERE SOUNDTRIBE_ReviewArticleData.DatePublished = (SELECT MAX(SOUNDTRIBE_ReviewArticleData.DatePublished)) AND SOUNDTRIBE_ReviewArticleData.DayPublishedID=6";
        $result = $conn->query($sqlquery);

        if ($result) {
            $i = 0;

            header('Content-type: application/json');

            while ($row = mysqli_fetch_assoc($result)) {

                $response[$i]['ReviewDataID'] = $row['ReviewDataID'];
                $response[$i]['ReviewAuthorID'] = $row['ReviewAuthorID'];
                $response[$i]['DatePublished'] = $row['DatePublished'];
                $response[$i]['DayPublishedID'] = $row['DayPublishedID'];
                $response[$i]['YearPublished'] = $row['YearPublished'];
                $response[$i]['AlbumDetailsID'] = $row['AlbumDetailsID'];
                $response[$i]['ReviewContent'] = utf8_encode($row['ReviewContent']);
                $response[$i]['Score'] = $row['Score'];
                $response[$i]['BestNewMusicStatusID'] = $row['BestNewMusicStatusID'];
                $response[$i]['AuthorID'] = $row['AuthorID'];
                $response[$i]['AuthorName'] = $row['AuthorName'];
                $response[$i]['AuthorType'] = $row['AuthorType'];
                $response[$i]['DayPublishedID'] = $row['DayPublishedID'];
                $response[$i]['DayPublished'] = $row['DayPublished'];
                $response[$i]['AlbumDetailsID'] = $row['AlbumDetailsID'];
                $response[$i]['AlbumTitle'] = $row['AlbumTitle'];
                $response[$i]['AlbumArtist'] = $row['AlbumArtist'];
                $response[$i]['YearReleased'] = $row['YearReleased'];
                $response[$i]['AlbumLabel'] = $row['AlbumLabel'];
                $response[$i]['AlbumGenre'] = $row['AlbumGenre'];
                $response[$i]['AlbumImgUrl'] = $row['AlbumImgUrl'];
                $response[$i]['BestNewMusicStatusID'] = $row['BestNewMusicStatusID'];
                $response[$i]['ArtistID'] = $row['ArtistID'];
                $response[$i]['ArtistName'] = $row['ArtistName'];
                $response[$i]['GenreID'] = $row['GenreID'];
                $response[$i]['Genre'] = $row['Genre'];
                $i++;
            }
            echo json_encode($response);
        } else {
            echo json_encode("Nothing found.");
        }
    }

    //List Reviews by Classics;
    if (isset($_GET['classic_reviews'])) {

        $sqlquery = "SELECT * FROM SOUNDTRIBE_ReviewArticleData LEFT JOIN SOUNDTRIBE_Author ON SOUNDTRIBE_Author.AuthorID = SOUNDTRIBE_ReviewArticleData.ReviewAuthorID LEFT JOIN SOUNDTRIBE_DayPublished ON SOUNDTRIBE_DayPublished.DayPublishedID = SOUNDTRIBE_ReviewArticleData.DayPublishedID LEFT JOIN SOUNDTRIBE_AlbumDetails ON SOUNDTRIBE_AlbumDetails.AlbumDetailsID = SOUNDTRIBE_ReviewArticleData.AlbumDetailsID LEFT JOIN SOUNDTRIBE_BestNewMusicStatus ON SOUNDTRIBE_BestNewMusicStatus.BestNewMusicStatusID = SOUNDTRIBE_ReviewArticleData.BestNewMusicStatusID LEFT JOIN SOUNDTRIBE_Artist ON SOUNDTRIBE_Artist.ArtistID = SOUNDTRIBE_AlbumDetails.AlbumArtist LEFT JOIN SOUNDTRIBE_Genre ON SOUNDTRIBE_Genre.GenreID = SOUNDTRIBE_AlbumDetails.AlbumGenre WHERE `YearReleased` < 2000 AND SOUNDTRIBE_ReviewArticleData.Score > 75;";
        $result = $conn->query($sqlquery);

        if ($result) {
            $i = 0;

            header('Content-type: application/json');

            while ($row = mysqli_fetch_assoc($result)) {

                $response[$i]['ReviewDataID'] = $row['ReviewDataID'];
                $response[$i]['ReviewAuthorID'] = $row['ReviewAuthorID'];
                $response[$i]['DatePublished'] = $row['DatePublished'];
                $response[$i]['DayPublishedID'] = $row['DayPublishedID'];
                $response[$i]['YearPublished'] = $row['YearPublished'];
                $response[$i]['AlbumDetailsID'] = $row['AlbumDetailsID'];
                $response[$i]['ReviewContent'] = utf8_encode($row['ReviewContent']);
                $response[$i]['Score'] = $row['Score'];
                $response[$i]['BestNewMusicStatusID'] = $row['BestNewMusicStatusID'];
                $response[$i]['AuthorID'] = $row['AuthorID'];
                $response[$i]['AuthorName'] = $row['AuthorName'];
                $response[$i]['AuthorType'] = $row['AuthorType'];
                $response[$i]['DayPublishedID'] = $row['DayPublishedID'];
                $response[$i]['DayPublished'] = $row['DayPublished'];
                $response[$i]['AlbumDetailsID'] = $row['AlbumDetailsID'];
                $response[$i]['AlbumTitle'] = $row['AlbumTitle'];
                $response[$i]['AlbumArtist'] = $row['AlbumArtist'];
                $response[$i]['YearReleased'] = $row['YearReleased'];
                $response[$i]['AlbumLabel'] = $row['AlbumLabel'];
                $response[$i]['AlbumGenre'] = $row['AlbumGenre'];
                $response[$i]['AlbumImgUrl'] = $row['AlbumImgUrl'];
                $response[$i]['BestNewMusicStatusID'] = $row['BestNewMusicStatusID'];
                $response[$i]['ArtistID'] = $row['ArtistID'];
                $response[$i]['ArtistName'] = $row['ArtistName'];
                $response[$i]['GenreID'] = $row['GenreID'];
                $response[$i]['Genre'] = $row['Genre'];
                $i++;
            }
            echo json_encode($response);
        } else {
            echo json_encode("Nothing found.");
        }
    }

    // List Reviews by Best New Music:
    if (isset($_GET['best_new_music'])) {

        $sqlquery = "SELECT * FROM SOUNDTRIBE_ReviewArticleData 
        LEFT JOIN SOUNDTRIBE_Author ON SOUNDTRIBE_Author.AuthorID = SOUNDTRIBE_ReviewArticleData.ReviewAuthorID 
        LEFT JOIN SOUNDTRIBE_DayPublished ON SOUNDTRIBE_DayPublished.DayPublishedID = SOUNDTRIBE_ReviewArticleData.DayPublishedID 
        LEFT JOIN SOUNDTRIBE_AlbumDetails ON SOUNDTRIBE_AlbumDetails.AlbumDetailsID = SOUNDTRIBE_ReviewArticleData.AlbumDetailsID 
        LEFT JOIN SOUNDTRIBE_BestNewMusicStatus ON SOUNDTRIBE_BestNewMusicStatus.BestNewMusicStatusID = SOUNDTRIBE_ReviewArticleData.BestNewMusicStatusID 
        LEFT JOIN SOUNDTRIBE_Artist ON SOUNDTRIBE_Artist.ArtistID = SOUNDTRIBE_AlbumDetails.AlbumArtist 
        LEFT JOIN SOUNDTRIBE_Genre ON SOUNDTRIBE_Genre.GenreID = SOUNDTRIBE_AlbumDetails.AlbumGenre 
        WHERE SOUNDTRIBE_ReviewArticleData.DatePublished = (SELECT MAX(SOUNDTRIBE_ReviewArticleData.DatePublished)) 
        AND SOUNDTRIBE_ReviewArticleData.BestNewMusicStatusID = 1";

        $result = $conn->query($sqlquery);

        if ($result) {
            $i = 0;

            header('Content-type: application/json');

            while ($row = mysqli_fetch_assoc($result)) {

                $response[$i]['ReviewDataID'] = $row['ReviewDataID'];
                $response[$i]['ReviewAuthorID'] = $row['ReviewAuthorID'];
                $response[$i]['DatePublished'] = $row['DatePublished'];
                $response[$i]['DayPublishedID'] = $row['DayPublishedID'];
                $response[$i]['YearPublished'] = $row['YearPublished'];
                $response[$i]['AlbumDetailsID'] = $row['AlbumDetailsID'];
                $response[$i]['ReviewContent'] = utf8_encode($row['ReviewContent']);
                $response[$i]['Score'] = $row['Score'];
                $response[$i]['BestNewMusicStatusID'] = $row['BestNewMusicStatusID'];
                $response[$i]['AuthorID'] = $row['AuthorID'];
                $response[$i]['AuthorName'] = $row['AuthorName'];
                $response[$i]['AuthorType'] = $row['AuthorType'];
                $response[$i]['DayPublishedID'] = $row['DayPublishedID'];
                $response[$i]['DayPublished'] = $row['DayPublished'];
                $response[$i]['AlbumDetailsID'] = $row['AlbumDetailsID'];
                $response[$i]['AlbumTitle'] = $row['AlbumTitle'];
                $response[$i]['AlbumArtist'] = $row['AlbumArtist'];
                $response[$i]['YearReleased'] = $row['YearReleased'];
                $response[$i]['AlbumLabel'] = $row['AlbumLabel'];
                $response[$i]['AlbumGenre'] = $row['AlbumGenre'];
                $response[$i]['AlbumImgUrl'] = $row['AlbumImgUrl'];
                $response[$i]['BestNewMusicStatusID'] = $row['BestNewMusicStatusID'];
                $response[$i]['ArtistID'] = $row['ArtistID'];
                $response[$i]['ArtistName'] = $row['ArtistName'];
                $response[$i]['GenreID'] = $row['GenreID'];
                $response[$i]['Genre'] = $row['Genre'];
                $i++;
            }
            echo json_encode($response);
        } else {
            echo json_encode("Nothing found.");
        }
    }

    // List By Genre: Electronic
    if (isset($_GET['electronic']) && (isset($_GET['offset']))) {

        $review_data_id = $_GET['electronic'];
        $offset = $_GET['offset'];

        $query = "SELECT * FROM SOUNDTRIBE_ReviewArticleData LEFT JOIN SOUNDTRIBE_Author ON SOUNDTRIBE_Author.AuthorID = SOUNDTRIBE_ReviewArticleData.ReviewAuthorID LEFT JOIN SOUNDTRIBE_DayPublished ON SOUNDTRIBE_DayPublished.DayPublishedID = SOUNDTRIBE_ReviewArticleData.DayPublishedID LEFT JOIN SOUNDTRIBE_AlbumDetails ON SOUNDTRIBE_AlbumDetails.AlbumDetailsID = SOUNDTRIBE_ReviewArticleData.AlbumDetailsID LEFT JOIN SOUNDTRIBE_BestNewMusicStatus ON SOUNDTRIBE_BestNewMusicStatus.BestNewMusicStatusID = SOUNDTRIBE_ReviewArticleData.BestNewMusicStatusID LEFT JOIN SOUNDTRIBE_Artist ON SOUNDTRIBE_Artist.ArtistID = SOUNDTRIBE_AlbumDetails.AlbumArtist LEFT JOIN SOUNDTRIBE_Genre ON SOUNDTRIBE_Genre.GenreID = SOUNDTRIBE_AlbumDetails.AlbumGenre  WHERE SOUNDTRIBE_ReviewArticleData.DatePublished = (SELECT MAX(SOUNDTRIBE_ReviewArticleData.DatePublished)) AND SOUNDTRIBE_AlbumDetails.AlbumGenre = 1 LIMIT $offset";

        $result = $conn->query($sqlquery);

        if ($result) {
            $i = 0;

            header('Content-type: application/json');

            while ($row = mysqli_fetch_assoc($result)) {

                $response[$i]['ReviewDataID'] = $row['ReviewDataID'];
                $response[$i]['ReviewAuthorID'] = $row['ReviewAuthorID'];
                $response[$i]['DatePublished'] = $row['DatePublished'];
                $response[$i]['DayPublishedID'] = $row['DayPublishedID'];
                $response[$i]['YearPublished'] = $row['YearPublished'];
                $response[$i]['AlbumDetailsID'] = $row['AlbumDetailsID'];
                $response[$i]['ReviewContent'] = utf8_encode($row['ReviewContent']);
                $response[$i]['Score'] = $row['Score'];
                $response[$i]['BestNewMusicStatusID'] = $row['BestNewMusicStatusID'];
                $response[$i]['AuthorID'] = $row['AuthorID'];
                $response[$i]['AuthorName'] = $row['AuthorName'];
                $response[$i]['AuthorType'] = $row['AuthorType'];
                $response[$i]['DayPublishedID'] = $row['DayPublishedID'];
                $response[$i]['DayPublished'] = $row['DayPublished'];
                $response[$i]['AlbumDetailsID'] = $row['AlbumDetailsID'];
                $response[$i]['AlbumTitle'] = $row['AlbumTitle'];
                $response[$i]['AlbumArtist'] = $row['AlbumArtist'];
                $response[$i]['YearReleased'] = $row['YearReleased'];
                $response[$i]['AlbumLabel'] = $row['AlbumLabel'];
                $response[$i]['AlbumGenre'] = $row['AlbumGenre'];
                $response[$i]['AlbumImgUrl'] = $row['AlbumImgUrl'];
                $response[$i]['BestNewMusicStatusID'] = $row['BestNewMusicStatusID'];
                $response[$i]['ArtistID'] = $row['ArtistID'];
                $response[$i]['ArtistName'] = $row['ArtistName'];
                $response[$i]['GenreID'] = $row['GenreID'];
                $response[$i]['Genre'] = $row['Genre'];
                $i++;
            }
            echo json_encode($response);
        } else {
            echo json_encode("Nothing found.");
        }
    }

    // List By Genre: metal
    if (isset($_GET['metal']) && (isset($_GET['offset']))) {

        $review_data_id = $_GET['metal'];
        $offset = $_GET['offset'];

        $query = "SELECT * FROM SOUNDTRIBE_ReviewArticleData LEFT JOIN SOUNDTRIBE_Author ON SOUNDTRIBE_Author.AuthorID = SOUNDTRIBE_ReviewArticleData.ReviewAuthorID LEFT JOIN SOUNDTRIBE_DayPublished ON SOUNDTRIBE_DayPublished.DayPublishedID = SOUNDTRIBE_ReviewArticleData.DayPublishedID LEFT JOIN SOUNDTRIBE_AlbumDetails ON SOUNDTRIBE_AlbumDetails.AlbumDetailsID = SOUNDTRIBE_ReviewArticleData.AlbumDetailsID LEFT JOIN SOUNDTRIBE_BestNewMusicStatus ON SOUNDTRIBE_BestNewMusicStatus.BestNewMusicStatusID = SOUNDTRIBE_ReviewArticleData.BestNewMusicStatusID WHERE SOUNDTRIBE_ReviewArticleData.DatePublished = (SELECT MAX(SOUNDTRIBE_ReviewArticleData.DatePublished)) AND SOUNDTRIBE_AlbumDetails.AlbumGenre = 2 LIMIT $offset";

        $result = $conn->query($sqlquery);

        if ($result) {
            $i = 0;

            header('Content-type: application/json');

            while ($row = mysqli_fetch_assoc($result)) {

                $response[$i]['ReviewDataID'] = $row['ReviewDataID'];
                $response[$i]['ReviewAuthorID'] = $row['ReviewAuthorID'];
                $response[$i]['DatePublished'] = $row['DatePublished'];
                $response[$i]['DayPublishedID'] = $row['DayPublishedID'];
                $response[$i]['YearPublished'] = $row['YearPublished'];
                $response[$i]['AlbumDetailsID'] = $row['AlbumDetailsID'];
                $response[$i]['ReviewContent'] = utf8_encode($row['ReviewContent']);
                $response[$i]['Score'] = $row['Score'];
                $response[$i]['BestNewMusicStatusID'] = $row['BestNewMusicStatusID'];
                $response[$i]['AuthorID'] = $row['AuthorID'];
                $response[$i]['AuthorName'] = $row['AuthorName'];
                $response[$i]['AuthorType'] = $row['AuthorType'];
                $response[$i]['DayPublishedID'] = $row['DayPublishedID'];
                $response[$i]['DayPublished'] = $row['DayPublished'];
                $response[$i]['AlbumDetailsID'] = $row['AlbumDetailsID'];
                $response[$i]['AlbumTitle'] = $row['AlbumTitle'];
                $response[$i]['AlbumArtist'] = $row['AlbumArtist'];
                $response[$i]['YearReleased'] = $row['YearReleased'];
                $response[$i]['AlbumLabel'] = $row['AlbumLabel'];
                $response[$i]['AlbumGenre'] = $row['AlbumGenre'];
                $response[$i]['AlbumImgUrl'] = $row['AlbumImgUrl'];
                $response[$i]['BestNewMusicStatusID'] = $row['BestNewMusicStatusID'];
                $response[$i]['ArtistID'] = $row['ArtistID'];
                $response[$i]['ArtistName'] = $row['ArtistName'];
                $response[$i]['GenreID'] = $row['GenreID'];
                $response[$i]['Genre'] = $row['Genre'];
                $i++;
            }
            echo json_encode($response);
        } else {
            echo json_encode("Nothing found.");
        }
    }

    // List By Genre: Rock
    if (isset($_GET['rock']) && (isset($_GET['offset']))) {

        $review_data_id = $_GET['rock'];
        $offset = $_GET['offset'];

        $query = "SELECT * FROM SOUNDTRIBE_ReviewArticleData LEFT JOIN SOUNDTRIBE_Author ON SOUNDTRIBE_Author.AuthorID = SOUNDTRIBE_ReviewArticleData.ReviewAuthorID LEFT JOIN SOUNDTRIBE_DayPublished ON SOUNDTRIBE_DayPublished.DayPublishedID = SOUNDTRIBE_ReviewArticleData.DayPublishedID LEFT JOIN SOUNDTRIBE_AlbumDetails ON SOUNDTRIBE_AlbumDetails.AlbumDetailsID = SOUNDTRIBE_ReviewArticleData.AlbumDetailsID LEFT JOIN SOUNDTRIBE_BestNewMusicStatus ON SOUNDTRIBE_BestNewMusicStatus.BestNewMusicStatusID = SOUNDTRIBE_ReviewArticleData.BestNewMusicStatusID WHERE SOUNDTRIBE_ReviewArticleData.DatePublished = (SELECT MAX(SOUNDTRIBE_ReviewArticleData.DatePublished)) AND SOUNDTRIBE_AlbumDetails.AlbumGenre = 3 LIMIT $offset";

        $result = $conn->query($sqlquery);

        if ($result) {
            $i = 0;

            header('Content-type: application/json');

            while ($row = mysqli_fetch_assoc($result)) {

                $response[$i]['ReviewDataID'] = $row['ReviewDataID'];
                $response[$i]['ReviewAuthorID'] = $row['ReviewAuthorID'];
                $response[$i]['DatePublished'] = $row['DatePublished'];
                $response[$i]['DayPublishedID'] = $row['DayPublishedID'];
                $response[$i]['YearPublished'] = $row['YearPublished'];
                $response[$i]['AlbumDetailsID'] = $row['AlbumDetailsID'];
                $response[$i]['ReviewContent'] = utf8_encode($row['ReviewContent']);
                $response[$i]['Score'] = $row['Score'];
                $response[$i]['BestNewMusicStatusID'] = $row['BestNewMusicStatusID'];
                $response[$i]['AuthorID'] = $row['AuthorID'];
                $response[$i]['AuthorName'] = $row['AuthorName'];
                $response[$i]['AuthorType'] = $row['AuthorType'];
                $response[$i]['DayPublishedID'] = $row['DayPublishedID'];
                $response[$i]['DayPublished'] = $row['DayPublished'];
                $response[$i]['AlbumDetailsID'] = $row['AlbumDetailsID'];
                $response[$i]['AlbumTitle'] = $row['AlbumTitle'];
                $response[$i]['AlbumArtist'] = $row['AlbumArtist'];
                $response[$i]['YearReleased'] = $row['YearReleased'];
                $response[$i]['AlbumLabel'] = $row['AlbumLabel'];
                $response[$i]['AlbumGenre'] = $row['AlbumGenre'];
                $response[$i]['AlbumImgUrl'] = $row['AlbumImgUrl'];
                $response[$i]['BestNewMusicStatusID'] = $row['BestNewMusicStatusID'];
                $response[$i]['ArtistID'] = $row['ArtistID'];
                $response[$i]['ArtistName'] = $row['ArtistName'];
                $response[$i]['GenreID'] = $row['GenreID'];
                $response[$i]['Genre'] = $row['Genre'];
                $i++;
            }
            echo json_encode($response);
        } else {
            echo json_encode("Nothing found.");
        }
    }

    // List By Genre: rap
    if (isset($_GET['rap']) && (isset($_GET['offset']))) {

        $review_data_id = $_GET['rap'];
        $offset = $_GET['offset'];

        $query = "SELECT * FROM SOUNDTRIBE_ReviewArticleData LEFT JOIN SOUNDTRIBE_Author ON SOUNDTRIBE_Author.AuthorID = SOUNDTRIBE_ReviewArticleData.ReviewAuthorID LEFT JOIN SOUNDTRIBE_DayPublished ON SOUNDTRIBE_DayPublished.DayPublishedID = SOUNDTRIBE_ReviewArticleData.DayPublishedID LEFT JOIN SOUNDTRIBE_AlbumDetails ON SOUNDTRIBE_AlbumDetails.AlbumDetailsID = SOUNDTRIBE_ReviewArticleData.AlbumDetailsID LEFT JOIN SOUNDTRIBE_BestNewMusicStatus ON SOUNDTRIBE_BestNewMusicStatus.BestNewMusicStatusID = SOUNDTRIBE_ReviewArticleData.BestNewMusicStatusID WHERE SOUNDTRIBE_ReviewArticleData.DatePublished = (SELECT MAX(SOUNDTRIBE_ReviewArticleData.DatePublished)) AND SOUNDTRIBE_AlbumDetails.AlbumGenre = 4 LIMIT $offset";

        $result = $conn->query($sqlquery);

        if ($result) {
            $i = 0;

            header('Content-type: application/json');

            while ($row = mysqli_fetch_assoc($result)) {

                $response[$i]['ReviewDataID'] = $row['ReviewDataID'];
                $response[$i]['ReviewAuthorID'] = $row['ReviewAuthorID'];
                $response[$i]['DatePublished'] = $row['DatePublished'];
                $response[$i]['DayPublishedID'] = $row['DayPublishedID'];
                $response[$i]['YearPublished'] = $row['YearPublished'];
                $response[$i]['AlbumDetailsID'] = $row['AlbumDetailsID'];
                $response[$i]['ReviewContent'] = utf8_encode($row['ReviewContent']);
                $response[$i]['Score'] = $row['Score'];
                $response[$i]['BestNewMusicStatusID'] = $row['BestNewMusicStatusID'];
                $response[$i]['AuthorID'] = $row['AuthorID'];
                $response[$i]['AuthorName'] = $row['AuthorName'];
                $response[$i]['AuthorType'] = $row['AuthorType'];
                $response[$i]['DayPublishedID'] = $row['DayPublishedID'];
                $response[$i]['DayPublished'] = $row['DayPublished'];
                $response[$i]['AlbumDetailsID'] = $row['AlbumDetailsID'];
                $response[$i]['AlbumTitle'] = $row['AlbumTitle'];
                $response[$i]['AlbumArtist'] = $row['AlbumArtist'];
                $response[$i]['YearReleased'] = $row['YearReleased'];
                $response[$i]['AlbumLabel'] = $row['AlbumLabel'];
                $response[$i]['AlbumGenre'] = $row['AlbumGenre'];
                $response[$i]['AlbumImgUrl'] = $row['AlbumImgUrl'];
                $response[$i]['BestNewMusicStatusID'] = $row['BestNewMusicStatusID'];
                $response[$i]['ArtistID'] = $row['ArtistID'];
                $response[$i]['ArtistName'] = $row['ArtistName'];
                $response[$i]['GenreID'] = $row['GenreID'];
                $response[$i]['Genre'] = $row['Genre'];
                $i++;
            }
            echo json_encode($response);
        } else {
            echo json_encode("Nothing found.");
        }
    }

    // List By Genre: Experimental
    if (isset($_GET['experimental']) && (isset($_GET['offset']))) {

        $review_data_id = $_GET['experimental'];
        $offset = $_GET['offset'];

        $query = "SELECT * FROM SOUNDTRIBE_ReviewArticleData LEFT JOIN SOUNDTRIBE_Author ON SOUNDTRIBE_Author.AuthorID = SOUNDTRIBE_ReviewArticleData.ReviewAuthorID LEFT JOIN SOUNDTRIBE_DayPublished ON SOUNDTRIBE_DayPublished.DayPublishedID = SOUNDTRIBE_ReviewArticleData.DayPublishedID LEFT JOIN SOUNDTRIBE_AlbumDetails ON SOUNDTRIBE_AlbumDetails.AlbumDetailsID = SOUNDTRIBE_ReviewArticleData.AlbumDetailsID LEFT JOIN SOUNDTRIBE_BestNewMusicStatus ON SOUNDTRIBE_BestNewMusicStatus.BestNewMusicStatusID = SOUNDTRIBE_ReviewArticleData.BestNewMusicStatusID WHERE SOUNDTRIBE_ReviewArticleData.DatePublished = (SELECT MAX(SOUNDTRIBE_ReviewArticleData.DatePublished)) AND SOUNDTRIBE_AlbumDetails.AlbumGenre = 5 LIMIT $offset";

        $result = $conn->query($sqlquery);

        if ($result) {
            $i = 0;

            header('Content-type: application/json');

            while ($row = mysqli_fetch_assoc($result)) {

                $response[$i]['ReviewDataID'] = $row['ReviewDataID'];
                $response[$i]['ReviewAuthorID'] = $row['ReviewAuthorID'];
                $response[$i]['DatePublished'] = $row['DatePublished'];
                $response[$i]['DayPublishedID'] = $row['DayPublishedID'];
                $response[$i]['YearPublished'] = $row['YearPublished'];
                $response[$i]['AlbumDetailsID'] = $row['AlbumDetailsID'];
                $response[$i]['ReviewContent'] = utf8_encode($row['ReviewContent']);
                $response[$i]['Score'] = $row['Score'];
                $response[$i]['BestNewMusicStatusID'] = $row['BestNewMusicStatusID'];
                $response[$i]['AuthorID'] = $row['AuthorID'];
                $response[$i]['AuthorName'] = $row['AuthorName'];
                $response[$i]['AuthorType'] = $row['AuthorType'];
                $response[$i]['DayPublishedID'] = $row['DayPublishedID'];
                $response[$i]['DayPublished'] = $row['DayPublished'];
                $response[$i]['AlbumDetailsID'] = $row['AlbumDetailsID'];
                $response[$i]['AlbumTitle'] = $row['AlbumTitle'];
                $response[$i]['AlbumArtist'] = $row['AlbumArtist'];
                $response[$i]['YearReleased'] = $row['YearReleased'];
                $response[$i]['AlbumLabel'] = $row['AlbumLabel'];
                $response[$i]['AlbumGenre'] = $row['AlbumGenre'];
                $response[$i]['AlbumImgUrl'] = $row['AlbumImgUrl'];
                $response[$i]['BestNewMusicStatusID'] = $row['BestNewMusicStatusID'];
                $response[$i]['ArtistID'] = $row['ArtistID'];
                $response[$i]['ArtistName'] = $row['ArtistName'];
                $response[$i]['GenreID'] = $row['GenreID'];
                $response[$i]['Genre'] = $row['Genre'];
                $i++;
            }
            echo json_encode($response);
        } else {
            echo json_encode("Nothing found.");
        }
    }

    // List By Genre: pop/r&b
    if (isset($_GET['poprb']) && (isset($_GET['offset']))) {

        $review_data_id = $_GET['poprb'];
        $offset = $_GET['offset'];

        $query = "SELECT * FROM SOUNDTRIBE_ReviewArticleData LEFT JOIN SOUNDTRIBE_Author ON SOUNDTRIBE_Author.AuthorID = SOUNDTRIBE_ReviewArticleData.ReviewAuthorID LEFT JOIN SOUNDTRIBE_DayPublished ON SOUNDTRIBE_DayPublished.DayPublishedID = SOUNDTRIBE_ReviewArticleData.DayPublishedID LEFT JOIN SOUNDTRIBE_AlbumDetails ON SOUNDTRIBE_AlbumDetails.AlbumDetailsID = SOUNDTRIBE_ReviewArticleData.AlbumDetailsID LEFT JOIN SOUNDTRIBE_BestNewMusicStatus ON SOUNDTRIBE_BestNewMusicStatus.BestNewMusicStatusID = SOUNDTRIBE_ReviewArticleData.BestNewMusicStatusID WHERE SOUNDTRIBE_ReviewArticleData.DatePublished = (SELECT MAX(SOUNDTRIBE_ReviewArticleData.DatePublished)) AND SOUNDTRIBE_AlbumDetails.AlbumGenre = 6 LIMIT $offset";

        $result = $conn->query($sqlquery);

        if ($result) {
            $i = 0;

            header('Content-type: application/json');

            while ($row = mysqli_fetch_assoc($result)) {

                $response[$i]['ReviewDataID'] = $row['ReviewDataID'];
                $response[$i]['ReviewAuthorID'] = $row['ReviewAuthorID'];
                $response[$i]['DatePublished'] = $row['DatePublished'];
                $response[$i]['DayPublishedID'] = $row['DayPublishedID'];
                $response[$i]['YearPublished'] = $row['YearPublished'];
                $response[$i]['AlbumDetailsID'] = $row['AlbumDetailsID'];
                $response[$i]['ReviewContent'] = utf8_encode($row['ReviewContent']);
                $response[$i]['Score'] = $row['Score'];
                $response[$i]['BestNewMusicStatusID'] = $row['BestNewMusicStatusID'];
                $response[$i]['AuthorID'] = $row['AuthorID'];
                $response[$i]['AuthorName'] = $row['AuthorName'];
                $response[$i]['AuthorType'] = $row['AuthorType'];
                $response[$i]['DayPublishedID'] = $row['DayPublishedID'];
                $response[$i]['DayPublished'] = $row['DayPublished'];
                $response[$i]['AlbumDetailsID'] = $row['AlbumDetailsID'];
                $response[$i]['AlbumTitle'] = $row['AlbumTitle'];
                $response[$i]['AlbumArtist'] = $row['AlbumArtist'];
                $response[$i]['YearReleased'] = $row['YearReleased'];
                $response[$i]['AlbumLabel'] = $row['AlbumLabel'];
                $response[$i]['AlbumGenre'] = $row['AlbumGenre'];
                $response[$i]['AlbumImgUrl'] = $row['AlbumImgUrl'];
                $response[$i]['BestNewMusicStatusID'] = $row['BestNewMusicStatusID'];
                $response[$i]['ArtistID'] = $row['ArtistID'];
                $response[$i]['ArtistName'] = $row['ArtistName'];
                $response[$i]['GenreID'] = $row['GenreID'];
                $response[$i]['Genre'] = $row['Genre'];
                $i++;
            }
            echo json_encode($response);
        } else {
            echo json_encode("Nothing found.");
        }
    }

    // List By Genre: Electronic
    if (isset($_GET['folkcountry']) && (isset($_GET['offset']))) {

        $review_data_id = $_GET['folkcountry'];
        $offset = $_GET['offset'];

        $query = "SELECT * FROM SOUNDTRIBE_ReviewArticleData LEFT JOIN SOUNDTRIBE_Author ON SOUNDTRIBE_Author.AuthorID = SOUNDTRIBE_ReviewArticleData.ReviewAuthorID LEFT JOIN SOUNDTRIBE_DayPublished ON SOUNDTRIBE_DayPublished.DayPublishedID = SOUNDTRIBE_ReviewArticleData.DayPublishedID LEFT JOIN SOUNDTRIBE_AlbumDetails ON SOUNDTRIBE_AlbumDetails.AlbumDetailsID = SOUNDTRIBE_ReviewArticleData.AlbumDetailsID LEFT JOIN SOUNDTRIBE_BestNewMusicStatus ON SOUNDTRIBE_BestNewMusicStatus.BestNewMusicStatusID = SOUNDTRIBE_ReviewArticleData.BestNewMusicStatusID WHERE SOUNDTRIBE_ReviewArticleData.DatePublished = (SELECT MAX(SOUNDTRIBE_ReviewArticleData.DatePublished)) AND SOUNDTRIBE_AlbumDetails.AlbumGenre = 7 LIMIT $offset";

        $result = $conn->query($sqlquery);

        if ($result) {
            $i = 0;

            header('Content-type: application/json');

            while ($row = mysqli_fetch_assoc($result)) {

                $response[$i]['ReviewDataID'] = $row['ReviewDataID'];
                $response[$i]['ReviewAuthorID'] = $row['ReviewAuthorID'];
                $response[$i]['DatePublished'] = $row['DatePublished'];
                $response[$i]['DayPublishedID'] = $row['DayPublishedID'];
                $response[$i]['YearPublished'] = $row['YearPublished'];
                $response[$i]['AlbumDetailsID'] = $row['AlbumDetailsID'];
                $response[$i]['ReviewContent'] = utf8_encode($row['ReviewContent']);
                $response[$i]['Score'] = $row['Score'];
                $response[$i]['BestNewMusicStatusID'] = $row['BestNewMusicStatusID'];
                $response[$i]['AuthorID'] = $row['AuthorID'];
                $response[$i]['AuthorName'] = $row['AuthorName'];
                $response[$i]['AuthorType'] = $row['AuthorType'];
                $response[$i]['DayPublishedID'] = $row['DayPublishedID'];
                $response[$i]['DayPublished'] = $row['DayPublished'];
                $response[$i]['AlbumDetailsID'] = $row['AlbumDetailsID'];
                $response[$i]['AlbumTitle'] = $row['AlbumTitle'];
                $response[$i]['AlbumArtist'] = $row['AlbumArtist'];
                $response[$i]['YearReleased'] = $row['YearReleased'];
                $response[$i]['AlbumLabel'] = $row['AlbumLabel'];
                $response[$i]['AlbumGenre'] = $row['AlbumGenre'];
                $response[$i]['AlbumImgUrl'] = $row['AlbumImgUrl'];
                $response[$i]['BestNewMusicStatusID'] = $row['BestNewMusicStatusID'];
                $response[$i]['ArtistID'] = $row['ArtistID'];
                $response[$i]['ArtistName'] = $row['ArtistName'];
                $response[$i]['GenreID'] = $row['GenreID'];
                $response[$i]['Genre'] = $row['Genre'];
                $i++;
            }
            echo json_encode($response);
        } else {
            echo json_encode("Nothing found.");
        }
    }

    // List By Genre: Jazz
    if (isset($_GET['jazz']) && (isset($_GET['offset']))) {

        $review_data_id = $_GET['reviews'];
        $offset = $_GET['offset'];

        $query = "SELECT * FROM SOUNDTRIBE_ReviewArticleData LEFT JOIN SOUNDTRIBE_Author ON SOUNDTRIBE_Author.AuthorID = SOUNDTRIBE_ReviewArticleData.ReviewAuthorID LEFT JOIN SOUNDTRIBE_DayPublished ON SOUNDTRIBE_DayPublished.DayPublishedID = SOUNDTRIBE_ReviewArticleData.DayPublishedID LEFT JOIN SOUNDTRIBE_AlbumDetails ON SOUNDTRIBE_AlbumDetails.AlbumDetailsID = SOUNDTRIBE_ReviewArticleData.AlbumDetailsID LEFT JOIN SOUNDTRIBE_BestNewMusicStatus ON SOUNDTRIBE_BestNewMusicStatus.BestNewMusicStatusID = SOUNDTRIBE_ReviewArticleData.BestNewMusicStatusID WHERE SOUNDTRIBE_ReviewArticleData.DatePublished = (SELECT MAX(SOUNDTRIBE_ReviewArticleData.DatePublished)) AND SOUNDTRIBE_AlbumDetails.AlbumGenre = 8 LIMIT $offset";

        $result = $conn->query($sqlquery);

        if ($result) {
            $i = 0;

            header('Content-type: application/json');

            while ($row = mysqli_fetch_assoc($result)) {

                $response[$i]['ReviewDataID'] = $row['ReviewDataID'];
                $response[$i]['ReviewAuthorID'] = $row['ReviewAuthorID'];
                $response[$i]['DatePublished'] = $row['DatePublished'];
                $response[$i]['DayPublishedID'] = $row['DayPublishedID'];
                $response[$i]['YearPublished'] = $row['YearPublished'];
                $response[$i]['AlbumDetailsID'] = $row['AlbumDetailsID'];
                $response[$i]['ReviewContent'] = utf8_encode($row['ReviewContent']);
                $response[$i]['Score'] = $row['Score'];
                $response[$i]['BestNewMusicStatusID'] = $row['BestNewMusicStatusID'];
                $response[$i]['AuthorID'] = $row['AuthorID'];
                $response[$i]['AuthorName'] = $row['AuthorName'];
                $response[$i]['AuthorType'] = $row['AuthorType'];
                $response[$i]['DayPublishedID'] = $row['DayPublishedID'];
                $response[$i]['DayPublished'] = $row['DayPublished'];
                $response[$i]['AlbumDetailsID'] = $row['AlbumDetailsID'];
                $response[$i]['AlbumTitle'] = $row['AlbumTitle'];
                $response[$i]['AlbumArtist'] = $row['AlbumArtist'];
                $response[$i]['YearReleased'] = $row['YearReleased'];
                $response[$i]['AlbumLabel'] = $row['AlbumLabel'];
                $response[$i]['AlbumGenre'] = $row['AlbumGenre'];
                $response[$i]['AlbumImgUrl'] = $row['AlbumImgUrl'];
                $response[$i]['BestNewMusicStatusID'] = $row['BestNewMusicStatusID'];
                $response[$i]['ArtistID'] = $row['ArtistID'];
                $response[$i]['ArtistName'] = $row['ArtistName'];
                $response[$i]['GenreID'] = $row['GenreID'];
                $response[$i]['Genre'] = $row['Genre'];
                $i++;
            }
            echo json_encode($response);
        } else {
            echo json_encode("Nothing found.");
        }
    }

    // List By Genre: Global
    if (isset($_GET['global']) && (isset($_GET['offset']))) {

        $review_data_id = $_GET['reviews'];
        $offset = $_GET['offset'];

        $query = "SELECT * FROM SOUNDTRIBE_ReviewArticleData LEFT JOIN SOUNDTRIBE_Author ON SOUNDTRIBE_Author.AuthorID = SOUNDTRIBE_ReviewArticleData.ReviewAuthorID LEFT JOIN SOUNDTRIBE_DayPublished ON SOUNDTRIBE_DayPublished.DayPublishedID = SOUNDTRIBE_ReviewArticleData.DayPublishedID LEFT JOIN SOUNDTRIBE_AlbumDetails ON SOUNDTRIBE_AlbumDetails.AlbumDetailsID = SOUNDTRIBE_ReviewArticleData.AlbumDetailsID LEFT JOIN SOUNDTRIBE_BestNewMusicStatus ON SOUNDTRIBE_BestNewMusicStatus.BestNewMusicStatusID = SOUNDTRIBE_ReviewArticleData.BestNewMusicStatusID WHERE SOUNDTRIBE_ReviewArticleData.DatePublished = (SELECT MAX(SOUNDTRIBE_ReviewArticleData.DatePublished)) AND SOUNDTRIBE_AlbumDetails.AlbumGenre = 9 LIMIT $offset";

        $result = $conn->query($sqlquery);

        if ($result) {
            $i = 0;

            header('Content-type: application/json');

            while ($row = mysqli_fetch_assoc($result)) {

                $response[$i]['ReviewDataID'] = $row['ReviewDataID'];
                $response[$i]['ReviewAuthorID'] = $row['ReviewAuthorID'];
                $response[$i]['DatePublished'] = $row['DatePublished'];
                $response[$i]['DayPublishedID'] = $row['DayPublishedID'];
                $response[$i]['YearPublished'] = $row['YearPublished'];
                $response[$i]['AlbumDetailsID'] = $row['AlbumDetailsID'];
                $response[$i]['ReviewContent'] = utf8_encode($row['ReviewContent']);
                $response[$i]['Score'] = $row['Score'];
                $response[$i]['BestNewMusicStatusID'] = $row['BestNewMusicStatusID'];
                $response[$i]['AuthorID'] = $row['AuthorID'];
                $response[$i]['AuthorName'] = $row['AuthorName'];
                $response[$i]['AuthorType'] = $row['AuthorType'];
                $response[$i]['DayPublishedID'] = $row['DayPublishedID'];
                $response[$i]['DayPublished'] = $row['DayPublished'];
                $response[$i]['AlbumDetailsID'] = $row['AlbumDetailsID'];
                $response[$i]['AlbumTitle'] = $row['AlbumTitle'];
                $response[$i]['AlbumArtist'] = $row['AlbumArtist'];
                $response[$i]['YearReleased'] = $row['YearReleased'];
                $response[$i]['AlbumLabel'] = $row['AlbumLabel'];
                $response[$i]['AlbumGenre'] = $row['AlbumGenre'];
                $response[$i]['AlbumImgUrl'] = $row['AlbumImgUrl'];
                $response[$i]['BestNewMusicStatusID'] = $row['BestNewMusicStatusID'];
                $response[$i]['ArtistID'] = $row['ArtistID'];
                $response[$i]['ArtistName'] = $row['ArtistName'];
                $response[$i]['GenreID'] = $row['GenreID'];
                $response[$i]['Genre'] = $row['Genre'];
                $i++;
            }
            echo json_encode($response);
        } else {
            echo json_encode("Nothing found.");
        }
    }

    //Read Artist without offset
    if (isset($_GET['read_single_artist'])) {

        $single_id_result = $_GET['read_single_artist'];

        $query = "SELECT SOUNDTRIBE_Artist.ArtistID, `ArtistName` FROM `SOUNDTRIBE_Artist` WHERE SOUNDTRIBE_Artist.ArtistID = $single_id_result";

        $result = $conn->query($query);

        if ($result) {
            echo json_encode(
                array('message' => 'Artist found')
            );
        } else {
            echo json_encode(
                array('message' => 'Artist not found')
            );
        }
    }

    // Return Article on Page:
    if (isset($_GET['article_id'])) {
        $article_id = $_GET['article_id'];
        $article_endpoint = "http://lservice01.lampt.eeecs.qub.ac.uk/40312791_project/api/api.php?article_id=$article_id";
        $result = file_get_contents($article_endpoint);

        $data = json_decode($result,true);

        $sqlquery = "SELECT * FROM SOUNDTRIBE_ReviewArticleData 
            LEFT JOIN SOUNDTRIBE_Author ON SOUNDTRIBE_Author.AuthorID = SOUNDTRIBE_ReviewArticleData.ReviewAuthorID 
            LEFT JOIN SOUNDTRIBE_DayPublished ON SOUNDTRIBE_DayPublished.DayPublishedID = SOUNDTRIBE_ReviewArticleData.DayPublishedID 
            LEFT JOIN SOUNDTRIBE_AlbumDetails ON SOUNDTRIBE_AlbumDetails.AlbumDetailsID = SOUNDTRIBE_ReviewArticleData.AlbumDetailsID 
            LEFT JOIN SOUNDTRIBE_BestNewMusicStatus ON SOUNDTRIBE_BestNewMusicStatus.BestNewMusicStatusID = SOUNDTRIBE_ReviewArticleData.BestNewMusicStatusID 
            LEFT JOIN SOUNDTRIBE_Artist ON SOUNDTRIBE_Artist.ArtistID = SOUNDTRIBE_AlbumDetails.AlbumArtist 
            LEFT JOIN SOUNDTRIBE_Genre ON SOUNDTRIBE_Genre.GenreID = SOUNDTRIBE_AlbumDetails.AlbumGenre";

        $result = $conn->query($sqlquery);

        if ($result) {
            $i = 0;

            header('Content-type: application/json');

            while ($row = mysqli_fetch_assoc($result)) {

                $response[$i]['ReviewDataID'] = $row['ReviewDataID'];
                $response[$i]['ReviewAuthorID'] = $row['ReviewAuthorID'];
                $response[$i]['DatePublished'] = $row['DatePublished'];
                $response[$i]['DayPublishedID'] = $row['DayPublishedID'];
                $response[$i]['YearPublished'] = $row['YearPublished'];
                $response[$i]['AlbumDetailsID'] = $row['AlbumDetailsID'];
                $response[$i]['ReviewContent'] = utf8_encode($row['ReviewContent']);
                $response[$i]['Score'] = $row['Score'];
                $response[$i]['BestNewMusicStatusID'] = $row['BestNewMusicStatusID'];
                $response[$i]['AuthorID'] = $row['AuthorID'];
                $response[$i]['AuthorName'] = $row['AuthorName'];
                $response[$i]['AuthorType'] = $row['AuthorType'];
                $response[$i]['DayPublishedID'] = $row['DayPublishedID'];
                $response[$i]['DayPublished'] = $row['DayPublished'];
                $response[$i]['AlbumDetailsID'] = $row['AlbumDetailsID'];
                $response[$i]['AlbumTitle'] = $row['AlbumTitle'];
                $response[$i]['AlbumArtist'] = $row['AlbumArtist'];
                $response[$i]['YearReleased'] = $row['YearReleased'];
                $response[$i]['AlbumLabel'] = $row['AlbumLabel'];
                $response[$i]['AlbumGenre'] = $row['AlbumGenre'];
                $response[$i]['AlbumImgUrl'] = $row['AlbumImgUrl'];
                $response[$i]['BestNewMusicStatusID'] = $row['BestNewMusicStatusID'];
                $response[$i]['ArtistID'] = $row['ArtistID'];
                $response[$i]['ArtistName'] = $row['ArtistName'];
                $response[$i]['GenreID'] = $row['GenreID'];
                $response[$i]['Genre'] = $row['Genre'];
                $i++;
            }
            echo json_encode($response);
        } else {
            echo json_encode("Nothing found.");
        }
    }

        //UPDATE EXISTING review_data
        if (isset($_GET['update_review_data'])) {

            $ReviewDataID = $_GET['update_review_data'];
    
            $data = json_decode(file_get_contents("php://input"));
    
            $review_data = $data->review_data;
    
            $query = "UPDATE 'SOUNDTRIBE_ReviewArticleData' SET '$review_data' WHERE ReviewDataID = $ReviewDataID";
    
            $result = $conn->query($query);
    
            if ($result) {
                echo json_encode(
                    array('message' => 'review_data updated')
                );
            } else {
                echo json_encode(
                    array('message' => 'review_data NOT updated')
                );
            }
        }

        // search method
        if (isset($_GET['search_term'])) {
            $article_id = $_GET['search_term'];
            $article_endpoint = "http://lservice01.lampt.eeecs.qub.ac.uk/40312791_project/api/api.php?article_id=$article_id";
            $result = file_get_contents($article_endpoint);
    
            $data = json_decode($result,true);
    
            $sqlquery = "
            SELECT SOUNDTRIBE_ReviewArticleData.ReviewID, ... 
            INNER JOIN another on review article data = thing id 
            WHERE title LIKE '%artist% OR LIKE '%albumName%'";
    
            $result = $conn->query($sqlquery);
    
            if ($result) {
                $i = 0;
    
                header('Content-type: application/json');
    
                while ($row = mysqli_fetch_assoc($result)) {
    
                    $response[$i]['ReviewDataID'] = $row['ReviewDataID'];
                    $response[$i]['ReviewAuthorID'] = $row['ReviewAuthorID'];
                    $response[$i]['DatePublished'] = $row['DatePublished'];
                    $response[$i]['DayPublishedID'] = $row['DayPublishedID'];
                    $response[$i]['YearPublished'] = $row['YearPublished'];
                    $response[$i]['AlbumDetailsID'] = $row['AlbumDetailsID'];
                    $response[$i]['ReviewContent'] = utf8_encode($row['ReviewContent']);
                    $response[$i]['Score'] = $row['Score'];
                    $response[$i]['BestNewMusicStatusID'] = $row['BestNewMusicStatusID'];
                    $response[$i]['AuthorID'] = $row['AuthorID'];
                    $response[$i]['AuthorName'] = $row['AuthorName'];
                    $response[$i]['AuthorType'] = $row['AuthorType'];
                    $response[$i]['DayPublishedID'] = $row['DayPublishedID'];
                    $response[$i]['DayPublished'] = $row['DayPublished'];
                    $response[$i]['AlbumDetailsID'] = $row['AlbumDetailsID'];
                    $response[$i]['AlbumTitle'] = $row['AlbumTitle'];
                    $response[$i]['AlbumArtist'] = $row['AlbumArtist'];
                    $response[$i]['YearReleased'] = $row['YearReleased'];
                    $response[$i]['AlbumLabel'] = $row['AlbumLabel'];
                    $response[$i]['AlbumGenre'] = $row['AlbumGenre'];
                    $response[$i]['AlbumImgUrl'] = $row['AlbumImgUrl'];
                    $response[$i]['BestNewMusicStatusID'] = $row['BestNewMusicStatusID'];
                    $response[$i]['ArtistID'] = $row['ArtistID'];
                    $response[$i]['ArtistName'] = $row['ArtistName'];
                    $response[$i]['GenreID'] = $row['GenreID'];
                    $response[$i]['Genre'] = $row['Genre'];
                    $i++;
                }
                echo json_encode($response);
            } else {
                echo json_encode("Nothing found.");
            }
        }


    // Generic Post Method
    if ($_SERVER["REQUEST_METHOD"]==="POST"){
        $post1 = $_POST['var1'];
        echo "request was a post";
    }


    //POST - Add new article
    if (isset($_POST['insertarticle'])) {
        $review_data = json_decode(file_get_contents("php://input"));

        $new_url = $_POST['AlbumImgUrl'];
        $new_title = $_POST['AlbumTitle'];
        $new_artist_name = $_POST['ArtistName'];
        $new_label = $_POST['LabelName'];
        $new_year_released = $_POST['YearReleased'];
        $new_genre = $_POST['GenreID'];
        //$new_tag = $_POST['tagline'];
        $new_content = $_POST['ReviewContent'];
        $new_score = $_POST['Score'];
        $new_status = $_POST['BestNewMusicStatusID'];
        $new_author = $_POST['Author'];
        $new_authortype = $_POST['AuthorTypeID'];
        $new_datepub = $_POST['DatePublished'];
        $new_daypub = $_POST['DayPublishedID'];
        $new_yearpub = $_POST['YearPublished'];

        //album details
        $new_url = $data->AlbumImgUrl;
        $new_title = $data->AlbumTitle;
        $new_artist_name = $data->ArtistName;
        $new_label = $data->LabelName;       
        $new_year_released = $data->YearReleased;
        $new_genre = $data->GenreID;
        
        //review details
         //$new_tag =$data->tagline;     
        $new_content = $data->ReviewContent;
        $new_score = $data->Score;    
        $new_status = $data->BestNewMusicStatusID;
        $new_author = $data->Author;
        $new_authortype =$data->AuthorType;
        $new_datepub = $data->DatePublished;
        $new_daypub = $data->DayPublished;
        $new_yearpub = $data->YearPublished;


        // IS REVIEW DATA GOING TO BE CORRECT VAR?
        $query = "
        INSERT INTO 'SOUNDTRIBE_Author'('AuthorName') VALUES ($review_data);
        INSERT INTO 'SOUNDTRIBE_Label'('Label') VALUES ($review_data);   
        INSERT INTO 'SOUNDTRIBE_AlbumDetails'('AlbumImgUrl,AlbumTitle,ArtistName,LabelName,YearReleased,GenreID') VALUES ($review_data);
        INSERT INTO 'SOUNDTRIBE_ReviewArticleData'('ReviewAuthorID,DatePublished,DayPublishedID,YearPublished,AlbumDetailsID,ReviewContent,Score,BestNewMusicStatusID') VALUES ($review_data);";

        $result = $conn->query($query);

        if ($result) {
            echo json_encode(
                array('message' => 'review_data created')
            );
        } else {
            echo json_encode(
                array('message' => 'review_data NOT created')
            );
        }



} else {
    echo json_encode(
        array('message' => 'Problem with API')
    );
}