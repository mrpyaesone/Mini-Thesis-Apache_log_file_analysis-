#! /bin/bash
filename=$1
recent=($(./Most\ recent\ visitor.sh $filename))

cat <<_EOF_
<!DOCTYPE html>
<html id="mostRecentId">
<head>
	<title>Most Recent</title>
	<style type="text/css" media="screen">
	table{
		width: 100%;
		table-layout: fixed;

	}
	/* tr:hover {
		background-color: #367C85
	} */
	table#recent tr:nth-child(even) {
 								   background-color: #fff;
	}
	table#recent tr:nth-child(odd) {
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
		width: 70%;
	}
	#hitsTh{
		width: 30%;
	}
	</style>
</head>
<body>
	<table id="recent">
		<caption>Most recent visits</caption>
		<thead>
			<tr>
				<th id="uagentTh">Visitor</th>
				<th id="hitsTh">Time of Last Access</th>
			</tr>
		</thead>
		<tbody>
_EOF_

for ((index=0; index<${#recent[*]}; index+=3))
do
cat <<_EOF_
	<tr>
		<td>${recent[$index]}</td>
		<td>${recent[$index+1]} - ${recent[$index+2]}</td>
	</tr>
_EOF_
done

cat <<_EOF_
		</tbody>
	</table>
</body>
</html>
_EOF_
