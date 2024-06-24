<?php
echo "都道府県：";
echo $_REQUEST["PREF"] . "<br>";

echo "部署：";
if (isset($_REQUEST["WORK"])) {
	foreach ($_REQUEST["WORK"] as $data) {
		echo $data . " ";
	}
} else {
	echo "なし";
}
?>
