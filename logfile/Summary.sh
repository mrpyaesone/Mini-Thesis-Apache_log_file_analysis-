#! /bin/bash
#Summary Totoal 4 results
filename=$1
tmpDate=$(head -1 $filename | awk '{print $4}' | cut -d[ -f2)
startDate=${tmpDate/:/ - }
tmpDate=$(tail -1 $filename | awk '{print $4}' | cut -d[ -f2)
endDate=${tmpDate/:/ - }
uniqVisitor=$(cat $filename | awk '{ print $1 }' | sort | uniq -c | wc -l)
hits=$(cat $filename | wc -l)
page=$(cat $filename | egrep -vc '(\.gif |\.jpg |\.png|\.jpeg|\.txt|\.js|\.css|\.zip|\.pdf|\.swf|\.tar.gz|\.7z|\.json|\.ico|\.sql.gz|\.sql|\.rar|\.gz|\.bz2|\.tar|\.tgz|\.log )')
bandwidth=$(awk '{print $10}' $filename | awk '{s+=$1} END {print s/1024/1024/1024}' )
cat <<_EOF_
<!DOCTYPE html>
<html id="summarId">
<head>
	<title>Summar</title>
	<style type="text/css" media="screen">
		table{
			width: 100%;
			table-layout: fixed;
		}
		#generalSum{
			font-family: Serif;
			font-size: 20px;
			font-style: oblique;
		}
		table.sumtable td,th{
			border: 0px solid;
    			border-collapse: collapse;
    			text-align: center;
		}

		#viewTraf{
			background-color:#7C6C6C;
		}
		.uniqVisit{
			background-color: #D54242;
		}
		.pages{
			background-color: #E1C62D;
		}
		.hits{
			background-color: #D34DD5;
		}
		.bandwidth{
			background-color: #BB9494;
		}

		.logName{
			width: 20%;
		}
	</style>
</head>
<body>
	<center id="generalSum">Summary</center>

	<table>
		<tbody>
			<tr>
				<td class="logName">Log File Name</td>
				<td>$filename</td>
			</tr>
			<tr>
				<td>First visit</td>
				<td>$startDate</td>
			</tr>
			<tr>
				<td>Last visit</td>
				<td>$endDate</td>
			</tr>
		</tbody>
	</table>

	<table class="sumtable">
		<thead>
			<tr>
				<th id="viewTraf"></th>
				<th class="uniqVisit">Unique visitors</th>
				<th class="pages">Pages</th>
				<th class="hits">Hits</th>
				<th class="bandwidth">Bandwidths</th>
			</tr>
		</thead>
		<tbody>
			<tr id="sumHist">
				<td>Viewed traffic</td>
				<td>$uniqVisitor</td>
				<td>$hits</td>
				<td>$page</td>
				<td>$bandwidth GB</td>
			</tr>
		</tbody>
	</table>
</body>
</html>
_EOF_
#echo "`/bin/sh ./Summary.sh > Sum.html`"
