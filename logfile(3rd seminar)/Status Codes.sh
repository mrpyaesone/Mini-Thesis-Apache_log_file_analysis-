#! /bin/bash
filename=$1
httpStatus=($(./HTTP\ Status\ codes.sh $filename))

cat <<_EOF_
<!DOCTYPE html>
<html id="httpCodeId">
<head>
	<title>HTTP Status Codes Information</title>
	<style type="text/css" media="screen">
	table{
		width: 100%;
		table-layout: fixed;

	}
	table#codeInfo tr:nth-child(even) {
 								   background-color: #fff;
	}
	table#codeInfo tr:nth-child(odd) {
   								background-color:#eee;
	}
	caption{
		font-family: Serif;
		font-size: 20px;
		font-style: oblique;
		color: #225BE9;
	}
	th{
 	   background-color: #4CAF50;
       color: white;
	}
	</style>
</head>
<body>
	<table id="codeInfo">
		<caption>HTTP Status Codes</caption>
		<thead>
			<tr>
				<th>HTTP Status Codes</th>
				<th>Times</th>
				<th>Bandwidth</th>
			</tr>
		</thead>
		<tbody>
_EOF_

for ((index=0; index<${#httpStatus[*]}; index+=3))
do
	if [ ${httpStatus[$index]} == "404" ]
	then
		codeDef="Not Found"
	elif [ ${httpStatus[$index]} == "400" ]
	then
		codeDef="Bad Request"
	elif [ ${httpStatus[$index]} == "401" ]
	then
		codeDef="Unauthorized"
	elif [ ${httpStatus[$index]} == "403" ]
	then
		codeDef="Forbidden"
	elif [ ${httpStatus[$index]} == "406" ]
	then
		codeDef="Not Acceptable"
	elif [ ${httpStatus[$index]} == "409" ]
	then
		codeDef="Conflict"
	elif [ ${httpStatus[$index]} == "500" ]
	then
		codeDef="Internal Server Error"
	elif [ ${httpStatus[$index]} == "501" ]
	then
		codeDef="Not Implemented"
	elif [ ${httpStatus[$index]} == "502" ]
	then
		codeDef="Bad Gateway"
	elif [ ${httpStatus[$index]} == "503" ]
	then
		codeDef="Service Unavailable"
	elif [ ${httpStatus[$index]} == "504" ]
	then
		codeDef="Gateway Timeout"
	elif [ ${httpStatus[$index]} == "505" ]
	then
		codeDef="HTTP Version Not Supported"
	elif [ ${httpStatus[$index]} == "200" ]
	then
		codeDef="Ok"
	elif [ ${httpStatus[$index]} == "201" ]
	then
		codeDef="Created"
	elif [ ${httpStatus[$index]} == "202" ]
	then
		codeDef="Accepted"
	elif [ ${httpStatus[$index]} == "203" ]
	then
		codeDef="Non-authoritative Information"
	elif [ ${httpStatus[$index]} == "204" ]
	then
		codeDef="No Content"
	elif [ ${httpStatus[$index]} == "205" ]
	then
		codeDef="Reset Content"
	elif [ ${httpStatus[$index]} == "206" ]
	then
		codeDef="Partial Content"
	elif [ ${httpStatus[$index]} == "300" ]
	then
		codeDef="Multiple Choices"
	elif [ ${httpStatus[$index]} == "301" ]
	then
		codeDef="Moved permanently"
	elif [ ${httpStatus[$index]} == "302" ]
	then
		codeDef="Found"
	elif [ ${httpStatus[$index]} == "304" ]
	then
		codeDef="Not Modified"
	elif [ ${httpStatus[$index]} == "305" ]
	then
		codeDef="Use Proxy"
	else
		codeDef="NA"
	fi
cat <<_EOF_
	<tr>
		<td>${httpStatus[$index]}-$codeDef</td>
		<td>${httpStatus[$index+1]}</td>
		<td>${httpStatus[$index+2]} Kb</td>
	</tr>	
_EOF_
done

cat <<_EOF_
		</tbody>
	</table>
</body>
</html>
_EOF_
