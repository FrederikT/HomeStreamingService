<?php

class Franchise {
    private string $name;
    private int $id;

    public function __construct(int $id = -1, string $name)
    {
        $this->name = $name;
        $this->id = $id;
    }


    public function setName(string $name)
    {
        $this->name = $name;
    }
    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getId()
    {
        return $this->id;
    }

    public function equals(franchise $franchise){
        if($this->id == $franchise->getId()){
            return true;
        }
        return false;
    }
}

?>