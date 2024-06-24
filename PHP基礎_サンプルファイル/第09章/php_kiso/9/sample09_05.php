<?php
$month = 1;

switch ($month) {
	case  1 : case  3  : case  5  : case  7  : 
	case  8 : case 10  : case 12  : 
		echo "３１日ある月です。";
		break;
	case  4 : case  6  : case  9  : case 11  : 
		echo "３０日ある月です。";
		break;
	case  2 : 
		echo "２８日あるいは２９日ある月です。";
		break;
}
?>