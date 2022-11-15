<?php 
    class Luck {
        private $fortune;

        //конструктор - приема fortune, което е текста на късметчето
        public function __construct($fortune) {
            $this->fortune = $fortune;
        }

        //прочитаме късметчето (връща ни текста)
        public function read() {
            return $this->fortune;
        }
    }
?>