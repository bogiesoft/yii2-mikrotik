#!/usr/bin/env sh
SRC_DIR="`pwd`"
cd "`dirname "$0"`"
cd "../pear2/net_routeros/scripts"
BIN_TARGET="`pwd`/roscon.php"
cd "$SRC_DIR"
"$BIN_TARGET" "$@"
