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

	/*.warn{
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
	}*/
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
		<td>103.22.201.135</td>
		<td>HK, Hong Kong</td>
		<td>1029</td>
		<td>13.632 MB</td>
	</tr>
	<tr class="warn">
		<td>108.162.245.179</td>
		<td>US, United States</td>
		<td>278</td>
		<td>94.269 MB</td>
	</tr>
	<tr class="warn">
		<td>::1</td>
		<td>can'tresolve hostname</td>
		<td>212</td>
		<td>0.000 MB</td>
	</tr>
	<tr class="warn">
		<td>resolve</td>
		<td>hostname( </td>
		<td>0</td>
		<td>0.000 MB</td>
	</tr>
	<tr class="warn">
		<td>173.245.62.99</td>
		<td>US, United States</td>
		<td>177</td>
		<td>4.158 MB</td>
	</tr>
	<tr class="warn">
		<td>173.245.49.118</td>
		<td>US, United States</td>
		<td>162</td>
		<td>74.582 MB</td>
	</tr>
	<tr class="warn">
		<td>108.162.231.111</td>
		<td>US, United States</td>
		<td>151</td>
		<td>3.252 MB</td>
	</tr>
	<tr class="warn">
		<td>108.162.215.197</td>
		<td>US, United States</td>
		<td>139</td>
		<td>3.122 MB</td>
	</tr>
	<tr class="warn">
		<td>173.245.56.181</td>
		<td>US, United States</td>
		<td>95</td>
		<td>1.013 MB</td>
	</tr>
	<tr class="warn">
		<td>108.162.237.178</td>
		<td>US, United States</td>
		<td>62</td>
		<td>12.638 MB</td>
	</tr>
	<tr class="warn">
		<td>108.162.215.111</td>
		<td>US, United States</td>
		<td>61</td>
		<td>3.753 MB</td>
	</tr>
		</tbody>
	</table>
</body>
</html>
