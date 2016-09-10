#! /bin/bash
#Total bandwidth by day of week
filename=$1
TotalArr=($(./Bandwidth\ by\ date.sh $filename))
#TotalArr=(Sun  02/Jan/2016	10956821 MB Sun  03/Jan/2016	20140696 MB Sun  04/Jan/2016	42101085 MB Sun  05/Jan/2016	48483848 MB Sun  06/Jan/2016	80825501 MB Sun  05/Jan/2016	51514230 MB Sun  06/Jan/2016	140919107 MB)
Res=(0 0 0 0 0 0 0)
tt=0
for ((index=0; index<${#TotalArr[*]}; index+=4))
do
	tmpIndex=$index+2
	#tmpIndex+=2
	if [ ${TotalArr[$index]} == "Sun" ]
	then
		#Res[0]=`expr ${Res[0]} + ${TotalArr[$tmpIndex]}`
		Res[0]=`echo ${Res[0]} + ${TotalArr[$tmpIndex]} | bc`
	elif [ ${TotalArr[$index]} == "Mon" ]
	then 
		#Res[1]=`expr ${Res[1]} + ${TotalArr[$tmpIndex]}`
		Res[1]=`echo ${Res[1]} + ${TotalArr[$tmpIndex]} | bc`
	elif [ ${TotalArr[$index]} == "Tue" ]
	then
		#Res[2]=`expr ${Res[2]} + ${TotalArr[$tmpIndex]}`
		Res[2]=`echo ${Res[2]} + ${TotalArr[$tmpIndex]} | bc`
	elif [ ${TotalArr[$index]} == "Wed" ]
	then 
		#Res[3]=`expr ${Res[3]} + ${TotalArr[$tmpIndex]}`
		Res[3]=`echo ${Res[3]} + ${TotalArr[$tmpIndex]} | bc`
	elif [ ${TotalArr[$index]} == "Thu" ]
	then
		#Res[4]=`expr ${Res[4]} + ${TotalArr[$tmpIndex]}`
		Res[4]=`echo ${Res[4]} + ${TotalArr[$tmpIndex]} | bc`
	elif [ ${TotalArr[$index]} == "Fri" ]
	then 
		#Res[5]=`expr ${Res[5]} + ${TotalArr[$tmpIndex]}`
		Res[5]=`echo ${Res[5]} + ${TotalArr[$tmpIndex]} | bc`
		#tt=`expr $tt + ${TotalArr[$tmpIndex]}`
	elif [ ${TotalArr[$index]} == "Sat" ]
	then
		#Res[6]=`expr ${Res[6]} + ${TotalArr[$tmpIndex]}`
		Res[6]=`echo ${Res[6]} + ${TotalArr[$tmpIndex]} | bc`
	fi
done

#echo ${Res[*]}
#echo $tt
week=(Sun Mon Tue Wed Thu Fri Sat)
for ((index=0; index<${#Res[*]}; index+=1))
do
	printf "%s\t%s\n" "${week[$index]}" "${Res[$index]}"

done
