<?php
    class Adaptation extends MetaData {
        private array $genre;
        private Franchise $franchise;

        public function __construct(int $id, string $title, string $originalTitle = null, string $description = null, array $genre = null, Franchise $franchise = null)
        {
            parent::__construct($id, $title, $originalTitle, $description);
            $this->genre = $genre;
            $this->franchise = $franchise;
        }

        public function setGenre(array $genre)
        {
            $this->genre = $genre;
        }

        public function setFranchise(string $franchise)
        {
            $this->franchise = $franchise;
        }

        public function getGenre()
        {
            return $this->genre;
        }

        public function getFranchise()
        {
            return $this->franchise;
        }

        public function addGenre(Genre $genre){
            array_push($this->genre, $genre);
        }
 }

 ?>