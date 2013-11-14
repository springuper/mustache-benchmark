#!/bin/bash

rm -f cache/__*

echo "===NATIVE==="
php native-benchmark.php
echo -e "\n"

echo "===MUSTACHE==="
php mustache-benchmark.php
echo -e "\n"

echo "===MUSTACHE WITH CACHE==="
php mustache-cache-benchmark.php
echo -e "\n"