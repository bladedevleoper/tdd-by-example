#!/bin/bash
#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
user="bladedevleoper";
pass="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";


git add .
echo "what is your commit message"
read commitMessage
git commit -m "$commitMessage"
git push "https://${user}:${pass}@github.com/${user}/tdd-by-example.git" --all

