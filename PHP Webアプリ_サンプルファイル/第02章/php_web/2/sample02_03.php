<?php
define("FILE_NAME", "counter.txt");

$fp = fopen(FILE_NAME, "r+");
if ($fp === FALSE) {
	exit("ファイルをオープンすることができません。");
}

if (flock($fp, LOCK_EX) === TRUE) {
	$count = intVal(fread($fp, 10));
	$count++;
	
	rewind($fp);
	
	if (fwrite($fp, $count) !== FALSE) {
		echo "アクセス数 ： {$count}";
	}
	
	flock($fp, LOCK_UN);
} else {
	echo "ファイルロックに失敗しました。";
}

fclose($fp);
?>