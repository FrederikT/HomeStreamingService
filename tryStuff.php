<?php
require 'includes/controller.inc.php';

    $shows = Controller::getShows();
   //var_dump($shows);



    // Constructors currently do not work
    // handle null values in children before calling constructor
   $movie = new Movie(5, "yee");