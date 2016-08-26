#! /bin/bash
#Top 10 404 Errors file(.ico/.css/.js/etc.) with hit count
#cat access_log3 | awk '($9 ~ /404/)' | awk '{ print $7 }' | sort | uniq -c | sort -rn | head -n 10
filename=$1
error=($(grep " 404 " $filename | cut -d ' ' -f 7 | sort | uniq -c | sort -nr | head))
cat <<_EOF_
<!DOCTYPE html>
<html id="ErrorId">
<head>
	<title>404 Errors File Lists</title>
	<style type="text/css" media="screen">
	table{
		width: 100%;
		table-layout: fixed;

	}
	table#errors tr:nth-child(even) {
 								background-color: #fff;
	}
	table#errors tr:nth-child(odd) {
   								background-color:#eee;
	}
	caption{
		font-family: Serif;
		font-size: 20px;
		font-style: oblique;
		color: #254ED9;
	}
	#urlRefer{
		width: 90%;
	}
	#hitsNo{
		width: 10%;
	}
	th{
 	   background-color: #4CAF50;
       color: white;
	}

	</style>
</head>
<body>
	<table id="errors">
		<caption>404( Page Not Found ) Errors</caption>
		<thead>
			<tr>
				<th id="urlRefer">Target URL/Referrer</th>
				<th id="hitsNo">Hits</th>
			</tr>
		</thead>
		<tbody>
_EOF_

for ((index=0; index<${#error[*]}; index+=2))
do
cat <<_EOF_
	<tr>
		<td>${error[$index+1]}</td>
		<td>${error[$index]}</td>
	</tr>
_EOF_
done

cat <<_EOF_
		</tbody>
	</table>
</body>
</html>
_EOF_
