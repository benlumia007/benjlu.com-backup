#!/usr/bin/env bash

if [[ ! -f "~/public_html/.env" ]];
    cp -r "benjlu/.env.example" "~/public_html/.env"
fi