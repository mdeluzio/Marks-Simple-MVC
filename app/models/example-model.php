<?php
    /*
     * This is an example of the basic setup for a Model
     * The Model should be instantiated in the matching Controller
    */
    class Example {
        private $db;

        public function __construct(){
            $this->db = new Database;
        }
    }