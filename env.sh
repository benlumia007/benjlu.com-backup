#!/usr/bin/env bash

if [[ ! -f "/home/benjlu/public_html/.env" ]]; then
    cp -r "/home/benjlu/actions-runner/benjlu/benjlu.com/benjlu.com/benjlu/.env.example" "/home/benjlu/public_html/.env"
fi