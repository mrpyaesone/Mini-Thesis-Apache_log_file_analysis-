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
				<td>access_log2</td>
			</tr>
			<tr>
				<td>First visit</td>
				<td>05/May/2013 - 04:07:14</td>
			</tr>
			<tr>
				<td>Last visit</td>
				<td>06/May/2013 - 19:15:51</td>
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
				<td>754</td>
				<td>11756</td>
				<td>5294</td>
				<td>4.97088 GB</td>
			</tr>
		</tbody>
	</table>
</body>
</html>
