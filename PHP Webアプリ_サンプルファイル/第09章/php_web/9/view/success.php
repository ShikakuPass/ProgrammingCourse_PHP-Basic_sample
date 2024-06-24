<?php
session_start();

$user = $_SESSION["USER"];
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>MVCモデルによるシステム構築</title>
</head>
<body>
ようこそ！！<?= $user["name"] ?>さん。<br>

<form action="./../controller.php" method="post">
<input type="hidden" name="ACTION" value="LOGOUT">
<input type="submit" value="ログアウト">
</form>

</body>
</html>
