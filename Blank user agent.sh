#! /bin/bash
#A ‘blank’ user agent is typically an indication that the request is from an automated script or someone who really values their privacy. The following command will give you a list of ip addresses for those user agents so you can decide if any need to be blocked:
warnInfo="A blank user agent is typically an indication that the request is from an automated script or someone who really values their privacy. The following list of ip addresses for those user agents so you can decide if any need to be blocked."
#echo $warnInfo
filename=$1
blankUA=($(awk -F\" '($6 ~ /^-?$/)' $filename | awk '{print $1}' | sort | uniq -c | sort -nr | head))

cat <<_EOF_
<!DOCTYPE html>
<html id="bUAgentId">
<head>
	<title>Blank User Agent</title>
	<style type="text/css" media="screen">
	table{
		width: 100%;
		table-layout: fixed;

	}
	/* tr:hover {
		background-color: #367C85
	} */
	table#bAgent tr:nth-child(even) {
 								   background-color: #fff;
	}
	table#bAgent tr:nth-child(odd) {
   								background-color:#eee;
	}
	th{
 	   background-color: #4CAF50;
       color: white;
	}
	caption{
		font-family: Serif;
		font-size: 20px;
		font-style: oblique;
		color: #227DD8;
	}
	#bUAgentTh{
		width: 70%;
	}
	#hitsTh{
		width: 30%;
	}
	</style>
</head>
<body>
	<table id="bAgent">
		<caption>Blank User Agent</caption>
		<thead>
			<tr>
				<th id="bUAgentTh">IP Address Used Blank User Agent</th>
				<th id="hitsTh">Hits</th>
			</tr>
		</thead>
		<tbody>
_EOF_
for ((index=0; index<${#blankUA[*]}; index+=2))
do
cat <<_EOF_
	<tr>
		<td>${blankUA[$index+1]}</td>
		<td>${blankUA[$index]}</td>
	</tr>
_EOF_
done
cat <<_EOF_
		</tbody>
	</table>
</body>
</html>
_EOF_
