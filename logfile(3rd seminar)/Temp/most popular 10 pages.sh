#!/bin/bash
awk '{print $7}' access_log2 | grep -ivE '(.gif|.jpg|.png)' | sort | uniq -c | sort -rn | head -10
