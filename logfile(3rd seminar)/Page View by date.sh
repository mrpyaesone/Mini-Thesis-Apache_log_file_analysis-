#! /bin/bash
#Page views order by date
filename=$1
arr=($(awk '{print $4}' $filename | cut -d: -f1 | cut -d[ -f2 | uniq ))
for ((index=0; index<${#arr[*]}; index+=1))
do
	format="${arr[$index]//\// }"
	dayofweek=$(date -d "$format" +%a)

	pageView=$(grep ${arr[$index]} $filename | egrep -vc '(\.gif |\.jpg |\.png|\.jpeg|\.txt|\.js|\.css|\.zip|\.pdf|\.swf|\.tar.gz|\.7z|\.json|\.ico|\.sql.gz|\.sql|\.rar|\.gz|\.bz2|\.tar|\.tgz|\.log )')

	printf "%s  %s\t%s\n" "$dayofweek" "${arr[$index]}" "$pageView"
#	printf "%s  %s\t%s\n" "$dayofweek" "${arr[$index]}" "$pageView"
done  
