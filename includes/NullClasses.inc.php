<?php
include_once 'autoloader.inc.php';
/**
 * since Variables need instance of object and null is not possible - return sample object, which is "Invalid" and therefore can be handled as default/null
 */
class NullClasses{

    static function getAdaptation(){
        $adaptationObj = new Adaptation(-1, "");
        return $adaptationObj;
    }

    static function getEpisode(){
        $episodeObj = new Episode(-1, "");
        return $episodeObj;
    }

    static function getFranchise(){
        $franchiseObj = new Adaptation(-1, "");
        return $franchiseObj;
    }

    static function getGenre(){
        $genreObj = new Genre( "");
        return $genreObj;
    }

    static function getMetaData(){
        $metaDataObj = new MetaData(-1, "");
        return $metaDataObj;
    }

    static function getMovie(){
        $movieObj = new Movie(-1, "");
        return $movieObj;
    }

    static function getSeason(){
        $seasonObj = new Season(-1, "");
        return $seasonObj;
    }


}