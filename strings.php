<?php

    $ad = "Ahmet";
    $soyad = "KARAKAYA";
    $yas = 20;

    $mesaj = "Benim Adım $ad Soyadım $soyad $yas yaşındayım";

    echo $mesaj."<br>";

    echo $mesaj[0]."<br>";
    echo $mesaj[1]."<br>";
    echo $mesaj[2]."<br>";

    echo strlen($mesaj)."<br>";
    echo strtolower($mesaj)."<br>";
    echo strtoupper($mesaj)."<br>";
    echo ucfirst($mesaj)."<br>";
    echo str_word_count($mesaj)."<br>";
    echo str_replace("Ahmet","Mehmet",$mesaj)."<br>";

?>