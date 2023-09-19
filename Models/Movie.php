<?php
    class Movie {
        public $title;
        public $description;
        public $year;
        public $actors;

        function __construct($_title, $_year, )
        {
            $this->title = $_title;
            $this->year = $_year;           
        }

        public function fullTitle(){
            return $this->title . "(". $this->year. ")";
        }
    };
?>