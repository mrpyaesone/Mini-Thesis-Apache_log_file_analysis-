#!/bin/bash
#Sum of total request in apache log file
awk '{print $4}' /var/www/html/PHP/Thesis/Bash/access_log2 | cut -d: -f1 | uniq -c | awk '{s+=$1} END {print s}' 
