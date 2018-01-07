#!/bin/bash
rm -f tpl_tsb2017.zip
zip -q -9 -x "/.gitignore" \
  -x "/.git/*" \
  -x "/.idea/*" \
  -x "/mkzip.sh" \
  -x "/.mkzip.sh.swp" \
  -x "/.brackets.json" \
  -x "/less/*" \
  -x "/template.xml" \
  -r tpl_tsb2017.zip .

