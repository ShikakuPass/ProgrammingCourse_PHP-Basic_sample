<?php
echo "性別：";
echo $_REQUEST["SEIBETU"] . "<br>";

echo "好きな科目：";
if (isset($_REQUEST["KAMOKU"])) {
	foreach ($_REQUEST["KAMOKU"] as $data) {
		echo $data . " ";
	}
} else {
	print "なし";
}
?>
