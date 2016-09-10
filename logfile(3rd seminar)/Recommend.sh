#! /bin/bash
#top 5 ip list
filename=$1
topIP=($(cat $filename | awk '{ print $1 }' | sort | uniq -c | sort -rn | head -5 | awk '{print $2}'))

ip1Access=()
ip2Access=()
ip31Access=()
ip4Access=()
ip5Access=()

#for ((index=0; index<${#Res[*]}; index+=1))
#do
	ip1Url=($(grep "${topIP[0]}" $filename | awk '{print $7}' | uniq | head -20))
	ip2Url=($(grep "${topIP[1]}" $filename | awk '{print $7}' | uniq | head -20))
	ip3Url=($(grep "${topIP[2]}" $filename | awk '{print $7}' | uniq | head -20))
	ip4Url=($(grep "${topIP[3]}" $filename | awk '{print $7}' | uniq | head -20))
	ip5Url=($(grep "${topIP[4]}" $filename | awk '{print $7}' | uniq | head -20))
	#combine=$( "${ip1Url[@]}" "${ip2Url[@]}" "${ip3Url[@]}" "${ip4Url[@]}" "${ip5Url[@]}")
	combine=( "${ip1Url[@]}" "${ip2Url[@]}" "${ip3Url[@]}" "${ip4Url[@]}" "${ip5Url[@]}" )
	combineO=($(echo "${combine[@]}" | tr ' ' '\n' | sort -u | tr '\n' ' '))
	#printf '%s\n' "${combine[@]}" | sort -u
	#echo ${combineO[*]}
	#echo ${topIP[*]}
	#grep "${topIP[0]}" access_log3 | awk '{print $7}' | uniq > df.txt
	printf '%s\n' "${combine[@]}" | uniq > Table.txt
	
	for ((index=0; index<${#ip1Url[*]}; index+=1))
	do
		value=${ip1Url[$index]}
		#echo $value
		for i in "${!combine[@]}"
		do
   			if [[ "${combine[$i]}" = "${value}" ]]; then
				namingValue=`expr $i + 1`
       				#echo $namingValue
				ip1Access+=( $namingValue )
   			fi
		done
	done
ip1AccessL=$(echo "${ip1Access[@]}" | tr ' ' ',' )
#echo ${ip1AccessL[*]} 
#echo "${ip1AccessL[@]}" 
#done

for ((index2ip=0; index2ip<${#ip2Url[*]}; index2ip+=1))
	do
		value2ip=${ip2Url[$index2ip]}
		echo $value
		for i in "${!combine[@]}"
		do
   			if [[ "${combine[$i]}" = "${value2ip}" ]]; then
				namingValue2ip=`expr $i + 1`
       				#echo $namingValue
				ip2Access+=( $namingValue2ip )
   			fi
		done
	done
ip2AccessL=$(echo "${ip2Access[@]}" | tr ' ' ',' )
#echo ${ip2AccessL[*]} 
#-------------------

for ((index3ip=0; index3ip<${#ip3Url[*]}; index3ip+=1))
	do
		value3ip=${ip3Url[$index3ip]}
		#echo $value
		for i in "${!combine[@]}"
		do
   			if [[ "${combine[$i]}" = "${value3ip}" ]]; then
				namingValue3ip=`expr $i + 1`
       				#echo $namingValue
				ip3Access+=( $namingValue3ip )
   			fi
		done
	done
ip3AccessL=$(echo "${ip3Access[@]}" | tr ' ' ',' )
#echo ${ip3AccessL[*]} 

#------

for ((index4ip=0; index4ip<${#ip4Url[*]}; index4ip+=1))
	do
		value4ip=${ip4Url[$index4ip]}
		#echo $value
		for i in "${!combine[@]}"
		do
   			if [[ "${combine[$i]}" = "${value4ip}" ]]; then
				namingValue4ip=`expr $i + 1`
       				#echo $namingValue
				ip4Access+=( $namingValue4ip )
   			fi
		done
	done
ip4AccessL=$(echo "${ip4Access[@]}" | tr ' ' ',' )
#echo ${ip4AccessL[*]} 

#------

for ((index5ip=0; index5ip<${#ip5Url[*]}; index5ip+=1))
	do
		value5ip=${ip5Url[$index5ip]}
		#echo $value
		for i in "${!combine[@]}"
		do
   			if [[ "${combine[$i]}" = "${value5ip}" ]]; then
				namingValue5ip=`expr $i + 1`
       				#echo $namingValue
				ip5Access+=( $namingValue5ip )
   			fi
		done
	done
ip5AccessL=$(echo "${ip5Access[@]}" | tr ' ' ',' )
echo ${ip5AccessL[*]} 

#---------------

total+=( $ip1AccessL )
total+=( $ip2AccessL )
total+=( $ip3AccessL )
total+=( $ip4AccessL )
total+=( $ip5AccessL )

final=$(echo "${total[@]}" | tr ' ' '\n' )

#echo ${final[*]}
printf '%s \n' "${final[@]}" > RecommendInput.txt
