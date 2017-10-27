#!/bin/bash

for x in 1 2 4 8 16 32
do
	sysbench --num-threads=$x --test=cpu --cpu-max-prime=15000 run
done
