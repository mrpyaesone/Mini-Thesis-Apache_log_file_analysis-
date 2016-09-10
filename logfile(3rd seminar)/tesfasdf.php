<?php
	/*$str = "user1 A
			user2 B
			user4 C
			user2 D
			user1 E";

	$lines = explode("\n", $str);

	$arr = array();

	foreach($lines as $line) {
	    list($user, $letter) = explode(" ", $line);
	    $arr[$user][] = $letter;
	}

	//var_dump($arr);
	foreach ($arr as $name => $locations) {
    	foreach ($locations as $location) {
        	echo "{$name} is at {$location}<br />";
    	}
	}*/

	$uname = "UserName";
	$arr = array($uname => 'user' ,
        		'Email' => 'email');
	foreach($arr as $key => $value) {
  		echo $key." is at ".$value."<br>";
	}
	echo $arr[$uname];

?>