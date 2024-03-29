<?php
 class Episode extends MetaData{
    private int $duration;
    private string $filePath;
    private Season $season;


    public function  __construct(int $id, string $title, string $originalTitle = "", string $description = "", int $duration = -1, string $filePath = "", $season = Null)
    {
        parent::__construct($id, $title, $originalTitle, $description);
        $this->duration = $duration;
        $this->filePath = $filePath;
        if(!is_null($season)){
            $this->season = $season;
        }

    }

     public function setDuration(int $duration)
     {
         $this->duration = $duration;
     }
     public function setFilePath(string $filePath)
     {
         $this->filePath = $filePath;
     }
     public function setSeason(Season $season)
     {
         $this->season = $season;
     }

     public function getDuration()
     {
         return $this->duration;
     }
     public function getFilePath()
     {
         return $this->filePath;
     }
     public function getSeason()
     {
         return $this->season;
     }

     public function toString()
     {
         return parent::toString();
     }
 }

