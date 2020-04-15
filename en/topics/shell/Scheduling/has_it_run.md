# Has it run?
> Check if a job has run.

If you want a script to run today but only if it has not run yet, then use a bash script to check if the last run was today. Based on [link](https://unix.stackexchange.com/questions/48203/run-script-once-a-day-with-systemd).

```sh
#/bin/sh -x
FILE=/etc/lastrun
TODAY=$(date +"%Y%m%d")
LAST_RUN=$(cat $FILE) [[ -z "$LAST_RUN" ]] || [[ "$TODAY" -gt "$LAST_RUN" ]] || exit
echo $TODAY > $FILE
RUNYOURSCRIPTHERE
```

Note that the `FILE` location could be better under a different directory or under a user directory.

An alternative to writing a file could be to use `touch` to update time.
