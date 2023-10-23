<?php

include ('Calculator.php');

//initialiseren van  een object
$calc = new Calculator;
//Het object zijn functionaliteiten aanroepen om te gebruiken.
//echo $calc->Add(12,23);

//Abstract niet geinitialiseer zijn of rechtstreeks aanroepbaar
//-> Als er geen parameters in het object zitten
//Functie parameters vallen hier niet onder.
//in Abstract class is geen chaining mogelijk, object bestaat niet.
//echo Calculator2::Add(2,4);

// Chaining van objecten -> is een design pattern
$calcChaining = new Calculator3;

echo $calcChaining->Add(3,4)->Result();

echo $calcChaining->divide(2,6);
