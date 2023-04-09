<?php

echo "<h1>Hello World</h1>\n";
$greetings = "Hello World";

echo $greetings;

$add = 1 + 2;
$substraction = 3 - 1;
$power = 2 ** 3;
$mod = 10 % 2;

$firstname = "Jos";
$lastname = "Buttler";

$fullname = "<p>$firstname $lastname</p>";
echo $fullname;

$quote = "\"Books, like friends should be few but well chosen\" ";
echo $quote;

$fullname = $firstname . $lastname;
echo $fullname;

$one = 1;
$two = 2;
var_dump($one == $two);
var_dump($one > $two);
var_dump($one < $two);
var_dump($one >= $two);
var_dump($one <= $two);

//if condn
$animal = "cow";

if ($animal == "cow") {
    echo "Mooo...";
} else if ($animal == "dog") {
    echo "woof...";
} else {
    echo "I am not an animal";
}


//switch statement
$food = "apples";
switch ($food) {
    case "apples";
        echo "Eating an apple";
        break;
    case "oranges";
        echo "Eating an oranges";
        break;
    default:
        echo "No food .I'm hungry";
}

//while loop 
$num = 5;
while ($num > 0) {
    echo "while loop $num\n";
    $num--;
}

//for loop
for ($i = 0; $i < 5; $i++) {
    echo "for loop $i\n";
}

//array
$fruits = ["apples", "oranges", "berries"];
echo $fruits[2];
$fruits[] = "pineapple";
var_dump($fruits);

foreach ($fruits as $fruits) {
    echo $fruits;
}

$vehicles = [
    'brand' => "Maruti",
    "color" => "Red",
];
echo $vehicles['brand'];
echo $vehicles['color'];

function helloworld()
{
    echo "Hello World";
}

$add = function ($a, $b) {
    return $a + $b;
};

echo $add(5, 2);
helloworld();
?>