<?php 
    class Jar {
        //това е масив, така се прави празен масив в php
        private $fortuneCookies = array();

        public function __construct() {
        }

        //добавяме нова бисквитка в буркана
        public function add(FortuneCookie $fortuneCookie) {
            $this->fortuneCookies[] = $fortuneCookie; //добавяне на елемент в масив
        }

        //връща броя бисквитки
        public function cookieCount() {
            return count($this->fortuneCookies);
        }

        //взимаме си няква бисквитка
        public function draw() {
            //ако броя на бисквитките (тук може да ползваме и горния метод) е по-голям от 0, то:
            if (count($this->fortuneCookies) > 0) {
                //взимаме индекса на бисквитката, която сме хванали
                $cookieIndex = array_rand($this->fortuneCookies); //array_rand връща произволен индекс от масива, това си идва от php
                $cookie = $this->fortuneCookies[$cookieIndex]; //взимаме бисквитката на съответния индекс

                //махаме бисквитката от масива (препоръчвам да си прочетете документацията на тоя метод)
                array_splice($this->fortuneCookies, $cookieIndex, 1);
                return $cookie;
            }
            
            //ако нямаме повече бисквитки в буркана, хвърляме изключение
            throw new Exception("Empty jar!");
        }
    }
?>