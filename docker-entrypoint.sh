#!/usr/bin/env bash

set -e

ENVIRONMENT="${APP_ENV:-dev}"

# first arg is `-f` or `--some-option`
if [ "${1#-}" != "$1" ]; then
	set -- frankenphp run "$@"
fi

if [ "$1" = 'frankenphp' ] || [ "$1" = 'php' ] || [ "$1" = 'bin/console' ]; then

    if [[ "$ENVIRONMENT" == "dev" ]]
    then
        echo "== Clearing cache and installing composer =="
        # Delete temp, it might be incompatible with current changes
        rm -rf var/cache/*
        mkdir -p var/log

        # Always have up to date dependencies
        composer install --no-interaction
    fi

    echo "== Setting 777 permission to var/ =="
    mkdir -p var/cache
    time chmod -R 777 var

fi

exec "$@"
