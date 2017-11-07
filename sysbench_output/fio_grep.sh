#!/bin/bash

grepped=$(cat $1 | grep 'avg:')
for x in $grepped
do
	echo $x
done
