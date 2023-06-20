<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="header">
<h1> Nivin Shabat </h1>
</div>



    <div class="content">
        <h2 id="A"> Welcome to My Homework Website </h2>
        <h3 id="B"> I am possianate about photographal </h3>
    </div>

    <div class="question">
        <div class="qo-1">
            
        <p class="qo_item"> #1 </P>
        <P> Write a PHP function that accepts an array of integers and return a new array after removing odd
numbers.</P>
<?php
function removeOddNumbers($array) {
    $result = array();

    foreach ($array as $number) {
        if ($number % 2 == 0) { 
            $result[] = $number; 
        }
    }

    return $result;
}
$array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$resultArray = removeOddNumbers($array);
echo "<pre>";
print_r($resultArray);
echo "<pre>";
echo "<br>";
?>
   </div>

   <div class="qo-2">
<p class="qo_item"> #2 </P>
<p> Write a PHP function that accepts an array of strings and return the longest string found in the
array, the function should have a 2nd argument that will hold the index of the item that have the
longest string in the input array.</p>
<?php
function findLongestString($array, &$index) {
    $longestString = '';
    $index = -1;

    foreach ($array as $key => $string) {
        if (strlen($string) > strlen($longestString)) {
            $longestString = $string;
            $index = $key;
        }
    }

    return $longestString;
}
$strings = ['nivin', 'Ali', 'apple', 'banana', 'elephant'];
$index = -1;
$longestString = findLongestString($strings, $index);

echo "Longest string: " . $longestString . "\n";
echo "Index: " . $index . "\n";

?>

</div>

<div class="qo-3">
<p class="qo_item"> #3 </P>
<p> Write a function that accepts 2 arrays and return a new array that holds the value of
multiplying each item in the first array by the corresponding item in the second array.</p>
<?php
function multiplyArrays($array1, $array2) {
    $result = array();
    $length = max(count($array1), count($array2));//7

    for ($i = 0; $i < $length; $i++) {
        $value1 = isset($array1[$i]) ? $array1[$i] : 1;
        $value2 = isset($array2[$i]) ? $array2[$i] : 1;
        $result[] = $value1 * $value2;
    }

    return $result;
}


$array1=array(1,2,3,4,5,6,7);
$array2=array(3,4,5,6,7,8);

$resultArray=multiplyArrays($array1,$array2);
echo "<pre>";
print_r($resultArray);
echo "<pre>";
?>
</div>

<div class="qo-4">
<p class="qo_item"> #4 </P>
<p> Write a function to calculate the factorial of a number (a non-negative integer). The function
accepts the number as an argument.</p>

<?php
function calculateFactorial($number) {
    if ($number < 0) {
        return "Invalid input. The number must be non-negative.";
    }

    $factorial = 1;
    for ($i = 2; $i <= $number; $i++) {
        $factorial *= $i;
    }

    return $factorial;
}

echo "Factorial of 6 is " .calculateFactorial(6); 
echo"<br>"; 

?>

</div>
<div class="qo-5">
<p class="qo_item"> #5 </P>
<p>  Write a function to check whether a number is prime or not.</P>

<?php
function isPrime($number) {
    if ($number <= 1) {
        return false; // Numbers less than or equal to 1 are not prime
    }

    for ($i = 2; $i <= ($number / 2); $i++) {
        if ($number % $i === 0) {
            return false; // If the number is divisible by any number, it is not prime
        }
    }

    return true; // If the number is not divisible by any number, it is prime
}

$number = 2;
if (isPrime($number)) {
    echo $number . ' is prime.';
} else {
    echo $number . ' is not prime.';
}



?>

</div>



        
 
    
</body>
</html>