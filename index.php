<?php
var_dump (3*4);
echo 5 * 6 / 2 + 2 * 3;
echo "<br>";

$array = array(0 => ‘blue’, 1 => ‘red’, 2 => ‘green’, 3 => ‘red’);


echo array_search(‘green’, $array)."<br>";
echo array_key_exists(2, $array)."<br>";
echo in_array(‘green’, $array)."<br>";
echo array_search(‘red’,$array)."<br>";

echo 0x500;