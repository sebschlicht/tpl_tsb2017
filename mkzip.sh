#!/bin/bash
rm -f tsb2017.zip
zip -q -9 -x "/.gitignore" -x "/.git/*" -x "/.idea/*" -x "/mkzip.sh" -x "/.mkzip.sh.swp" -x "/less/*" -r tsb2017.zip .

