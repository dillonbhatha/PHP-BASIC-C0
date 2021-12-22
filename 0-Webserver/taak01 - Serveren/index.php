<?php

//echo
echo "Hallo en Welkom! ";

$score = 0;

echo $score;

$naam = " Dillon";
$name = " Mijn naam is $naam";

echo $naam;
echo $name;

$leeftijd=20;
$mijnleeftijd=" Ik ben $leeftijd";

echo $mijnleeftijd;

$melk = "€1,00";
$melkprijs = " de huidige prijs van een pak melk $melk";

echo $melkprijs;

$x = true; // of
$x = false;

echo $x;    

//gettype
$voornaam = "Tom";
echo gettype($voornaam);

//string
$stringy = 1.249;
var_dump($stringy);

//float
$float = 1.234;
var_dump($float);

//boolean
$true = true;
$false = false;

//null
$null = "Hello world!";
$null = null;
var_dump($null);

//voornaam
$voornaam = "Dillon";
$leeftijd = 20;
echo "Jouw naam is $voornaam en je bent $leeftijd jaar oud.";

//ul
$voornaam1 = "Voornaam1";
$voornaam2 = "Voornaam2";
$voornaam3 = "Voornaam3";
echo "<li>$voornaam1</li><li>$voornaam2</li><li>$voornaam3</li>";

//String concatenation
$voornaam = "Dillon";
$leeftijd = 20;
echo "jouw naam is " .   $voornaam   .   " en je bent "    .   $leeftijd   .   " jaar oud";

$item = "<li>item 1</li>";
$item .= "<li>item 2</li>";
$item .= "<li>item 3</li>";

echo $item;

$voornaam = "Tom";
var_dump($voornaam);


?>