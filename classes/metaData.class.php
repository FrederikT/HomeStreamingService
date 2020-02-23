<?php

 class MetaData{
    private  int $id;
    private  string $title;
    private  string $originalTitle;
    private  string $description;

    public function __construct(int $id, string $title, string $originalTitle = Null, string $description = Null)
    {
        $this->id = $id;
        $this->title = $title;
        $this->originalTitle = $originalTitle;
        $this->description = $description;
    }

     public function setId(int $id)
     {
         $this->id = $id;
     }
     public function setTitle(string $title)
     {
         $this->title = $title;
     }
     public function setOriginalTitle(string $originalTitle)
     {
         $this->originalTitle = $originalTitle;
     }
     public function setDescription(string $description)
     {
         $this->description = $description;
     }

     public function getId()
     {
         return $this->id;
     }
     public function getTitle()
     {
         return $this->title;
     }
     public function getOriginalTitle()
     {
         return $this->originalTitle;
     }
     public function getDescription()
     {
         return $this->description;
     }

     public function equals(MetaData $meta){
         if($this->id == $meta->getId()){
             return true;
         }
         return false;
     }

    public function toString()
    {
        $str = $this->originalTitle . " , " . $this->title . " , " . $this->description . "; \n";
        return s;
    }


}

?>