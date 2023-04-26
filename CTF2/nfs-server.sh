#!/bin/sh

/usr/sbin/rpcbind -f -w
/usr/sbin/exportfs -r
/usr/sbin/rpc.nfsd -N 2 -V 3 -t 8 -u 32 -n 4 -c 8 -M 4 -E