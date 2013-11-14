#!/bin/bash

chmod a+w cache

echo "===NATIVE==="
php native/native.php
echo -e "\n"

echo "===MUSTACHE==="
php mustache/mustache.php
echo -e "\n"

echo "===MUSTACHE WITH CACHE==="
php mustache/mustache-cache.php
echo -e "\n"

echo "===SMARTY WITH CACHE==="
php smarty/smarty.php
echo -e "\n"
