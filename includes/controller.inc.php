<?php
include_once 'autoloader.inc.php';

class Controller{

    //static arrays with data
    static $metaDataList = array(); //Currently unused
    static $adaptationList = array(); //Currently unused

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


                $assArrFranchise = $assArrShow["Franchise"];
                if (is_null($assArrFranchise)) {
                    $franchise = new Franchise(-1, "");
                } else {
                    $franchise = new Franchise(
                        (int)$assArrFranchise["Id"],
                        (string)$assArrFranchise["Name"]);
                    // Adding to list here will deactivate if(empty), therefore currently not used
                    //Controller::addFranchise($franchise);
                }


                $show = new Adaptation(
                    (int)$assArrShow["Id"],
                    (string)$assArrShow["Title"],
                    (string)$assArrShow["OriginalTitle"],
                    (string)$assArrShow["Description"],
                    (array)$assArrShow["Genre"],
                    $franchise
                );

                // Adding to list here will deactivate if(empty), therefore currently not used
                //Controller::addShow($show);

                $season = new Season(
                    (int)$assArrSeason["Id"],
                    (string)$assArrSeason["Title"],
                    (string)$assArrSeason["OriginalTitle"],
                    (string)$assArrSeason["Description"],
                    $show
                );

                // Adding to list here will deactivate if(empty), therefore currently not used
                //Controller::addSeason($season);

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

    static function getFranchises(){

        if(empty(Controller::$franchiseList)) {
            $json = Controller::getJson("Franchise");
            $jsonArray = json_decode($json);

            foreach ($jsonArray as $jsonFranchise) {
                //associative array
                $assArrFranchise = json_decode($jsonFranchise, true);

                $franchise = new Franchise(
                    (int)$assArrFranchise["Id"],
                    (string)$assArrFranchise["Name"]);
                Controller::addFranchise($franchise);


                /*
                Example of $assArrFranchise [24/02/2020 16:44]
                [Name] => Fate
                [Id] => 12

                */
            }
        }

        return Controller::$franchiseList;
    }

    static function getGenre(){

        if(empty(Controller::$genreList)) {
            $json = Controller::getJson("Genre");
            $jsonArray = json_decode($json);

            foreach ($jsonArray as $jsonGenre) {
                //associative array
                $assArrGenre = json_decode($jsonGenre, true);

                $genre = new Genre((string)$assArrGenre["Name"]);
                Controller::addGenre($genre);

                /*
                Example of $assArrGenre [24/02/2020 16:47]
                [Name] => Anime
                */
            }
        }

        return Controller::$genreList;
    }

    static function getMovies(){

        if(empty(Controller::$movieList)) {
            $json = Controller::getJson("Movie");
            $jsonArray = json_decode($json);
            foreach ($jsonArray as $jsonMovie) {
                //associative arrays
                $assArrMovie = json_decode($jsonMovie, true);
                $assArrFranchise = $assArrMovie["Franchise"];
                if (is_null($assArrFranchise)) {
                    $franchise = new Franchise(-1, "");
                } else {
                    $franchise = new Franchise(
                        (int)$assArrFranchise["Id"],
                        (string)$assArrFranchise["Name"]);
                    // Adding to list here will deactivate if(empty), therefore currently not used
                    //Controller::addFranchise($franchise);
                }


                $movie = new Movie(
                    (int)$assArrMovie["Id"],
                    (string)$assArrMovie["Title"],
                    (string)$assArrMovie["OriginalTitle"],
                    (string)$assArrMovie["Description"],
                    (array)$assArrMovie["Genre"],
                    $franchise,
                    (int)$assArrMovie["Duration"],
                    (string)$assArrMovie["FilePath"],
                );

                Controller::addMovie($movie);


                /*

                Example of $assArrMovie [24/02/2020 16:58]

                [FilePath] =>
                [Duration] => 120
                [Genre] => Array (
                    [0] => Array (
                        [Name] => Anime
                    )
                )
                [Franchise] => Array (
                    [Name] => Fate
                    [Id] => 12
                )
                [Id] => 15
                [Title] => Fate/stay night: Heaven's Feel - I. Presage Flower
                [OriginalTitle] => 劇場版
                [Description] =>

                */
            }
        }

        return Controller::$movieList;
    }

