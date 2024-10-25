#!/bin/sh
#upnpc -e 'Servidor Web' -r 8080 TCP
# lsof -i :8080
# php -S localhost:8080 index.php
#php -S 100.85.145.112:8080 -t ~/furiadetitas/
php -S localhost:8080 -t ~/furiadetitas/
#php -S localhost:8443 -t ~/furiadetitas.net/ -d "openssl.cafile=server.crt" -d "openssl.local_cert=server.crt" -d "openssl.local_pk=server.key"
