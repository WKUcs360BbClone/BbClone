#!/bin/bash

for x in '128MB' '256MB' '512MB' '1GB' '2GB' '4GB' '8GB'
do
	sysbench --test=fileio --file-total-size=$x prepare
	sysbench --test=fileio --file-total-size=$x --file-test-mode=rndrw --init-rng=on --max-time=300 --max-requests=0 run
	sysbench --test=fileio --file-total-size=$x cleanup
done
