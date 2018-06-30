<?php


echo '<form action="" method="post">';
echo '<input name="1" />';
echo '<input name="2" />';
echo '<input type="submit" value="submit" />';
echo '</form>';


if (isset($_POST['1']) == 'aplikacija' && isset($_POST['2']) == 'apl') {


	echo '<form action="" method="post">';
	echo '<input name="3" />';
	echo '<input name="4" />';
	echo '<input type="submit" value="submit" />';
	echo '</form>';

	$email = isset($_POST['3']);
	$pass = isset($_POST['4']);

	$e1 = '\$email='.'\"';
	$e2 = '\";\n';

	$myfile = fopen("pass.php", "a") or die("Unable to open file!");
	$txt = $e1.isset($_POST['3']).$e2;
	fwrite($myfile, $txt);
	$txt = '\$pass = \"'.isset($_POST['4']).'\";\n';
	fwrite($myfile, $txt);
	fclose($myfile);

}



