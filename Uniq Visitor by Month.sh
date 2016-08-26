#! /bin/bash
#Number of Unique visitor by Month
filename=$1
year=($(awk '{print $4}' $filename | cut -d: -f1 | cut -d[ -f2 | cut -d\/ -f3 | uniq))
arr=($(awk '{print $4}' $filename | cut -d\/ -f2 | uniq ))

for ((index=0; index<${#arr[*]}; index+=1))
do
	uniqVisitors=$(grep ${arr[$index]} $filename | awk '{print $1}' | sort | uniq -c | wc -l)

	printf "%s  %s\t%s\n" "$year" "${arr[$index]}" "$uniqVisitors"
#	printf "%s  %s\t%s\n" "$dayofweek" "${arr[$index]}" "$pageView"
done
