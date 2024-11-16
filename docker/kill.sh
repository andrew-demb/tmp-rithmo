#!/bin/bash

docker container stop rithmo-skeleton-nginx
docker container rm rithmo-skeleton-nginx

docker container stop rithmo-skeleton-php
docker container rm rithmo-skeleton-php

docker image rm rithmo-skeleton-php

docker ps