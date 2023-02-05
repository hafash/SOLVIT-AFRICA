<?php
/*PHP program that allow the user to provide a list of numbers and then 
the program calculate the sum and product of even numbers
 and odd numbers and display the result to the user
  */
 function calculate_sum_and_product($numbers)
{
$even_sum=0;
$odd_sum=0;
$even_product=1;
$odd_product=1;
foreach($numbers as $number)
{
    if(!is_numeric($number))
    {
        continue;
    }
    if($number%2==0)
    {
        $even_sum+=$number;
        $even_product*=$number;
    }
    else{
        $odd_sum+=$number;
        $odd_product*=$number;
    }
}
return['even_sum'=>$even_sum,
'even_product'=>$even_product,
'odd_sum'=>$odd_sum,
'odd_product'=>$odd_product,];

}
//Read the numbers from the user and store them in an array
echo "Enter a list of numbers, ";

$handle = fopen("php://stdin", "r");
$numbers_string = trim(fgets($handle));
$numbers = explode(" ", $numbers_string);
fclose($handle);
$result = calculate_sum_and_product($numbers);
//display

echo "The sum of even numbers is: " . $result['even_sum'] . "\n";
echo "The sum of odd numbers is: " . $result['odd_sum'] . "\n";
echo "The product of even numbers is: " . $result['even_product'] . "\n";
echo "The product of odd numbers is: " . $result['odd_product'] . "\n";


?>