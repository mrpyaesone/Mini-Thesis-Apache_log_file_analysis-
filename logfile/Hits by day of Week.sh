#! /bin/bash
#Number of hits by day of week
filename=$1
TotalArr=($(./Hits\ by\ date.sh $filename))

Res=(0 0 0 0 0 0 0)
tt=0
for ((index=0; index<${#TotalArr[*]}; index+=3))
do
	tmpIndex=$index+2
	#tmpIndex+=2
	if [ ${TotalArr[$index]} == "Sun" ]
	then
		Res[0]=`expr ${Res[0]} + ${TotalArr[$tmpIndex]}`
	elif [ ${TotalArr[$index]} == "Mon" ]
	then 
		Res[1]=`expr ${Res[1]} + ${TotalArr[$tmpIndex]}`
	elif [ ${TotalArr[$index]} == "Tue" ]
	then
		Res[2]=`expr ${Res[2]} + ${TotalArr[$tmpIndex]}`
	elif [ ${TotalArr[$index]} == "Wed" ]
	then 
		Res[3]=`expr ${Res[3]} + ${TotalArr[$tmpIndex]}`
	elif [ ${TotalArr[$index]} == "Thu" ]
	then
		Res[4]=`expr ${Res[4]} + ${TotalArr[$tmpIndex]}`
	elif [ ${TotalArr[$index]} == "Fri" ]
	then 
		Res[5]=`expr ${Res[5]} + ${TotalArr[$tmpIndex]}`
		#tt=`expr $tt + ${TotalArr[$tmpIndex]}`
	elif [ ${TotalArr[$index]} == "Sat" ]
	then
		Res[6]=`expr ${Res[6]} + ${TotalArr[$tmpIndex]}`
	fi
done

#echo ${Res[*]}
#echo $tt
week=(Sun Mon Tue Wed Thu Fri Sat)
for ((index=0; index<${#Res[*]}; index+=1))
do
	printf "%s\t%s\n" "${week[$index]}" "${Res[$index]}"

done
