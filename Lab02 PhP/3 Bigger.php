<?php
$input1 =15;
$input2 =5;
$input3 =100;

echo "$input1<br>"; echo "$input2 <br>"; echo "$input3<br>";

if ($input1>$input2 and $input1>$input3 )
{
echo "Number 1 $input1 is bigger";
}
elseif($input2>$input3 and $input2>$input1)
{
echo "Number 2 $input2 is bigger";
}

elseif($input3>$input1 and $input3>$input2)
{
echo "Number 3 $input3 is bigger";
}

?>