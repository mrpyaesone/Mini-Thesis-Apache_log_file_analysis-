#! /bin/bash
#Bandwidth by daily
filename=$1
arr=($(awk '{print $4}' $filename | cut -d: -f1 | cut -d[ -f2 | uniq ))
for ((index=0; index<${#arr[*]}; index+=1))
do
	format="${arr[$index]//\// }"
	day=$(date -d "$format" +%a)

	bandwidth=$(grep ${arr[$index]} $filename | awk '{print $10}' | awk '{s+=$1} END {print s/1024/1024}')

	printf "%s  %s\t%9.3f MB\n" "$day" "${arr[$index]}" "$bandwidth"
#	printf "%s  %s\t%s\n" "$dayofweek" "${arr[$index]}" "$pageView"
done
