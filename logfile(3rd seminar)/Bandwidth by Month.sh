#! /bin/bash
#Bandwidth by month
filename=$1
year=($(awk '{print $4}' $filename | cut -d: -f1 | cut -d[ -f2 | cut -d\/ -f3 | uniq))
arr=($(awk '{print $4}' $filename | cut -d\/ -f2 | uniq ))

for ((index=0; index<${#arr[*]}; index+=1))
do
	bandwidth=$(grep ${arr[$index]} $filename | awk '{print $10}' | awk '{s+=$1} END {print s/1024/1024/1024}')

	printf "%s  %s\t%9.3f\n" "$year" "${arr[$index]}" "$bandwidth"
#	printf "%s  %s\t%s\n" "$dayofweek" "${arr[$index]}" "$pageView"
done
