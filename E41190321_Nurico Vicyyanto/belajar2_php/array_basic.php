<?php
$punakawan = array("Semar","gareng","Petruk", "Bagong");
echo $punakawan[0];
echo "<br>";
echo $punakawan[3];
echo "<br>";

$punakawan[1]="Semar";
$punakawan[2]="Gareng";
$punakawan[3]="Petruk";
$punakawan[4]="Bagong";
echo $punakawan[3];
echo "<br>";
$j=0;
while($j<5){
    echo "Index ke : ".$punakawan[$j]."<br>";
    $j++;
}

foreach ($punakawan as $key =>$value){
    echo $value;
}
?>