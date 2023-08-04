<?php

echo 'while started'.'<br/>';
$no=1;
while($no<=6)
{

echo 'hi'. $no .'<br />';

$no++;

}
echo 'while ended'.'<br/>';

echo '<br>';

echo 'do while started'.'<br/>';
$no=5;
do{
echo " hi $no"  .'<br >';
$no++;
}while($no<=6);
echo 'do while ended'.'<br/>';

echo '<br>';

echo 'do for loop ended'.'<br/>';
for($i=0; $i<=5; $i++){

echo "codeigniter4 learning $i".'<br>';

}
echo 'do for loop ended'.'<br/>';


echo '<br>';

echo ' foreach started'.'<br/>';
$name=array("kiran","shivanand","kammar","somu");
foreach($name as $key=>$value)
{
    echo $value.'<br>';
}

echo 'foreach ended'.'<br/>';

echo '<br/>';















?>