<html id="aprioriId">
<head>
	<title>Visited hosts</title>
	<style type="text/css" media="screen">
	table{
		width: 100%;
		table-layout: fixed;

	}
	/* tr:hover {
		background-color: #367C85
	} */
	table#host tr:nth-child(even) {
 								   background-color: #fff;
	}
	table#host tr:nth-child(odd) {
   								background-color:#eee;
	}
	caption{
		font-family: Serif;
		font-size: 20px;
		font-style: oblique;
		color: #227DD8;
	}
	th{
 	   background-color: #4CAF50;
       	   color: white;
	}

	/*.warn{
			color: red;
    		-webkit-animation: fadeinout 1s linear infinite;
    		animation: fadeinout 1s linear infinite;
		}	

		@-webkit-keyframes fadeinout {
  			0%,100% { opacity: 0; }
  			50% { opacity: 1; }
		}

		@keyframes fadeinout {
 			0%,100% { opacity: 0; }
  			50% { opacity: 1; }
	}*/
	</style>
</head>
<?php
	$frequentList = array();
	$fileName = "Test.txt";
	$lineCount = 0;
	//$secondCandidate = array();
	$seconditemSet=array();
	$frequentList2 = array();

	$URLList = array();

	$handle = fopen($fileName, "r");
	if ($handle) {
		while (($line = fgets($handle)) !== false) {
        	if($line != "\n"){
        		$lineCount++;
        		//continue;
        	}

			
        	$candidate = split(",", $line);

        	for ($i=0; $i < count($candidate); $i++) { 
        		//echo $candidate[$i]." ";

        		if (array_key_exists($candidate[$i], $frequentList)) {
    				//echo "The 'first' element is in the array";
    				$count = $frequentList[$candidate[$i]];
				}else {
					$count = 0;
				}
        		/*$count2 = $frequentList[$line];
        		echo "Count2 is : ".$count2;*/
        		//echo "Hellp";
        		if ($count == 0) {
					$frequentList[$candidate[$i]] = 1;
				} else {
					$frequentList[$candidate[$i]] = ++$count;
				}


        	}


        	
        	
        	

			/*$page['Home']='index.html';
			$page['Service']='services.html';
			foreach($page as $key => $value) {
  				echo $key." is at ".$value."<br>";
			}*/

			/*echo "FrequentList L1";
			for($x = 0; $x < count($frequentList); $x++) {
    			echo $frequentList[$x];
   				echo "<br>";
			}*/
     	}

     	echo "FrequentList L1 and Frequent count<br>Item-------Count<br>";
        foreach($frequentList as $key => $value) {
        	echo $key." is at ".$value."<br>";
     	}


		$secondCandidate = array();
		$sIndex = 0;
     	foreach($frequentList as $key => $value) {
        	if($value >= 3){
        		//echo $key." is at ".$value."<br>";
        		$secondCandidate[$sIndex++] = $key; 
        	}
     			
		}
		echo "<br><br>";

		echo "1st frequetn count C1(L2)<br>";
		foreach($secondCandidate as $key => $value) {
        	echo $key." is at ".$value."<br>";
     			
		}
		echo "<br><br>";


		echo "2nd frequent list and count L2<br>";
		$handle = fopen($fileName, "r");
		if ($handle) {
			while (($line = fgets($handle)) !== false) {
	        	if($line != "\n"){
	        		$lineCount++;
	        		//continue;
	        	}

	        	
	        	$url = split(",", $line);
	        	
	        	//echo "df ".count(split(",", $url));
	        	//echo $url."<br>";
	        	for ($i=0; $i < count($secondCandidate)-1; $i++) { 
	        		for ($j=$i+1; $j < count($secondCandidate); $j++) { 
	        			/*if (strpos($url, '44') !== false && strpos($url, '12') !== false) {
	    					echo 'true<br>';
						}*/
						/*if (strpos($url, $secondCandidate[$i]) !== false && strpos($url, $secondCandidate[$j]) !== false) {
	    					echo 'true';
						}*/

						
						if(strncmp($secondCandidate[$i], $line, count($secondCandidate[$i]) ) && strncmp($secondCandidate[$j], $line, count($secondCandidate[$j]) )){
							//echo "found is : ".$secondCandidate[$i].",".$secondCandidate[$j]."<br>";
							$tmp = $secondCandidate[$i].",".$secondCandidate[$j];
							array_push($seconditemSet, $tmp);
							//echo $tmp."<br>";
							//echo "vardumpi : ".var_dump($seconditemSet);
							if (array_key_exists($tmp, $frequentList2)) {
			    				//echo "The 'first' element is in the array";
			    				$count = $frequentList2[$tmp];
							}else {
								$count = 0;
							}
			        		/*$count2 = $frequentList[$line];
			        		echo "Count2 is : ".$count2;*/
			        		//echo "Hellp";
			        		if ($count == 0) {
								$frequentList2[$tmp] = 1;
							} else {
								$frequentList2[$tmp] = ++$count;
							}
							
						}
	        		}
	        	}
	        }
	    }

	    foreach($frequentList2 as $key => $value) {
        	echo $key." is at ".$value."<br>"; 
     	}

	    	/*$ar=array();
	    	array_push($ar,"1,2","1,2");*/
			$seconditemSet2 = array_unique($seconditemSet);
	        //echo "vardumpi : ".var_dump($seconditemSet2);

	        //echo "<br>"."3rd frequent item sets";
	        $thirdCandidate = array();
			$tIndex = 0;
     		foreach($frequentList2 as $key => $value) {
        		if($value >= 3){
        			//echo $key." is at ".$value."<br>";
        			$thirdCandidate[$tIndex++] = $key; 
        		}
     		}
		//echo "<br><br>";

     	echo "<br><br>2nd frequent count C2(L3)<br>";
     	foreach($thirdCandidate as $key => $value) {
        	echo $key." is at ".$value."<br>"; 
     	}

     	//echo "Line Cout is : ".$lineCount."<br>";

     	arsort($frequentList2);
     	$top10 = 0;
     	foreach($frequentList2 as $key => $value) {
     		$top10++;
     		if ($top10 <= 20) {
     			//echo $key." is at ".$value."<br>";
     		}
     		$urlN = split(",", $key);
     		$handle = fopen("Table.txt", "r");
     		$lineCount2 = 0;
			if ($handle) {
				while (($line = fgets($handle)) !== false) {
		        	if($line != "\n"){
		        		$lineCount2++;
		        		//continue;
		        	}
		        	if($urlN[0] == $lineCount2){
		        		array_push($URLList, $line);
		        		//echo $urlN[0]."#".$lineCount2."===".$line."------->";
		        	}else if($urlN[1] == $lineCount2){
		        		array_push($URLList, $line);
		        		//echo $urlN[1]."#".$lineCount2."===".$line;
		        	}
		        }
		    }
		}
	}else {
		echo "Error in file opening.";
	}

	//echo "Recommend URL reuslt list<br>";
	$URLList2=array_unique($URLList);
	
?>

     <body>
	<table id="host">
		<caption>Recommend URL reuslt lists( to increase traffic )</caption>
		<thead>
			<tr>
				<th>URL Link</th>
			</tr>
		</thead>
		<tbody>

			<?php
				foreach($URLList2 as $key => $value) {
     				//echo $key." is at ".$value."<br>";
     				echo "<tr>";
     					echo "<td>".$value."</td>";
     				echo  "</tr>";
     			}
			?>

		</tbody>
	</table>
</body>
</html>
