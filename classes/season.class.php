<?php

class Season extends MetaData {
    private adaptation $show;

    public function __construct(int $id, string $title, string $originalTitle = Null, string $description = Null, Adaptation $show)
    {
        parent::__construct($id, $title, $originalTitle, $description);
        $this->show = $show;
    }

    public function setShow(Adaptation $show)
    {
        $this->show = $show;
    }

    public function getShow()
    {
        return $this->show;
    }

}
?>