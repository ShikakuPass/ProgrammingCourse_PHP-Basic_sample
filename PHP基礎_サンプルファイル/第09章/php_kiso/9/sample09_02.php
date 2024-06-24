<?php
$data = 60;

if (0 <= $data && $data < 30) {
	echo "ランクC";
} else if (30 <= $data && $data < 60) {
	echo "ランクB";
} else if (60 <= $data && $data <= 100) {
	echo "ランクA";
} else {
	echo "該当なし";
}
?>