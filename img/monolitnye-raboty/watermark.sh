#!/bin/bash
echo " "
echo "hello"

echo " "

find ./ -name "*.jpg" -exec composite -dissolve 20% -gravity center watermark.png {} {} \;


echo " "
echo "... Done!"
echo " "
 
exit 0