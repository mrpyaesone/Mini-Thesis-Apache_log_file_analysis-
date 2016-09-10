#! /bin/bash
#Generate Activity.html table
filename=$1
uniqVisitorW=($(./Uniq\ visitors\ by\ week.sh $filename))
hitW=($(./Hits\ by\ day\ of\ Week.sh $filename))
pageW=($(./Page\ View\ by\ Week.sh $filename))
bandwidthW=($(./Bandwidth\ by\ Week.sh $filename))

uniqVisitorM=($(./Uniq\ Visitor\ by\ Month.sh $filename))
hitM=($(./Hits\ by\ Month.sh $filename))
pageM=($(./Page\ View\ by\ Month.sh $filename))
bandwidthM=($(./Bandwidth\ by\ Month.sh $filename))
loopL=$(./Uniq\ Visitor\ by\ Month.sh $filename | wc -l)
cat <<_EOF_
<!DOCTYPE html>
<html id="content">
<head>
	<title>Activity</title>
	<style type="text/css" media="screen">
	table{
		width: 100%;
		table-layout: fixed;
	}

	table.m{
    			border-collapse: collapse;
	}

	.monthHead{
		background-color: #eee;
		color: #2A1D1D;
	}

	.uniqVisit{
		background-color: #D54242;
		color: #2A1D1D;
	}

	.pages{
		background-color: #E1C62D;
		color: #2A1D1D;
	}

	.hits{
		background-color: #D34DD5;
		color: #2A1D1D;
	}

	.bandwidth{
		background-color: #BB9494;
		color: #2A1D1D;
	}

	table#month tr:nth-child(even) {
 								   background-color: #fff;
	}
	table#month tr:nth-child(odd) {
   								background-color:#eee;
	}
	</style>
</head>
<body>
	<table class="m" id="month">
		<caption>Monthly activity</caption>
		<thead>
			<tr>
				<th class="monthHead">Month</th>
				<th class="uniqVisit">Unique visitors</th>
				<th class="pages">Pages</th>
				<th class="hits">Hits</th>
				<th class="bandwidth">Bandwidths</th>
			</tr>
		</thead>
		<tbody>
_EOF_
for ((index=0; index<${#uniqVisitorM[*]}; index+=3))
do
cat <<_EOF_
	<tr>
		<td>${uniqVisitorM[$index]}  ${uniqVisitorM[$index+1]}</td>
		<td>${uniqVisitorM[$index+2]}</td>
		<td>${hitM[$index+2]}</td>
		<td>${pageM[$index+2]}</td>
		<td>${bandwidthM[$index+2]} GB</td>
	</tr>
_EOF_
done
			
cat <<_EOF_
		</tbody>
	</table>
_EOF_
cat <<_EOF_
	<table class="m" id="month">
		<caption>Daily activity</caption>
		<thead>
			<tr>
				<th class="monthHead">Day</th>
				<th class="uniqVisit">Unique visitors</th>
				<th class="pages">Pages</th>
				<th class="hits">Hits</th>
				<th class="bandwidth">Bandwidths</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Sunday</td>
				<td>${uniqVisitorW[1]}</td>
				<td>${hitW[1]}</td>
				<td>${pageW[1]}</td>
				<td>${bandwidthW[1]} MB</td>
			</tr>
			<tr>
				<td>Monday</td>
				<td>${uniqVisitorW[3]}</td>
				<td>${hitW[3]}</td>
				<td>${pageW[3]}</td>
				<td>${bandwidthW[3]} MB</td>
			</tr>
			<tr>
				<td>Tuesday</td>
				<td>${uniqVisitorW[5]}</td>
				<td>${hitW[5]}</td>
				<td>${pageW[5]}</td>
				<td>${bandwidthW[5]} MB</td>
			</tr>
			<tr>
				<td>Wednesday</td>
				<td>${uniqVisitorW[7]}</td>
				<td>${hitW[7]}</td>
				<td>${pageW[7]}</td>
				<td>${bandwidthW[7]} MB</td>
			</tr>
			<tr>
				<td>Thursday</td>
				<td>${uniqVisitorW[9]}</td>
				<td>${hitW[9]}</td>
				<td>${pageW[9]}</td>
				<td>${bandwidthW[9]} MB</td>
			</tr>
			<tr>
				<td>Friday</td>
				<td>${uniqVisitorW[11]}</td>
				<td>${hitW[11]}</td>
				<td>${pageW[11]}</td>
				<td>${bandwidthW[11]} MB</td>
			</tr>
			<tr>
				<td>Saturday</td>
				<td>${uniqVisitorW[13]}</td>
				<td>${hitW[13]}</td>
				<td>${pageW[13]}</td>
				<td>${bandwidthW[13]} MB</td>
			</tr>
		</tbody>
	</table>
</body>
</html>
_EOF_
