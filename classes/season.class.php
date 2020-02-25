<?php

class Season extends MetaData {
    private adaptation $show;

    public function __construct(int $id, string $title, string $originalTitle = "", string $description = "", $show=null)
    {
        parent::__construct($id, $title, $originalTitle, $description);
        if(!is_null($show)){
            $this->show = $show;
        }

    }

    public function setShow(Adaptation $show)
    {
        $this->show = $show;
    }

    public function getShow()
    {
        return $this->show;
    }

    /**
     * since Variables need instance of object and null is not possible - return sample object, which is Invalid and therefore can be handled as default
     */
    public function getNull()
    {
        return new Season(-1, "");
    }

}
?>