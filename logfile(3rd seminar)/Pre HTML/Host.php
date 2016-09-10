<!DOCTYPE html>
<html>
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
	</style>
</head>
<body>
	<table id="host">
		<caption>Hosts ( Top 10 )</caption>
		<thead>
			<tr>
				<th>IP Address</th>
				<th>Country ( Region )</th>
				<th>Hits</th>
				<th>Bandwidth</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>205.167.170.15</td>
				<td>US,United-States</td>
				<td>15695</td>
				<td>799.130 MB</td>
			</tr>
			<tr>
				<td>79.142.95.122</td>
				<td>RU,Russian-Federation</td>
				<td>3207</td>
				<td>13.253 MB</td>
			</tr>
			<tr>
				<td>52.22.118.215</td>
				<td>US,United-States</td>
				<td>734</td>
				<td>8.559 MB</td>
			</tr>
			<tr>
				<td>84.112.161.41</td>
				<td>AT,Austria-</td>
				<td>712</td>
				<td>16.382 MB</td>
			</tr>
			<tr>
				<td>91.200.12.22</td>
				<td>UA,Ukraine-</td>
				<td>287</td>
				<td>1.190 MB</td>
			</tr>
		</tbody>
	</table>
</body>
</html>