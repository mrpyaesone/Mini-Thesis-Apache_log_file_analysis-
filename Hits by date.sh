#! /bin/bash
#Number of Hits by date
filename=$1
arr=($(awk '{print $4}' $filename | cut -d: -f1 | cut -d[ -f2 | uniq ))
for ((index=0; index<${#arr[*]}; index+=1))
do
	format="${arr[$index]//\// }"
	day=$(date -d "$format" +%a)

	hits=$(grep ${arr[$index]} $filename | wc -l )

	printf "%s  %s\t%s\n" "$day" "${arr[$index]}" "$hits"
#	printf "%s  %s\t%s\n" "$dayofweek" "${arr[$index]}" "$pageView"
done
