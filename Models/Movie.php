<?php
    class Movie {
        public $title;
        public $description;
        public $year;
        public $category;
        public $img;

        function __construct(string $_title, int $_year)
        {
            $this->title = $_title;
            $this->year = $_year;           
        }

        public function fullTitle(){
            return $this->title . "( ". $this->year. ")";
        }
    };
?>