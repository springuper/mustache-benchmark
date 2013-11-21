#!/bin/bash

chmod a+w smarty/cache
chmod a+w mustache/cache

echo "===NATIVE==="
php native/native.php
echo -e "\n"

echo "===MUSTACHE==="
php mustache/mustache.php
echo -e "\n"

echo "===TWIG==="
php twig/twig.php
echo -e "\n"

echo "===SMARTY==="
php smarty/smarty.php
echo -e "\n"
