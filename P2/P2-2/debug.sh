#!/usr/bin/env bash

# debug.sh

# run container without making it a daemon - useful to see logging output

docker run \
    --rm \
    -p8080:80 \
    --name="authpcc" \
    -v `pwd`:/home/app \
    authpcc
