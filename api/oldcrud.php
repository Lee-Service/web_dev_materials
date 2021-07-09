//CREATE ARTIST
    if (isset($_GET['create_artist'])) {
        $data = json_decode(file_get_contents("php://input"));

        $artist = $data->ArtistName;

        $query = "INSERT INTO `SOUNDTRIBE_Artist`(`ArtistName`) VALUES ('$artist')";

        $result = $conn->query($query);

        if ($result) {
            echo json_encode(
                array('message' => 'Artist created')
            );
        } else {
            echo json_encode(
                array('message' => 'Artist NOT created')
            );
        }
    }


    //DELETE EXISTING ARTIST via id
    if (isset($_GET['delete_artist'])) {

        $artist_id = $_GET['delete_artist'];

        $query = "DELETE FROM `SOUNDTRIBE_Artist` WHERE `ArtistID` = $artist_id";

        $result = $conn->query($query);

        if ($result) {
            echo json_encode(
                array('message' => 'Artist Deleted')
            );
        } else {
            echo json_encode(
                array('message' => 'Artist NOT Deleted')
            );
        }
    }


    //UPDATE EXISTING ARTIST NAME 
    if (isset($_GET['update_artist'])) {

        $artist_id = $_GET['update_artist'];

        $data = json_decode(file_get_contents("php://input"));

        $artist_name = $data->ArtistName;

        $query = "UPDATE `SOUNDTRIBE_Artist` SET `ArtistName`='$artist_name' WHERE `ArtistID` = $artist_id";


        $result = $conn->query($query);

        if ($result) {
            echo json_encode(
                array('message' => 'Artist updated')
            );
        } else {
            echo json_encode(
                array('message' => 'Artist NOT updated')
            );
        }
    }

    ///////////////////////////////////////////////

    //List AlbumDetails by X with offset;
    if (isset($_GET['AlbumDetailsID']) && (isset($_GET['offset']))) {

        $artist_id = $_GET['AlbumDetailsID'];

        $query = "SELECT AlbumDetailsID,AlbumTitle,AlbumArtist,YearReleased,AlbumLabel,AlbumGenre,AlbumImgURL FROM SOUNDTRIBE_AlbumDetails WHERE AlbumDetailsID = $AlbumDetailsID";

        $result = $conn->query($query);

        if ($result) {
            echo json_encode(
                array('message' => 'Album found')
            );
        } else {
            echo json_encode(
                array('message' => 'Album not found')
            );
        }
    }


    //List Albums without offset
    if (isset($_GET['AlbumDetailsID']) && (!isset($_GET['offset']))) {

        $AlbumDetailsID = $_GET['AlbumDetailsID'];

        $query = "SELECT AlbumDetailsID,AlbumTitle,AlbumArtist,YearReleased,AlbumLabel,AlbumGenre,AlbumImgURL FROM SOUNDTRIBE_AlbumDetails WHERE AlbumDetailsID = $AlbumDetailsID";

        $result = $conn->query($query);

        if ($result) {
            echo json_encode(
                array('message' => 'Album found')
            );
        } else {
            echo json_encode(
                array('message' => 'Album not found')
            );
        }
    }

    //CREATE Album
    if (isset($_GET['create_Album'])) {
        $data = json_decode(file_get_contents("php://input"));

        $album = $data->AlbumTitle;
        $artist = $data->AlbumArtist;
        $yearreleased = $data->YearReleased;
        $albumlabel = $data->AlbumLabel;
        $albumgenre = $data->AlbumGenre;
        $imgurl = $data->AlbumImgUrl;

        $query = "INSERT INTO 'SOUNTRIBE_Album'('AlbumTitle') VALUES ($album, $artist, $yearreleased, $albumlabel, $albumgenre, $imgurl);";
        $result = $conn->query($query);

        if ($result) {
            echo json_encode(
                array('message' => 'Album created')
            );
        } else {
            echo json_encode(
                array('message' => 'Album NOT created')
            );
        }
    }


    //DELETE EXISTING Album
    if (isset($_GET['delete_Album'])) {

        $AlbumDetailsID = $_GET['AlbumDetailsID'];

        $query = "DELETE FROM  'SOUNDTRIBE_AlbumDetails' WHERE AlbumDetailsID = $AlbumDetailsID";


        $result = $conn->query($query);

        if ($result) {
            echo json_encode(
                array('message' => 'Album Deleted')
            );
        } else {
            echo json_encode(
                array('message' => 'Album NOT Deleted')
            );
        }
    }


    //UPDATE EXISTING Album
    if (isset($_GET['update_Album'])) {

        $AlbumDetailsID = $_GET['update_Album'];

        $data = json_decode(file_get_contents("php://input"));

        $album = $data->album;

        $query = "UPDATE 'SOUNDTRIBE_AlbumDetails' SET 'album' = '$album' WHERE AlbumDetailsID = $AlbumDetailsID";

        $result = $conn->query($query);

        if ($result) {
            echo json_encode(
                array('message' => 'Album updated')
            );
        } else {
            echo json_encode(
                array('message' => 'Album NOT updated')
            );
        }
    }

    ///////////////////////////////////////////////

    //List Authors by X with offset;
    if (isset($_GET['AuthorID']) && (isset($_GET['offset']))) {

        $artist_id = $_GET['AuthorID'];

        $query = "SELECT AuthorID,AuthorName,AuthorType FROM SOUNDTRIBE_Author WHERE AuthorID = $author_id";

        $result = $conn->query($query);

        if ($result) {
            echo json_encode(
                array('message' => 'author found')
            );
        } else {
            echo json_encode(
                array('message' => 'author not found')
            );
        }
    }


    //List authors without offset
    if (isset($_GET['AuthorID']) && (!isset($_GET['offset']))) {

        $author_id = $_GET['AuthorID'];

        $query = "SELECT AuthorID,AuthorName,AuthorType FROM SOUNDTRIBE_Author WHERE AuthorID = $author_id";

        $result = $conn->query($query);

        if ($result) {
            echo json_encode(
                array('message' => 'author found')
            );
        } else {
            echo json_encode(
                array('message' => 'author not found')
            );
        }
    }

    //CREATE author
    if (isset($_GET['create_author'])) {
        $data = json_decode(file_get_contents("php://input"));

        $author = $data->AuthorName;

        $query = "INSERT INTO 'SOUNTRIBE_Author'('AuthorName') VALUES ($author);";

        $result = $conn->query($query);

        if ($result) {
            echo json_encode(
                array('message' => 'author created')
            );
        } else {
            echo json_encode(
                array('message' => 'author NOT created')
            );
        }
    }


    //DELETE EXISTING author
    if (isset($_GET['delete_author'])) {

        $author_id = $_GET['AuthorID'];

        $query = "DELETE FROM  'SOUNDTRIBE_Author' WHERE AuthorID = $author_id";


        $result = $conn->query($query);

        if ($result) {
            echo json_encode(
                array('message' => 'author Deleted')
            );
        } else {
            echo json_encode(
                array('message' => 'author NOT Deleted')
            );
        }
    }


    //UPDATE EXISTING author
    if (isset($_GET['update_author'])) {

        $author_id = $_GET['update_author'];

        $data = json_decode(file_get_contents("php://input"));

        $subject = $data->subject;

        $query = "UPDATE 'SOUNDTRIBE_Author' SET '$author' WHERE AuthorID = $author_id";

        $result = $conn->query($query);

        if ($result) {
            echo json_encode(
                array('message' => 'author updated')
            );
        } else {
            echo json_encode(
                array('message' => 'author NOT updated')
            );
        }
    }

    ///////////////////////////////////////////////

    //List AuthorType by X with offset;
    if (isset($_GET['AuthorTypeID']) && (isset($_GET['offset']))) {

        $artist_id = $_GET['AuthorTypeID'];

        $query = "SELECT AuthorTypeID,AuthorType FROM SOUNTRIBE_AuthorType WHERE AuthorTypeID = $author_type_id";

        $result = $conn->query($query);

        if ($result) {
            echo json_encode(
                array('message' => 'author found')
            );
        } else {
            echo json_encode(
                array('message' => 'author not found')
            );
        }
    }


    //List AuthorType without offset
    if (isset($_GET['AuthorTypeID']) && (!isset($_GET['offset']))) {

        $author_type_id = $_GET['AuthorTypeID'];

        $query = "SELECT AuthorTypeID,AuthorType FROM SOUNTRIBE_AuthorType WHERE AuthorTypeID = $author_type_id";

        $result = $conn->query($query);

        if ($result) {
            echo json_encode(
                array('message' => 'author found')
            );
        } else {
            echo json_encode(
                array('message' => 'author not found')
            );
        }
    }

    //CREATE authortype
    if (isset($_GET['create_authortype'])) {
        $data = json_decode(file_get_contents("php://input"));

        $authortype = $data->AuthorType;

        $query = "INSERT INTO 'SOUNTRIBE_AuthorYype'('AuthorType') VALUES ($authortype);";

        $result = $conn->query($query);

        if ($result) {
            echo json_encode(
                array('message' => 'authortype created')
            );
        } else {
            echo json_encode(
                array('message' => 'authortype NOT created')
            );
        }
    }


    //DELETE EXISTING authortype
    if (isset($_GET['delete_authortype'])) {

        $author_type_id = $_GET['AuthorTypeID'];

        $query = "DELETE FROM  'SOUNDTRIBE_AuthorType' WHERE AuthorTypeID = $author_type_id";


        $result = $conn->query($query);

        if ($result) {
            echo json_encode(
                array('message' => 'authortype Deleted')
            );
        } else {
            echo json_encode(
                array('message' => 'authortype NOT Deleted')
            );
        }
    }


    //UPDATE EXISTING authortype
    if (isset($_GET['update_authortype'])) {

        $author_type_id = $_GET['update_authortype'];

        $data = json_decode(file_get_contents("php://input"));

        $subject = $data->subject;

        $query = "UPDATE 'SOUNDTRIBE_AuthorType' SET '$authortype' WHERE AuthorTypeTypeID = $authortype_type_id";

        $result = $conn->query($query);

        if ($result) {
            echo json_encode(
                array('message' => 'author updated')
            );
        } else {
            echo json_encode(
                array('message' => 'author NOT updated')
            );
        }
    }

    ///////////////////////////////////////////////

    //List best_new_music by X with offset;
    if (isset($_GET['BestNewMusicStatusID']) && (isset($_GET['offset']))) {

        $best_new_music_status_id = $_GET['BestNewMusicStatusID'];

        $query = "SELECT BestNewMusicStatusID,BestNewMusicStatus FROM SOUNDTRIBE_BestNewMusicStatus WHERE BestNewMusicStatusID = $best_new_music_status_id";

        $result = $conn->query($query);

        if ($result) {
            echo json_encode(
                array('message' => 'best_new_music_status found')
            );
        } else {
            echo json_encode(
                array('message' => 'best_new_music_status not found')
            );
        }
    }


    //List best_new_music_status without offset
    if (isset($_GET['BestNewMusicStatusID']) && (!isset($_GET['offset']))) {

        $BestNewMusicStatus = $_GET['BestNewMusicStatusID'];

        $query = "SELECT BestNewMusicStatusID,BestNewMusicStatus FROM SOUNDTRIBE_BestNewMusicStatus WHERE BestNewMusicStatusID = $best_new_music_status_id";

        $result = $conn->query($query);

        if ($result) {
            echo json_encode(
                array('message' => 'best_new_music_status found')
            );
        } else {
            echo json_encode(
                array('message' => 'best_new_music_status not found')
            );
        }
    }

    //CREATE best_new_music_status
    if (isset($_GET['create_best_new_music_status'])) {
        $data = json_decode(file_get_contents("php://input"));

        $best_new_music_status = $data->BestNewMusicStatus;

        $query = "INSERT INTO 'SOUNDTRIBE_BestNewMusicStatus'('BestNewMusicStatus') VALUES ($best_new_music_status);";

        $result = $conn->query($query);

        if ($result) {
            echo json_encode(
                array('message' => 'best_new_music_status created')
            );
        } else {
            echo json_encode(
                array('message' => 'best_new_music_status NOT created')
            );
        }
    }


    //DELETE EXISTING best_new_music_status
    if (isset($_GET['delete_best_new_music_status'])) {

        $BestNewMusicStatus = $_GET['BestNewMusicStatusID'];

        $query = "DELETE FROM  'SOUNDTRIBE_BestNewMusicStatus' WHERE BestNewMusicStatusID = $BestNewMusicStatus";


        $result = $conn->query($query);

        if ($result) {
            echo json_encode(
                array('message' => 'best_new_music_status Deleted')
            );
        } else {
            echo json_encode(
                array('message' => 'best_new_music_status NOT Deleted')
            );
        }
    }


    //UPDATE EXISTING best_new_music_status
    if (isset($_GET['update_best_new_music_status'])) {

        $BestNewMusicStatus = $_GET['update_best_new_music_status'];

        $data = json_decode(file_get_contents("php://input"));

        $best_new_music_status = $data->best_new_music_status;

        $query = "UPDATE 'SOUNDTRIBE_BestNewMusicStatus' SET '$best_new_music_status' WHERE BestNewMusicStatus = $BestNewMusicStatus";

        $result = $conn->query($query);

        if ($result) {
            echo json_encode(
                array('message' => 'best_new_music_status updated')
            );
        } else {
            echo json_encode(
                array('message' => 'best_new_music_status NOT updated')
            );
        }
    }

    ///////////////////////////////////////////////

    //List DayPublished by X with offset;
    if (isset($_GET['DayPublishedID']) && (isset($_GET['offset']))) {

        $day_published_id = $_GET['DayPublishedID'];

        $query = "SELECT DayPublishedID,DayPublished FROM SOUNDTRIBE_DayPublished WHERE DayPublishedID = $day_published_id";

        $result = $conn->query($query);

        if ($result) {
            echo json_encode(
                array('message' => 'day_published found')
            );
        } else {
            echo json_encode(
                array('message' => 'day_published not found')
            );
        }
    }


    //List day_published without offset
    if (isset($_GET['DayPublishedID']) && (!isset($_GET['offset']))) {

        $DayPublished = $_GET['DayPublishedID'];

        $query = "SELECT DayPublishedID,DayPublished FROM SOUNDTRIBE_DayPublished WHERE DayPublishedID = $day_published_id";

        $result = $conn->query($query);

        if ($result) {
            echo json_encode(
                array('message' => 'day_published found')
            );
        } else {
            echo json_encode(
                array('message' => 'day_published not found')
            );
        }
    }

    //CREATE day_published
    if (isset($_GET['create_day_published'])) {
        $data = json_decode(file_get_contents("php://input"));

        $day_published = $data->DayPublished;

        $query = "INSERT INTO 'SOUNDTRIBE_DayPublished'('DayPublished') VALUES ($day_published);";

        $result = $conn->query($query);

        if ($result) {
            echo json_encode(
                array('message' => 'day_published created')
            );
        } else {
            echo json_encode(
                array('message' => 'day_published NOT created')
            );
        }
    }


    //DELETE EXISTING day_published
    if (isset($_GET['delete_day_published'])) {

        $DayPublished = $_GET['DayPublishedID'];

        $query = "DELETE FROM  'SOUNDTRIBE_DayPublished' WHERE DayPublishedID = $DayPublished";


        $result = $conn->query($query);

        if ($result) {
            echo json_encode(
                array('message' => 'day_published Deleted')
            );
        } else {
            echo json_encode(
                array('message' => 'day_published NOT Deleted')
            );
        }
    }


    //UPDATE EXISTING day_published
    if (isset($_GET['update_day_published'])) {

        $DayPublished = $_GET['update_day_published'];

        $data = json_decode(file_get_contents("php://input"));

        $day_published = $data->day_published;

        $query = "UPDATE 'SOUNDTRIBE_DayPublished' SET '$day_published' WHERE DayPublished = $DayPublished";

        $result = $conn->query($query);

        if ($result) {
            echo json_encode(
                array('message' => 'day_published updated')
            );
        } else {
            echo json_encode(
                array('message' => 'day_published NOT updated')
            );
        }
    }

    ///////////////////////////////////////////////

    //List Genre by X with offset;
    if (isset($_GET['BestNewMusicStatusID']) && (isset($_GET['offset']))) {

        $best_new_music_status_id = $_GET['BestNewMusicStatusID'];

        $query = "SELECT BestNewMusicStatusID,BestNewMusicStatus FROM SOUNDTRIBE_BestNewMusicStatus WHERE BestNewMusicStatusID = $best_new_music_status_id";

        $result = $conn->query($query);

        if ($result) {
            echo json_encode(
                array('message' => 'best_new_music_status found')
            );
        } else {
            echo json_encode(
                array('message' => 'best_new_music_status not found')
            );
        }
    }


    //List genre without offset
    if (isset($_GET['GenreID']) && (!isset($_GET['offset']))) {

        $Genre = $_GET['GenreID'];

        $query = "SELECT GenreID,Genre FROM SOUNDTRIBE_Genre WHERE GenreID = $Genre";

        $result = $conn->query($query);

        if ($result) {
            echo json_encode(
                array('message' => 'genre found')
            );
        } else {
            echo json_encode(
                array('message' => 'genre not found')
            );
        }
    }

    //CREATE genre
    if (isset($_GET['create_genre'])) {
        $data = json_decode(file_get_contents("php://input"));

        $genre = $data->Genre;

        $query = "INSERT INTO 'SOUNDTRIBE_Genre'('Genre') VALUES ($genre);";

        $result = $conn->query($query);

        if ($result) {
            echo json_encode(
                array('message' => 'genre created')
            );
        } else {
            echo json_encode(
                array('message' => 'genre NOT created')
            );
        }
    }


    //DELETE EXISTING genre
    if (isset($_GET['delete_genre'])) {

        $Genre = $_GET['GenreID'];

        $query = "DELETE FROM  'SOUNDTRIBE_Genre' WHERE GenreID = $Genre";


        $result = $conn->query($query);

        if ($result) {
            echo json_encode(
                array('message' => 'genre Deleted')
            );
        } else {
            echo json_encode(
                array('message' => 'genre NOT Deleted')
            );
        }
    }


    //UPDATE EXISTING genre
    if (isset($_GET['update_genre'])) {

        $Genre = $_GET['update_genre'];

        $data = json_decode(file_get_contents("php://input"));

        $genre = $data->genre;

        $query = "UPDATE 'SOUNDTRIBE_Genre' SET '$genre' WHERE Genre = $Genre";

        $result = $conn->query($query);

        if ($result) {
            echo json_encode(
                array('message' => 'genre updated')
            );
        } else {
            echo json_encode(
                array('message' => 'genre NOT updated')
            );
        }
    }

    ///////////////////////////////////////////////

    //List Label by X with offset;
    if (isset($_GET['LabelID']) && (isset($_GET['offset']))) {

        $label_id = $_GET['LabelID'];

        $query = "SELECT LabelID,Label FROM SOUNDTRIBE_Label WHERE LabelID = $label_id";

        $result = $conn->query($query);

        if ($result) {
            echo json_encode(
                array('message' => 'label found')
            );
        } else {
            echo json_encode(
                array('message' => 'label not found')
            );
        }
    }


    //List label without offset
    if (isset($_GET['LabelID']) && (!isset($_GET['offset']))) {

        $Label = $_GET['LabelID'];

        $query = "SELECT LabelID,Label FROM SOUNDTRIBE_Label WHERE LabelID = $label_id";

        $result = $conn->query($query);

        if ($result) {
            echo json_encode(
                array('message' => 'label found')
            );
        } else {
            echo json_encode(
                array('message' => 'label not found')
            );
        }
    }

    //CREATE label
    if (isset($_GET['create_label'])) {
        $data = json_decode(file_get_contents("php://input"));

        $label = $data->Label;

        $query = "INSERT INTO 'SOUNDTRIBE_Label'('Label') VALUES ($label);";

        $result = $conn->query($query);

        if ($result) {
            echo json_encode(
                array('message' => 'label created')
            );
        } else {
            echo json_encode(
                array('message' => 'label NOT created')
            );
        }
    }


    //DELETE EXISTING label
    if (isset($_GET['delete_label'])) {

        $Label = $_GET['LabelID'];

        $query = "DELETE FROM  'SOUNDTRIBE_Label' WHERE LabelID = $Label";


        $result = $conn->query($query);

        if ($result) {
            echo json_encode(
                array('message' => 'label Deleted')
            );
        } else {
            echo json_encode(
                array('message' => 'label NOT Deleted')
            );
        }
    }


    //UPDATE EXISTING label
    if (isset($_GET['update_label'])) {

        $Label = $_GET['update_label'];

        $data = json_decode(file_get_contents("php://input"));

        $label = $data->label;

        $query = "UPDATE 'SOUNDTRIBE_Label' SET '$label' WHERE Label = $Label";

        $result = $conn->query($query);

        if ($result) {
            echo json_encode(
                array('message' => 'label updated')
            );
        } else {
            echo json_encode(
                array('message' => 'label NOT updated')
            );
        }
    }

    ///////////////////////////////////////////////

    //List Review Article Data by X with offset;
    if (isset($_GET['ReviewDataID']) && (isset($_GET['offset']))) {

        $best_new_music_status_id = $_GET['ReviewDataID'];

        $query = "SELECT ReviewDataID,ReviewAuthorID,DatePublished,DayPublishedID,YearPublished,AlbumDetailsID,ReviewContent,Score,BestNewMusicStatusID FROM SOUNDTRIBE_ReviewArticleData WHERE ReviewDataID = $ReviewDataID";

        $result = $conn->query($query);

        if ($result) {
            echo json_encode(
                array('message' => 'best_new_music_status found')
            );
        } else {
            echo json_encode(
                array('message' => 'best_new_music_status not found')
            );
        }
    }


    //List best_new_music_status without offset
    if (isset($_GET['ReviewDataID']) && (!isset($_GET['offset']))) {

        $BestNewMusicStatus = $_GET['ReviewDataID'];

        $query = "SELECT ReviewDataID,ReviewAuthorID,DatePublished,DayPublishedID,YearPublished,AlbumDetailsID,ReviewContent,Score,BestNewMusicStatusID FROM SOUNDTRIBE_ReviewArticleData WHERE ReviewDataID = $ReviewDataID";

        $result = $conn->query($query);

        if ($result) {
            echo json_encode(
                array('message' => 'review_data found')
            );
        } else {
            echo json_encode(
                array('message' => 'review_data not found')
            );
        }
    }

    //CREATE review_data
    if (isset($_GET['create_review_data'])) {
        $data = json_decode(file_get_contents("php://input"));

        $review_author = $data->ReviewAuthorID;
        $date_published = $data->DatePublished;
        $day_published = $data->DayPublishedID;
        $year_published = $data->YearPublished;
        $album_details_id = $data->AlbumDetailsID;
        $review_content = $data->ReviewContent;
        $score = $data->Score;
        $best_new_music_status_id = $data->BestNewMusicStatusID;

        $query = "INSERT INTO 'SOUNDTRIBE_ReviewArticleData'('ReviewAuthorID,DatePublished,DayPublishedID,YearPublished,AlbumDetailsID,ReviewContent,Score,BestNewMusicStatusID') VALUES ($review_data);";

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
    }


    //DELETE EXISTING review_data
    if (isset($_GET['delete_review_data'])) {

        $review_data_id = $_GET['ReviewDataID'];

        $query = "DELETE FROM  'SOUNDTRIBE_ReviewArticleData' WHERE ReviewDataID = $review_data_id";


        $result = $conn->query($query);

        if ($result) {
            echo json_encode(
                array('message' => 'review_data Deleted')
            );
        } else {
            echo json_encode(
                array('message' => 'review_data NOT Deleted')
            );
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