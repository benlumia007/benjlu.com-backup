#!/usr/bin/env bash

if [[ ! -f "/home/benjlu/public_html/.env" ]]; then
    cp -r "/home/benjlu/actions-runner/benjlu/benjlu.com/benjlu.com/benjlu/.env.example" "/home/benjlu/public_html/.env"

    if grep -q "http://localhost" "/home/benjlu/public_html/.env"; then
        sed -i -e "s/http:\/\/localhost/https:\/\/benjlu.com/g" "/home/benjlu/public_html/.env"

    fi
fi