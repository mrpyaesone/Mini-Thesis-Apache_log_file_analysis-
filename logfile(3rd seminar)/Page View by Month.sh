#! /bin/bash
#Number of page view by Month
filename=$1
arr=($(awk '{print $4}' $filename | cut -d\/ -f2 | uniq ))
year=($(awk '{print $4}' $filename | cut -d: -f1 | cut -d[ -f2 | cut -d\/ -f3 | uniq
))
for ((index=0; index<${#arr[*]}; index+=1))
do
	pageView=$(grep ${arr[$index]} $filename | egrep -vc '(\.gif |\.jpg |\.png|\.jpeg|\.txt|\.js|\.css|\.zip|\.pdf|\.swf|\.tar.gz|\.7z|\.json|\.ico|\.sql.gz|\.sql|\.rar|\.gz|\.bz2|\.tar|\.tgz|\.log )')

	printf "%s  %s\t%s\n" "$year" "${arr[$index]}" "$pageView"
#	printf "%s  %s\t%s\n" "$dayofweek" "${arr[$index]}" "$pageView"
done
