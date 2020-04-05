<?php
include_once 'includes/controller.inc.php';
include_once 'includes/NullClasses.inc.php';


/*
    $shows = Controller::getShows();
   //var_dump($shows);

    // Constructors currently do not work
    // handle null values in children before calling constructor
   $movie = new Movie(5, "yee");
   Controller::loadAll();

    $controller = new Controller();

    $movieList = $controller::getMovies();
    $movie = NullClasses::getMovie();
    $movie = $movieList[0];
    echo $movie->getTitle();


    $episode = NullClasses::getEpisode();
    $episode = $controller::getEpisode(10);


    echo $episode->getTitle();

*/

/*

function post(){
    $url = 'http://localhost/api/api/Show';
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, [
        'Title' => 'Yee',
        'OriginalTitle' => 'Yee',
        'FranchiseID' => '13'
    ]);



    $response = curl_exec($ch);
    echo 'Status-Code: ' . curl_getinfo($ch, CURLINFO_HTTP_CODE);
    echo '<pre>';print_r(json_decode($response, true));echo'</pre>';
    var_dump($response);
    curl_close($ch);
}
*/


Controller::loadAll();
print_r(Controller::getMovieFullMatchByGenre("Anime"));

