<?php
require 'autoloader.inc.php';

//static arrays with data




function getEpisodes(){
    $episodes = array();
    $json = getJson("Episode");
    $jsonArray = json_decode($json);



    foreach ($jsonArray as $jsonEpisode){
        //episode as associative array
        $assArrEpisode = json_decode($jsonEpisode, true);
        $assArrSeason = $assArrEpisode["Season"];
        $assArrShow = $assArrEpisode["Season"]["Show"];

        $franchise = $assArrShow["Franchise"];

        if(is_null($franchise)){
            $franchise = new Franchise(-1, "");
        };

        $show = new Adaptation(
            (int) $assArrShow["Id"],
            (string) $assArrShow["Title"],
            (string) $assArrShow["OriginalTitle"],
            (string) $assArrShow["Description"],
            (array) $assArrShow["Genre"],
            $franchise
        );


        print("<br><br>");


        /*

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

    return $episodes;
}


// Add if  not exists function : gets type + obj. looks if exists in list. adds if not


function getJson(string $endUrl){
    $data = file_get_contents('http://localhost/api/api/'.$endUrl);
    return $data;
}