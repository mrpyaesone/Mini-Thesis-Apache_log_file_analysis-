#! bin/bash
filename=$1
host=($(./Host.sh $filename))
cat <<_EOF_
<!DOCTYPE html>
<html id="hostId">
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

	.warn{
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
_EOF_

for ((index=0; index<${#host[*]}; index+=4))
do
	tmpCountry=${host[$index+1]}
	tmpCountry=${tmpCountry//,/, }
	country=${tmpCountry//-/ }
cat <<_EOF_
	<tr class="warn">
		<td>${host[$index]}</td>
		<td>$country</td>
		<td>${host[$index+2]}</td>
		<td>${host[$index+3]} MB</td>
	</tr>
_EOF_
done
cat <<_EOF_
		</tbody>
	</table>
</body>
</html>
_EOF_
