#! /bin/bash
filename=$1
echo "`/bin/bash ./Summary.sh $filename`" >HTML/Summary.php
#echo "`/bin/sh ./Summary.sh`" >Summary2.html
echo "`/bin/bash ./W\ and\ M\ activity.sh $filename`" >HTML/SActivity.php
echo "`/bin/bash ./HostO.sh $filename`" >HTML/Host.php
echo "`/bin/bash ./Useragent.sh $filename`" >HTML/Useragent.php
echo "`/bin/bash ./Blank\ user\ agent.sh $filename`" >HTML/Blank\ user\ agent.php
echo "`/bin/bash ./Status\ Codes.sh $filename`" >HTML/Status\ Code.php
echo "`/bin/bash ./404\ Errors.sh $filename`" >HTML/NotFound\ Errors.php
echo "`/bin/bash ./Most\ recentO.sh $filename`" >HTML/Most\ recent.php
echo "`/bin/bash ./Recommend.sh $filename`"
