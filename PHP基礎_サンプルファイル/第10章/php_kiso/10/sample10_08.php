<?php
$list = array(10, 20, -1, 30, -2, 40);

for ($i = 0; $i < count($list); $i++) {
	if ($list[$i] < 0) {
		continue;
	}
	
	echo $list[$i] . "<br>";
}
?>