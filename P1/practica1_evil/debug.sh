#!/usr/bin/env bash

# debug.sh

# run container without making it a daemon - useful to see logging output

docker run \
    --rm \
    -p8086:80 \
    --name="evilapache" \
    -v `pwd`:/home/app \
    evilapache
