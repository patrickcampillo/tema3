#!/usr/bin/env bash

# run.sh

# run the container in the background
# /data is persisted using a named container

docker run \
    --detach \
    --rm \
    -p8080:80 \
    --name="evilapache" \
    -v name:/data \
    evilapache
