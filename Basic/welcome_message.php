<?php

echo ' ===function started'.'<br/>';
function funName(){

    $value=array('kiran','somu','kammar');
    echo "<pre>";    
    print_r($value);
}
 funName();
echo ' ---function ended'.'<br/>';



echo '<br>';


echo ' ==function started'.'<br/>';
function name(){
    $age=array(
 'panipri'=>30,
 'sevPuri'=>40,
 'geeParota'=>60
    );
   print_r($age);
   
   echo '<br>'.   $age['panipri'];

}
 name();
echo ' ---function ended'.'<br/>';




echo ' ==function started'.'<br/>';
function multiDimentionalyy(){
  $multiDimentional=array(
    array('panipri'=>30,'sevPuri'=>40,'geeParota'=>60),
    array('kiran','somu','kammar')
  );  
   
    echo "<pre>";
    print_r($multiDimentional);

   //echo '<br>'.$multiDimentional['panipri'];
}
multiDimentionalyy();
echo ' ---function ended'.'<br/>';







?>