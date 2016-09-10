<?php
	$frequentList = array();
	$fileName = "Test.txt";
	$lineCount = 0;

	$handle = fopen($fileName, "r");
	if ($handle) {
		while (($line = fgets($handle)) !== false) {
        	if($line != "\n"){
        		$lineCount++;
        		//continue;
        	}

        	if (array_key_exists($line, $frequentList)) {
    			//echo "The 'first' element is in the array";
    			$count = $frequentList[$line];
			}else {
				$count = 0;
			}
        	/*$count2 = $frequentList[$line];
        	echo "Count2 is : ".$count2;*/
        	//echo "Hellp";
        	if ($count == 0) {
				$frequentList[$line] = 1;
			} else {
				$frequentList[$line] = ++$count;
			}

			/*$page['Home']='index.html';
			$page['Service']='services.html';
			foreach($page as $key => $value) {
  				echo $key." is at ".$value."<br>";
			}*/
     	}
     	echo "Line Cout is : ".$lineCount."<br>";

     	arsort($frequentList);
     	$top10 = 0;
     	foreach($frequentList as $key => $value) {
     		$top10++;
     		if ($top10 <= 20) {
     			echo $key." is at ".$value."<br>";
     		}
		}
	} else {
		echo "Error in file opening.";
	}
	
?>