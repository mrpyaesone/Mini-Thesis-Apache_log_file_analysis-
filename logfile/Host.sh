#! /bin/bash
#Top 10 visited hosts with country(region), hits, bandwidth
filename=$1
arr=($(cat $filename | awk '{ print $1 }' | sort | uniq -c | sort -rn | head | awk '{ printf("%5d\t%-15s\t", $1, $2); system("geoiplookup " $2 " | cut -d \\: -f2 ") }' | awk '{printf("%-15s\t%s%s-%s\t%d\n", $2, $3, $4, $5, $1)}'))

for ((index=0; index<${#arr[*]}; index+=3))
do
	bandwidth=$(grep ${arr[$index]} $filename | awk '{print $10}' | awk '{s+=$1} END {print s/1024/1024}')

	#strTmp=${arr[$index+1]}
	#strReplaceD=${strTmp//-/ }
	#strReplaceC=${strReplaceD//,/, }

	printf "%s\t%s\t\t%5d\t%9.3f\n" "${arr[$index]}" "${arr[$index+1]}" "${arr[$index+2]}" "$bandwidth"
#	printf "%s  %s\t%s\n" "$dayofweek" "${arr[$index]}" "$pageView"
done
