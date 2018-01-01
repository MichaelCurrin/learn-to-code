# Redirection

## Basic

From excellent answer here https://askubuntu.com/questions/625224/how-to-redirect-stderr-to-a-file

Redirect stderr to another file:

`command > out.txt 2>error.txt`

Redirect stderr to stdout (&1), and then redirect stdout to a file:

`command >out.txt 2>&1`

Redirect both to a file:

`command &> out.txt`

## Appending

To append to a file using _both_ stdout and stderr, one can to do this, according to this [SO question](https://stackoverflow.com/questions/876239/how-can-i-redirect-and-append-both-stdout-and-stderr-to-a-file-with-bash)

`command >> out.txt 2>&1`

Because this does _not_ work

`command &>> out.txt`

The solution is repeated in a similar form at [[HELP] what does "2>&1" do in crontab?](http://www.unix.com/solaris/207049-help-what-does-2-1-do-crontab.html), but in the context of crontab mail. "If all output from a cron is redirected to a file, it will not generate an email of the output to Stdout or Stderr."

Add output to file. Stop mail being sent on success or failure.

`* * * * * /export/user/home/test.sh >> /export/user/home/logtest.log 2>&1`

## Error only

From https://stackoverflow.com/questions/2342826/how-to-pipe-stderr-and-not-stdout

Pipe out only stderror to the next command.

`command 2>&1 >/dev/null | nextCommand`

Or

`command 2> /dev/stdout 1> /dev/null | nextCommand`
