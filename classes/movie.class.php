<?php

class Movie extends Adaptation
{
    private int $duration;
    private string $filePath;

    public function __construct(int $id, string $title, string $originalTitle = "", string $description = "", array $genre = array(),  $franchise = null, int $duration = -1, string $filePath = "")
    {
        try {
            parent::__construct($id, $title, $originalTitle, $description, $genre, $franchise);
        }catch (TypeError $e){
            //Only $franchise can be of wrong type [if null defenitly is]
            $fra = NullClasses::getFranchise();
            parent::__construct($id, $title, $originalTitle, $description, $genre, $fra);
        }

        $this->filePath = $filePath;
        $this->duration = $duration;
    }


    public function setDuration(int $duration)
    {
        $this->duration = $duration;
    }

    public function setFilePath(string $filePath)
    {
        $this->filePath = $filePath;
    }

    public function getDuration()
    {
        return $this->duration;
    }

    public function getFilePath()
    {
        return $this->filePath;
    }


    public function toString()
    {
        return parent::toString() . "  duration: " . duration;
    }


}

