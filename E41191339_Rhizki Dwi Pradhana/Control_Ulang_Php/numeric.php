<?php
$number = array( 1, 2, 3, 4, 5,);
foreach( $number as $value )
{
    echo "Value is $value <br />";
}

$number[0] = "one";
$number[1] = "two";
$number[2] = "three";
$number[3] = "four";
$number[4] = "five";

foreach( array_reverse($number) as $key =>$value )

{
    echo "Value is $key = $value <br />";
    if ($key==2) {
    break;
    }
}
?>