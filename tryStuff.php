<?php
include_once 'includes/controller.inc.php';
include_once 'includes/NullClasses.inc.php';
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