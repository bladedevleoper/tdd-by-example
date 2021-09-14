#!/bin/bash
#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
echo "git adding"
user="bladedevleoper";
pass="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";


git add .
echo "what is your commit message"
read commitMessage
git commit -m "$commitMessage"
git push "https://${user}:${pass}@tdd-by-example.git" --all

#exec echo $user
#exec echo $pass


#echo $user | git push
#echo $pass 
