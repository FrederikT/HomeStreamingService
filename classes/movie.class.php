<?php

class Movie extends Adaptation
{
    private int $duration;
    private string $filePath;

    public function __construct(int $id, string $title, string $originalTitle = null, string $description = null, array $genre = null, Franchise $franchise = null, int $duration = null, string $filePath = null)
    {
        parent::__construct($id, $title, $originalTitle, $description, $genre, $franchise);
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

