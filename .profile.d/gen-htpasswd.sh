#!/usr/bin/env bash
set -ex

echo -e "${BASIC_AUTH_USERNAME}:$(perl -1e 'print crypt($ENV{"BASIC_AUTH_PASSWORD"}, rand(0xffffffff));')" > /app/.htpasswd
