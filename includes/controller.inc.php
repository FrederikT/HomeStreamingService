<?php
require 'autoloader.inc.php';

class Controller{

    //static arrays with data
    static $metaDataList = array();
    static $adaptationList = array();

    static $episodeList = array();
    static $seasonList = array();
    static $showList = array();

    static $movieList = array();

    static $genreList = array();
    static $franchiseList = array();


    static function getEpisodes(){

        if(empty(Controller::$episodeList)) {
            $json = Controller::getJson("Episode");
            $jsonArray = json_decode($json);
            foreach ($jsonArray as $jsonEpisode) {
                //associative arrays
                $assArrEpisode = json_decode($jsonEpisode, true);
                $assArrSeason = $assArrEpisode["Season"];
                $assArrShow = $assArrEpisode["Season"]["Show"];


                $franchise = $assArrShow["Franchise"];
                if (is_null($franchise)) {
                    $franchise = new Franchise(-1, "");
                } else {
                    Controller::addFranchise($franchise);
                }


                $show = new Adaptation(
                    (int)$assArrShow["Id"],
                    (string)$assArrShow["Title"],
                    (string)$assArrShow["OriginalTitle"],
                    (string)$assArrShow["Description"],
                    (array)$assArrShow["Genre"],
                    $franchise
                );

                Controller::addShow($show);

                $season = new Season(
                    (int)$assArrSeason["Id"],
                    (string)$assArrSeason["Title"],
                    (string)$assArrSeason["OriginalTitle"],
                    (string)$assArrSeason["Description"],
                    $show
                );

                Controller::addSeason($season);

                $episode = new Episode(
                    (int)$assArrEpisode["Id"],
                    (string)$assArrEpisode["Title"],
                    (string)$assArrEpisode["OriginalTitle"],
                    (string)$assArrEpisode["Description"],
                    (int)$assArrEpisode["Duration"],
                    (string)$assArrEpisode["FilePath"],
                    $season
                );

                Controller::addEpisode($episode);


                /*

                Example of $assArrEpisode [23/02/2020 21:23]

                [Duration] => 25
                [FilePath] =>
                [Season] => Array (
                    [Show] => Array (
                        [Genre] => Array ( )
                        [Franchise] =>
                        [Id] => 1
                        [Title] => that time i got reincarnated as a slime
                        [OriginalTitle] => Tensei Shitara slime datta ken
                        [Description] =>
                    )
                    [Id] => 16
                    [Title] => that time I got reincarnated as slime S1
                    [OriginalTitle] => tensura 1
                    [Description] =>
                )
                [Id] => 2
                [Title] => The storm dragon, verudora
                [OriginalTitle] => boufuu ryuu verudora
                [Description] =>

                */
            }
        }

        return Controller::$episodeList;
    }

    // get Franchise
    // get Genre
    // get Movie
    // get season
    // get Show





    // redundant Code to insure correct types (e.g. no episodes in movies)
    // Methods add object to list, if not already exists

    private static function addMetaData(MetaData $metaData){
       if (!in_array($metaData, self::$metaDataList)){
           array_push(self::$metaDataList, $metaData);
       }
    }

    private static function addAdaptation(Adaptation $adaptation){
        if (!in_array($adaptation, self::$adaptationList)){
            array_push(self::$adaptationList, $adaptation);
        }
    }

    private static function addEpisode(Episode $episode){
        if (!in_array($episode, self::$episodeList)){
            array_push(self::$episodeList, $episode);
        }
    }

    private static function addSeason(Season $season){
        if (!in_array($season, self::$seasonList)){
            array_push(self::$seasonList, $season);
        }
    }

    private static function addShow(Adaptation $show){
        if (!in_array($show, self::$showList)){
            array_push(self::$showList, $show);
        }
    }

    private static function addMovie(Movie $movie){
        if (!in_array($movie, self::$movieList)){
            array_push(self::$movieList, $movie);
        }
    }

    private static function addGenre(Genre $genre){
        if (!in_array($genre, self::$genreList)){
            array_push(self::$genreList, $genre);
        }
    }

    private static function addFranchise(Franchise $franchise){
        if (!in_array($franchise, self::$franchiseList)){
            array_push(self::$franchiseList, $franchise);
        }
    }


    //gets JSON From API
    static function getJson(string $endUrl){
        $data = file_get_contents('http://localhost/api/api/'.$endUrl);
        return $data;
    }
}