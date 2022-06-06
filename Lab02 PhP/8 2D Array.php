<?php

$input=array(
array( 1,2,3, "A" ),
array( 1,2,"B", "C" ),
array( 1,"D","E","F" )
);

print_r($input);
echo "<br>";
echo "<br>";
echo "<br>";

echo $input[0][0]; echo $input[0][1]; echo $input[0][2];
echo "<br>";
echo $input[1][0]; echo $input[1][1];
echo "<br>";
echo $input[2][0];

echo "<br>";
echo "<br>";
echo "<br>";

echo $input[0][3];
echo "<br>";
echo $input[1][2]; echo $input[1][3];
echo "<br>";
echo $input[2][1]; echo $input[2][2]; echo $input[2][3];



?>