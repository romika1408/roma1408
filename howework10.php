<?php
$pattern = '#a.b#' ;
$replacement = '!';
$subject = ' ahb acb aeb aeeb adcb axeb';
    $res1 = preg_replace ($pattern,$replacement,$subject);
        echo $res1;

        $br = '<br>';

echo $br;


$pattern = '#ab*a#' ;
$replacement = '!';
$subject = ' aa aba abba abbba abca abea';
    $res2 = preg_replace ($pattern,$replacement,$subject);
        echo $res2;

echo $br;


$pattern = '#ab?a#' ;
$replacement = '!';
$subject = 'aa aba abba abbba abca abea';
    $res3 = preg_replace ($pattern,$replacement,$subject);
        echo $res3;

echo $br;

 $pattern = '#(ab)+#' ;
 $replacement = '!';
 $subject = 'ab abab abab abababab abea';
 $res4 = preg_replace ($pattern,$replacement,$subject);
 echo $res4;

 echo $br;

 $pattern = '#2\+*3#';
  $replacement = '!';
  $subject = '23 2+3 2++3 2+++3 345 567';
  $res5 = preg_replace ($pattern,$replacement,$subject);
  echo $res5;
 
  echo $br;


  $pattern = '#abbbb+a#';
  $replacement = '!';
  $subject = 'aa aba abba abbba abbbba abbbbba';
  $res6 = preg_replace ($pattern,$replacement,$subject);
  echo $res6;
 
  echo $br;
