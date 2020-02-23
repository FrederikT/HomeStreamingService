<?php
include 'includes/metaData.inc.php';

class Season extends MetaData {
    private $show; //Type: Adaptation

    public function __construct()
    {
        parent::__construct();

        $this->name = $name
    }


    // Überladen nicht Möglich!!


    public Season(int id, Adaptation show,  string title, string originalTitle, string description) : base(id, title, originalTitle, description)
{
this.show = show;
}

public Season(int id, Adaptation show, string title) : base(id, title)
{
this.show = show;
}

public Season(MetaData meta, Adaptation show) : base(meta)
{
this.show = show;
}


public Adaptation Show
{
get => show;
set => show = value;
}

public Adaptation Show1
{
get => show;
set => show = value;
}
}
?>