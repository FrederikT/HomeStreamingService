
<?php
    class Genre {
        private string $name;

        public function __construct(string $name)
        {
            $this->name = $name;
        }

        public function setName(string $name)
        {
            $this->name = $name;
        }

        public function getName()
        {
            return $this->name;
        }

        public function equals(Genre $genre){
            if($this->name == $genre->getName()){
                return true;
            }
            return false;
        }
    }
?>