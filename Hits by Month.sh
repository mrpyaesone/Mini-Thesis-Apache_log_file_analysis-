#! /bin/bash
#Number of Hits by month
filename=$1
arr=($(awk '{print $4}' $filename | cut -d\/ -f2 | uniq ))
year=($(awk '{print $4}' $filename | cut -d: -f1 | cut -d[ -f2 | cut -d\/ -f3 | uniq
))
for ((index=0; index<${#arr[*]}; index+=1))
do
	hits=$(grep ${arr[$index]} $filename | wc -l )

	printf "%s  %s\t%s\n" "$year" "${arr[$index]}" "$hits"
#	printf "%s  %s\t%s\n" "$dayofweek" "${arr[$index]}" "$pageView"
done
