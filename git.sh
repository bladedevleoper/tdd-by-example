#!/bin/bash
#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
echo "git adding"
user="bladedevleoper";
pass="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";


git add .
read commitMessage
echo "what is your commit message"
git commit -m "$commitMessage"

git push

