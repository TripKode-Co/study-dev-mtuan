// <?php
//     // string, int, float, bool, array, object
//     // $<ten-bien> = <gia tri>
//     $name = "Tuan";
//     $age = 25;
//     $height = 1.75;
//     $is_single = true;
//     $skill = array("Design", "IT");
//
//     // Condition
//     if ($age >= 18) {
//         echo "du tuoi di tha giong roi";
//     } else {
//         echo "con non qua";
//     }
//
//     // Loop: for, while, foreach
//     // For loop
//     for ($height; $height <= 2; $height += 0.01) {
//         echo "Chieu cao: $height <br>";
//     }
//
//     // While loop
//     while ($age < 30) {
//         $age++;
//         echo "Age: $age <br>";
//     }
//
//     // Foreach loop
//     foreach($skill as $value) {
//         // Execution with value
//         echo "My skill: $value <br>";
//     }
//
//     // Function
//     function printText($text) {
//         return $text;
//     }
//     echo printText("Xin chao ditmemay");
//
// ?>

<?php
    echo "Bài 1: In Dãy Số <br>";
//     for($num; $num <= 100; $num++) {
//         $output = "";
//         if ($num % 3 == 0) {
//             $output = "$output Fizz";
//         }
//         if($num % 5 == 0) {
//             $output = "$output Buzz";
//         }
//         echo "Value: $output";
//     }

    for ($num = 1; $num <= 10; $num++) {
        if ($num % 3 == 0 && $num % 5 == 5) {
            echo "FizzBuzz<br>";
        } elseif ($num % 3 == 0) {
            echo "Fizz<br>";
        } elseif ($num % 5 == 0) {
            echo "Buzz<br>";
        } else {
            echo $num . "<br>";
        }
    }

    echo "Bài 1: In Dãy Số (Advance) <br>";
    for ($num = 1; $num <= 10; $num++) {
       echo ($num % 3 ? "" : "Fizz") . ($num % 5 ? "" : "Buzz") ?: $num;
       echo "<br>";
    }

    function checkPrimeNumber($value) {
        if($value < 2) {
            echo "$value is not prime number<br>";
            return;
        }
        for($i = 2; $i <= sqrt($value); $i++) {
            if($value % $i == 0) {
                echo "$value is not prime number<br>";
                return;
            }
        }
        echo "$value is prime number<br>";
    }

    echo checkPrimeNumber(3);

    function reverseString($value) {
        echo "Dao nguoc cua $value la " . strrev($value) . "<br>";
    }

    reverseString("Test");

   function findFactorNumber($value) {
       $factor = 1;
       if ($value == 0 || $value == 1) {
           echo "Giai thua cua $value la $factor";
       } else {
           for($i = 2; $i <= $value; $i ++) {
               $factor *= $i;
           }
           echo "Giai thua cua $value la $factor";
       }
   }

    findFactorNumber(5);

?>

