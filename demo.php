<?php
$getName = "Park";
echo $getName;
define('LAST_NAME', 'The last name');

echo LAST_NAME;
$age = 21;
echo $age . "<br>";

echo (gettype($age));
echo (gettype($getName));

$balance = 0.5;
echo (gettype($balance));
$is_login = true;

echo (gettype($is_login));
if ($is_login) {
    echo "Success";
} else {
    echo "Failure";
}

$names = array("Joy", "Joe", "Mark");
$score = [70, 56, 65, 90];
$names[2] = "Luke";
echo $names[2];

$staff = array("firstname" => "Noah", "lastname" => "Tobi");

$staff["firstname"] = "Aloma";
echo $staff["firstname"];

$schools = array(
    array("ksu", "abu"),
    array("uj", "atbu")
);
var_dump($schools);
echo ($schools[1][1]);
echo "<br>";

$length = count($names);

array_push($staff, 
["firstname" => "Joyce", "lastname" => "Morgan"]);

print_r($staff);

echo "<br>";
for ($i = 0; $i < $length; $i++) {
    echo $names[$i] . "<br>";
}
$count = 1;
while ($count < 10) {
    echo $count;
    $count++;
}
function squareNumber($num)
{
    return $num * $num;
}

echo squareNumber(10);
