#!/bin/bash
#$FILE = /var/www/html/PHP/Thesis/Bash/access_log;
for ip in 'cat /var/www/html/PHP/Thesis/Bash/access_log | cut -d ' ' -f 1 | sort | uniq';
	do {
		$COUNT = 'grep ^$ip /var/www/html/PHP/Thesis/Bash/access_log | wc -l';
		if [[ "$COUNT" -gt "500" ]]
		then
			echo "$COUNT: $ip";
		fi
	};
done;
