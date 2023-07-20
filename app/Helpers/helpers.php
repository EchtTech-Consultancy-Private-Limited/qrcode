<?php

function encode5t($str)
{
  for($i=0; $i<5;$i++) //increase the level
  {
$str=strrev(base64_encode($str)); //apply base64 first and then reverse the string
  }
  return $str;
}


//function to decrypt the string
function decode5t($str)
{
  for($i=0; $i<5;$i++)
  {
    $str=base64_decode(strrev($str));
  }
  return $str;
}
?>
