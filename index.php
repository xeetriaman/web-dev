<?php
echo "<h1>Hello World</h1>";

echo "hi";

$greetings = "Hello World";
$_Variable = "anc";


echo $greetings;
$add = 1 + 2;
$subtraction = 3 - 1;
$power = 2 ** 3;
$mod = 10 & 2;

$firstName = "Joey";
$lastName = 'Johnson';

$fullname = "<p>$firstName $lastName</p>";

echo "$fullname\n";

$quote = " \"Books,like friends should be few but well chosen\" ";

echo $quote;

$fullname = $firstName . $lastName;
$one = 1;
$two = 2;

var_dump($one = $two);

var_dump($one < $two);
var_dump($one > $two);
var_dump($one >= $two);
var_dump($one <= $two);


echo $one = $two;

//IF Conditions
$animal = "Cow";
if ($animal = "Cow") {
    echo "Mooo....";
} else if ($animal = "Dog") {
    echo "Woof....";
} else {
    echo "Iam not an animal";
}

//Switch Statement

$food = "applies";
switch ($food) {
    case "apples":
        echo "Eating an apple";
        break;
    case "Oranges":
        echo "Eating an oranges";
        break;
    default:
        echo "No food.I'm hungry";
        break;
}


//While Loop
$num = 5;
while ($num > 0) {
    echo "while loop $num \n";
    $num--;
}

//For lOOP
for ($i = 0; $i < 5; $i++) {
    echo "Far loop $i\n";
}

//Array
$fruits = ["Äpples", "Oranges", "Berries"];
?>