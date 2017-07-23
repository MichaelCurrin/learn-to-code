# Redirection

## Basic

From excellent answer here https://askubuntu.com/questions/625224/how-to-redirect-stderr-to-a-file

Redirect stderr to another file:

`command > out 2>error`

Redirect stderr to stdout (&1), and then redirect stdout to a file:

`command >out 2>&1`

Redirect both to a file:

`command &> out`
___

## Error only

From https://stackoverflow.com/questions/2342826/how-to-pipe-stderr-and-not-stdout

Pipe out only stderror to the next command.

`command 2>&1 >/dev/null | nextCommand`

Or

`command 2> /dev/stdout 1> /dev/null | nextCommand`

___

In the context of crontab.

From [[HELP] what does "2>&1" do in crontab?](http://www.unix.com/solaris/207049-help-what-does-2-1-do-crontab.html)

"If all output from a cron is redirected to a file, it will not generate an email of the output to Stdout or Stderr."

Add output to file. Stop mail being sent on success or failure.

`* * * * * /export/user/home/test.sh >> /export/user/home/logtest.log 2>&1`

