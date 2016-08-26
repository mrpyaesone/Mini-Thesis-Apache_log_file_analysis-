#! /bin/bash
#Information of HTTP status codes
#cat access_log3  | awk ' { total[$9] += $10 } END {  for (x in total) { printf "Status code %3d : %9.2f Kb\n", x, total[x]/1024 } } '

filename=$1
arrKB=($(cat $filename  | awk ' { total[$9] += $10 } END {  for (x in total) { printf "%3d %9.2f\n", x, total[x]/1024 } } '))

arr=($(awk '{print $9}' $filename | sort | uniq -c | sort -nr | awk '{print $2, $1}'))
#awk '{print $9,$10}' access_log3 | sort > Temp.txt

for ((index=0; index<${#arr[*]}; index+=2))
do
	#dataAmt=$(grep ${arr[$index]} Temp.txt | awk '{print $2}' | awk '{s+=$1} END {print s/1024}')
	for ((indexKB=0; indexKB<${#arrKB[*]}; indexKB+=2))
	do
		if [ ${arr[$index]} == ${arrKB[$indexKB]} ]
		then
			dataAmt=${arrKB[$indexKB+1]}
		fi
	done

	#printf "%s-%-20s  %-10d\t%9.3f\n"  "${arr[$index]}" "$codeDef" "${arr[$index+1]}" "$dataAmt"
	printf "%s  %-10d\t%9.3f\n"  "${arr[$index]}" "${arr[$index+1]}" "$dataAmt"
	#printf "%s  %s\t%s\n" "$dayofweek" "${arr[$index]}" "$pageView"
done

