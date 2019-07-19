<?php

$input = "(23 Maret 2018) Some string is below here (please note below):
 The dummy formula is a=(x+y)-100.";

preg_match_all('#\((.*?)\)#', $input, $output);

foreach($output[1] as $result){
	echo $result.' ';
}
?>
