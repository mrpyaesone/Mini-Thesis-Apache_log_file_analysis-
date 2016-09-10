#! /bin/bash
#Top 10 user agents($1--->Indicate compatibility with ..... rendering engine / $2--->Platform the browser uses / $3--->Browser )
filename=$1
cat $filename | awk -F\" ' { print $6 } ' | sort | uniq -c | sort -rn | head -10