    static function getSeasons(){

        if(empty(Controller::$seasonList)) {
            $json = Controller::getJson("Season");
            $jsonArray = json_decode($json);
            foreach ($jsonArray as $jsonSeason) {
                //associative arrays
                $assArrSeason = json_decode($jsonSeason, true);
                $assArrShow = $assArrSeason["Show"];

                $assArrFranchise = $assArrShow["Franchise"];
                if (is_null($assArrFranchise)) {
                    $franchise = new Franchise(-1, "");
                } else {
                    $franchise = new Franchise(
                        (int)$assArrFranchise["Id"],
                        (string)$assArrFranchise["Name"]);
                    // Adding to list here will deactivate if(empty), therefore currently not used
                    //Controller::addFranchise($franchise);
                }

                $show = new Adaptation(
                    (int)$assArrShow["Id"],
                    (string)$assArrShow["Title"],
                    (string)$assArrShow["OriginalTitle"],
                    (string)$assArrShow["Description"],
                    (array)$assArrShow["Genre"],
                    $franchise
                );

                // Adding to list here will deactivate if(empty), therefore currently not used
                //Controller::addShow($show);

                $season = new Season(
                    (int)$assArrSeason["Id"],
                    (string)$assArrSeason["Title"],
                    (string)$assArrSeason["OriginalTitle"],
                    (string)$assArrSeason["Description"],
                    $show
                );

                Controller::addSeason($season);

                /*

                Example of $assArrSeason [24/02/2020 17:07]

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

                */
            }
        }

        return Controller::$seasonList;
    }

    static function getShows()
    {

        if (empty(Controller::$showList)) {
            $json = Controller::getJson("Show");
            $jsonArray = json_decode($json);
            foreach ($jsonArray as $jsonShow) {
                //associative arrays
                $assArrShow = json_decode($jsonShow, true);

                $assArrFranchise = $assArrShow["Franchise"];
                if (is_null($assArrFranchise)) {
                    $franchise = new Franchise(-1, "");
                } else {
                    $franchise = new Franchise(
                        (int)$assArrFranchise["Id"],
                        (string)$assArrFranchise["Name"]);
                    // Adding to list here will deactivate if(empty), therefore currently not used
                    //Controller::addFranchise($franchise);
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


                /*

                Example of $assArrShow [24/02/2020 17:15]

                [Genre] => Array ( )
                [Franchise] =>
                [Id] => 1
                [Title] => that time i got reincarnated as a slime
                [OriginalTitle] => Tensei Shitara slime datta ken
                [Description] =>

                */
            }
        }
        return Controller::$showList;
    }

    // gets all info from api into static lists -> could be loaded at beginning in background to minimize load time
    static function loadAll(){
        Controller::getEpisodes();
        Controller::getFranchises();
        Controller::getGenre();
        Controller::getMovies();
        Controller::getSeasons();
        Controller::getShows();
    }



    //TODO return something if not exist.. should be clear that it doesnt exits -> null? (--> type errors)
    //Get Specific of Each Type
    //From List instead of API (Faster)
    static function getEpisode(int $id){

        foreach (self::$episodeList as $episode){
            if($episode->getId() == $id){
                return $episode;
            }
        }
    }

    static function getFranchise(int $id){
        foreach (self::$franchiseList as $franchise){
            if($franchise->getId() == $id){
                return $franchise;
            }
        }
    }

    static function getMovie(int $id){
        foreach (self::$movieList as $movie){
            if($movie->getId() == $id){
                return $movie;
            }
        }
    }

    static function getSeason(int $id){
        foreach (self::$seasonList as $season){
            if($season->getId() == $id){
                return $season;
            }
        }
    }

    static function getShow(int $id){
        foreach (self::$showList as $show){
            if($show->getId() == $id){
                return $show;
            }
        }
    }


    static function getSeasonsForShow(int $id){
        $seasons = array();
        foreach (self::$seasonList as $season){
            $show = NullClasses::getAdaptation();
            $show = $season->getShow();
            if($show->getId() == $id){
                array_push($seasons, $season);
            }
        }

        return $seasons;
    }

    static function getEpisodesForSeason(int $id){
        $episodes = array();
        foreach (self::$episodeList as $episode){
            $season = NullClasses::getSeason();
            $season = $episode->getSeason();
            if($season->getId() == $id){
                array_push($episodes, $episode);
            }
        }

        return $episodes;
    }


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