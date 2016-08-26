#! /bin/bash
filename=$1
IFS=$'\n'       # make newlines the only separator
hitUA=($(./User\ agent\ top\ 10.sh $filename | awk '{print $1}'))
userAgent=($(./User\ agent\ top\ 10.sh $filename | awk '{$1=""; print $0}'))
cat <<_EOF_
<!DOCTYPE html>
<html  id="uagentId">
<head>
	<title>User Agent</title>
	<style type="text/css" media="screen">
	table{
		width: 100%;
		table-layout: fixed;

	}
	/* tr:hover {
		background-color: #367C85
	} */
	table#agent tr:nth-child(even) {
 						background-color: #fff;
	}
	table#agent tr:nth-child(odd) {
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
	#uagentTh{
		width: 91%;
	}
	#hitsTh{
		width: 9%;
	}
	</style>
</head>
<body>
	<table id="agent">
		<caption>User Agent</caption>
		<thead>
			<tr>
				<th id="uagentTh">User Agent</th>
				<th id="hitsTh">Hits</th>
			</tr>
		</thead>
		<tbody>
_EOF_

for ((index=0; index<${#hitUA[*]}; index+=1))
do
#tmpName=${hitUA[$index]}
#nameUA=$(awk '{$1=""; print $0}')
cat <<_EOF_
	<tr>
		<td><a href="${userAgent[$index]}">${userAgent[$index]}</a></td>
		<td>${hitUA[$index]}</td>
	</tr>
_EOF_
done
cat <<_EOF_
		</tbody>
	</table>
</body>
</html>
_EOF_
