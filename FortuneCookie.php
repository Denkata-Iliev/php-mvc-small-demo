<?php
    class FortuneCookie {
        //полетата на класа
        private $luck;
        private $opened;

        //конструктор, който приема Luck luck (някво късметче)
        public function __construct(Luck $luck) {
            $this->luck = $luck;
            $this->opened = false;
        }

        //метод, който отваря бисквитката с късметче и връща самото късметче
        public function open() : Luck {
            $this->opened = true; //това е еквивалентно this.opened = true;
            return $this->luck;
        }

        //ядем бисквитката - ако е отворена - няма ядове, но ако не е - хвърляме exception със съответното съобщение
        public function eat() {
            if ($this->opened) {
                return true;
            }

            throw new Exception("You're eating a cookie with the luck still inside. You are choking!");
        }
    }
?>