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
	<tr class="warn">
		<td>205.167.170.15</td>
		<td>US, United States</td>
		<td>31844</td>
		<td>1316.650 MB</td>
	</tr>
	<tr class="warn">
		<td>134.249.53.185</td>
		<td>UA, Ukraine </td>
		<td>17904</td>
		<td>73.910 MB</td>
	</tr>
	<tr class="warn">
		<td>192.227.172.158</td>
		<td>US, United States</td>
		<td>13474</td>
		<td>56.090 MB</td>
	</tr>
	<tr class="warn">
		<td>37.1.206.196</td>
		<td>NL, Netherlands </td>
		<td>3327</td>
		<td>13.656 MB</td>
	</tr>
	<tr class="warn">
		<td>79.142.95.122</td>
		<td>RU, Russian Federation</td>
		<td>3207</td>
		<td>13.253 MB</td>
	</tr>
	<tr class="warn">
		<td>78.186.191.187</td>
		<td>TR, Turkey </td>
		<td>2840</td>
		<td>11.756 MB</td>
	</tr>
	<tr class="warn">
		<td>200.148.166.42</td>
		<td>BR, Brazil </td>
		<td>2829</td>
		<td>11.813 MB</td>
	</tr>
	<tr class="warn">
		<td>149.56.81.58</td>
		<td>US, United States</td>
		<td>1520</td>
		<td>6.514 MB</td>
	</tr>
	<tr class="warn">
		<td>177.134.189.192</td>
		<td>BR, Brazil </td>
		<td>1353</td>
		<td>5.631 MB</td>
	</tr>
	<tr class="warn">
		<td>91.200.12.22</td>
		<td>UA, Ukraine </td>
		<td>1255</td>
		<td>5.178 MB</td>
	</tr>
		</tbody>
	</table>
</body>
</html>
