<?php

// 1- Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. 
// There will be no hyphen(-) at starting and ending positio
echo "First Problem :<br>";
        for($i=1; $i <= 10; $i++){
            if ($i > 1){
                echo "-";
            }
            echo $i;
        }
echo '<br>';    
echo '<br>';  
// 2- Write a script to remove the duplicated numbers from this array 
// then sort it Ascending
echo "Second Problem :<br>";
        $numbers = [ 1 , 1 ,  1 , 2 , 2, 3 ,6 , 7 , 7 ,4 ,5,5 ];
        $uniqueNumbers = array_unique($numbers);
        sort($uniqueNumbers);
        echo "Array after removing dublicates ".implode(', ',$uniqueNumbers).'<br>';
echo '<br>';
// 3- Write a program which will count the "r" characters in the text "eraasoft"
echo "Third Problem :<br>";
        $text = "eraasoft";
        $count = substr_count($text,'r');
        echo "The number of (r) characters in the text is $count<br>";
echo '<br>';  
// 4- Write a PHP program which iterates the integers from 1 to 50. For multiples of three
//  print "Fizz" instead of the number and for the multiples of five print "Buzz". 
//  For numbers which are multiples of both three and five print "FizzBuzz"
echo "Fourth Problem :<br>";
        for($i = 1; $i <= 5; $i++){
            if($i % 3 == 0 && $i % 5 == 0){
                echo "FizzBuzz";
            }elseif($i % 3 == 0){
                echo "Fizz";
            }elseif($i % 5 == 0){
                echo "Buzz";
            }else {
                echo $i . ' ';
            }
        }
echo '<br>';  
echo '<br>';  
// 5- Create a script using a for loop to add all the integers between 0 and 30 
// and display the total
echo "Fifth Problem :<br>";
        $total = 0;
        for($i = 0; $i <= 30; $i++){
            $total += $i;
        }
        echo "Sum Number Is $total<br>";
echo '<br>';
// 6- Create a function that takes an array of numbers & Return the Largest number in the array.
echo "Problem Number : 6<br>";
        $numbers = [ 5 , 15 , -10 , 100 , 250 , 0 , 1   ];
        $large_Number = max($numbers);
        echo "Largest Number is $large_Number<br>";
echo '<br>';
// 7- Create a function that takes an array of numbers. Return the Smallest number in the array
echo "Problem Number : 7<br>";
        $numbers = [ 5 , 15 , -10 , 100 , 250 , 0 , 1   ];
        $small_number = min($numbers);
        echo "Smaller Number is $small_number<br>";
echo '<br>';
// 8- Write a program to calculate and print the factorial of a number using a for loop. 
// The factorial of a number is the product of all integers up to and including that number
//  Example : the factorial of 4 is 4*3*2*1= 24
echo "Problem Number : 8<br>";
        function calculateFactorial($number){
            $factorial = 1;
            for($i = 1; $i <= $number; $i++){
                $factorial *= $i;
            }
            return $factorial;
        }
        $number = 4;
        $factorialResult = calculateFactorial($number);
        echo "The factorial of $number is : $factorialResult<br>";
echo '<br>';
// 9- Write a PHP program that prints the odd numbers from 1 to 15 using a while loop.
echo "Problem Number : 9<br>";
        $i = 1;    
        while($i <= 15){
            if ($i % 2 !== 0){
                echo "The Odd Numbers Is $i<br>";
            }
            $i++;
        }
echo '<br>';
// 10- Write a PHP program that prints the even numbers from 1 to 15 using a while loop.
echo "Problem Number : 10<br>";
        $evenNumber = 1;
        while($evenNumber <= 15){
            if($evenNumber % 2 == 0){
                echo "The Even Number Is $evenNumber<br>";
            }
            $evenNumber++;
        }
echo '<br>';
// 11- Write a PHP program that prints the keys and values of an associative array 
// using a foreach loop.
echo "Problem Number : 11<br>";
$sales = array("Jan" => 100, "Feb" => 200, "Mar" => 150);
foreach ($sales as $month => $value){
    print_r ($month . " : " . $value .' ');
}
echo '<br>';
echo '<br>';
// 12- Write a PHP program that calculates the sum of the values in an associative array
//  using a foreach loop.
echo "Problem Number : 12<br>";
$sales = array("Jan" => 100, "Feb" => 200, "Mar" => 150);
$sum = 0;
foreach($sales as $month => $value){
    $sum += $value;
}
echo $sum;
echo '<br>';
echo '<br>';
// 13- Write a PHP program that prints the multiplication table of 8 using for loop.
echo "Problem Number : 13<br>";
$number = 8;
for ($i=1; $i <= 10; $i++){
    $result = $number * $i;
    echo $result.'<br>';
}
echo '<br>';
// 14- Write a PHP program that prints the elements of a multidimensional array 
// using a nested foreach loop.
echo "Problem Number : 14<br>";
$students = array(
    array("name" => "John", "age" => 20, "grade" => "A"),
    array("name" => "Mary", "age" => 22, "grade" => "B"),
    array("name" => "Tom", "age" => 18, "grade" => "A")
);
foreach($students as $index){
    echo "Name Is : <br>";
    foreach($index as $key => $value){
        echo $key . ' : ' . $value . '<br>';
    }
}
echo '<br>';
// 15- Write a PHP program that prints all the numbers between 1 and 100 
// that are divisible by 3 using a do while loop.
echo "Problem Number : 15<br>";
$i = 1;
do{
    if($i % 3 == 0){
        echo $i . '<br>';
    }
    $i++;
}while($i <= 100);



