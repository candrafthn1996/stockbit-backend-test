<?php

// $param = 'String Value'; /** string */
// $param = 1; /** int */
// $param = [1, 2]; /** array one dimensional */
$param = [1, 2, [21, 22, [221], 23], 3]; /** array multi dimensional */

function show($param) {
	$val = '';
	$type = gettype($param);
	if ($type === 'array') {
		foreach ($param as $arr) {
			$typeArr = gettype($arr);
			if ($type !== 'array') {
				$val .= $arr.'<br/>';
			}else {
				$val .= show($arr);
			}
		}
	} else {
		$val .= $param.'<br/>';
	}
	return $val;
}

$result = show($param);
echo $result;

?>
