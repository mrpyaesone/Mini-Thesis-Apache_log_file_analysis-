#1 /bin/bash
#Most recent visitorswith Time of last access
filename=$1
arr=($(awk '{print $1}' $filename | tail -70 | uniq ))
Res=(0 0 0 0 0 0 0 0 0 0)
count=0
val=1
check=f

for ((index=${#arr[*]}-1; index>-1; index-=1))
do
	#printf "%s\n" "${arr[$index]}"  && $count < 10   && ${arr[$index]} != 0
	#printf "%s\t%s\n" "${arr[$index]}" "$count"
	if [ $count -gt 0 -a $count -lt 11 ]
	then
		#echo "greater than zero"
		#echo "$count"
		for ((indexA=0; indexA<$count; indexA+=1))
		do
			#echo "${arr[$index]}   ${Res[$indexA]} "
			if [ ${arr[$index]} != ${Res[$indexA]} -a ${arr[$index]} != 0 ]
			then
				check=t
			elif [ ${arr[$index]} == ${Res[$indexA]} ]
			then
				check=f
				break
			fi
		done
		#echo "End inner loop"
		if [ $check == "t" ]
		then
			Res[$count]=${arr[$index]}
			count=`expr $count + $val`
		fi
	elif [ $count == 0 ]
	then
		#echo "zero"
		#echo "${arr[$index]}"
		Res[$count]=${arr[$index]}
		count=`expr $count + $val`
	fi 
done

#for ((indexO=0; indexO<10; indexO+=1))
#do
#	printf "%s\n" "${Res[$indexO]}"
#done
#echo ${Res[*]}


for ((indexT=0; indexT<10; indexT+=1))
do
	tmp=$(grep ${Res[$indexT]} $filename | awk '{print $1,$4}' | tail -1 | cut -d[ -f2)
	lastTime=${tmp/:/ }

	printf "%s\t%s\n" "${Res[$indexT]}" "$lastTime"
#	printf "%s  %s\t%s\n" "$dayofweek" "${arr[$index]}" "$pageView"
done
