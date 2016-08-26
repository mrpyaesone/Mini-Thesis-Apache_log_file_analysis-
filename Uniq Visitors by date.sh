#! /bin/bash
#Number of Unique Visitors by date
filename=$1
arr=($(awk '{print $4}' $filename | cut -d: -f1 | cut -d[ -f2 | uniq ))
for ((index=0; index<${#arr[*]}; index+=1))
do
	format="${arr[$index]//\// }"
	day=$(date -d "$format" +%a)

	uniqVisitors=$(grep ${arr[$index]} $filename | awk '{print $1}' | sort | uniq -c | wc -l)

	printf "%s  %s\t%s\n" "$day" "${arr[$index]}" "$uniqVisitors"
#	printf "%s  %s\t%s\n" "$dayofweek" "${arr[$index]}" "$pageView"
done
