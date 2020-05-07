<?php
    class Adaptation extends MetaData {
        private array $genre;
        private Franchise $franchise;

        public function __construct(int $id, string $title, string $originalTitle = "", string $description = "", array $genre = array(),  $franchise = null)
        {
            parent::__construct($id, $title, $originalTitle, $description);
            if(!is_null($franchise)){
                $this->franchise = $franchise;
            }

            $this->genre = $genre;

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

        /**
         * since Variables need instance of object and null is not possible - return sample object, which is Invalid and therefore can be handled as default
         */
        public function getNull()
        {
            return new Adaptation(-1, "");
        }
 }

 ?>