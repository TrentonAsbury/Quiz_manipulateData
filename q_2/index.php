<?php
/*
 * Name: Trenton Asbury
 * Quiz: 2
 * Date: 2-14-2017
 * Class: CIS 2250
 */


	$title = "Quiz 2";

?>

<DOCTYPE html>
<HTML><HEAD>
<TITLE>TA::<?php echo $title;  ?></TITLE>
</HEAD>

<BODY>

	<?php
		
		$place = "Dayton";
		$course = "php";
		$text = "We teach " . $course . " courses in " . $place;
		echo "$text" . "<br><br>";
		
		$text2 = "Today flower shops sell lots of Flowers.";
		echo "New String: " . "$text2" . "<br>";
		echo "Number of Characters: " . (strlen($text2)). "<br>";
		echo "Number of words: " . (str_word_count($text2)) . "<br>";
		echo "Upper Case: " . (strtoupper($text2)) . "<br>";
		echo "Lower Case: " . (strtolower($text2)) . "<br>";
		echo "Only Display Flowers: " . (substr($text2, 32)) . "<br>";
		echo "Reverse the phrase: " . (strrev($text2)) . "<br>";
		echo "Shuffle: " . (str_shuffle($text2)) . "<br>";
		echo "Crypt: " . (md5($text2)) . "<br>";
		echo "Replace Flowers with Roses: " . str_replace("Flowers", "Roses", $text2);
		
		
		
	?>







</BODY>

</HTML> 