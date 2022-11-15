<?php 
    //импорти (виж index.php)
    require_once "Luck.php";
    require_once "FortuneCookie.php";
    require_once "Jar.php";

    //(виж index.php за обяснение)
    $jar = new Jar();
    $jar->add(new FortuneCookie(new Luck("some message")));
    echo $jar->draw()->open()->read();
    $jar->draw(); //тук реално ще хвърли изключението, защото сме добавили само 1 бисквитка, пък втори път бъркаме в буркана
?>