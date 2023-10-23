<?php
// Fizzbuzz - Alles gedeeld door 3 moet echo"en fizz en
// alles gedeeld door 5 moet buzz echo"en
// Als het gedeeld kan worden door 3 & 5 dan echo'en fizzbuzz.
for($c = 1; $c <= 15; $c++)
{
    // Conditie die het minst voor komt zetten we als eerste in de if
    // Zodat elke blok van de if correct wordt uitgevoerd en toegepast wordt
     if( $c % 3  == 0 && $c % 5 == 0) {
         echo $c . ": FizzBuzz" . PHP_EOL . "<br>";
     } elseif($c % 5 == 0){
         echo $c . ": Buzz" . PHP_EOL . "<br>";
     } elseif($c % 3  == 0 ){
         echo $c . ": Fizz" . PHP_EOL . "<br>";
     }
      else {
         echo $c.": ...".PHP_EOL."<br>";
      }
}