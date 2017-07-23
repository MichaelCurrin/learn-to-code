# Crontab Example

## Times
Guide to time format. See `man crontab` for more details.
```
* * * * *

* minute (0-59)
* hours (0-23)
* day (1-31)
* month (1-12)
* day of week (0 - 7 with Sunday as 0 and 7)
```

## File structure

This is an example of lines to include in a crontab file, setting environment and then jobs.
```
SHELL=/bin/bash
PATH=/usr/bin:/bin:/usr/sbin:/sbin:/usr/local/bin
MAILTO=michael

# m h dom mon dow command
0 * * * * echo "test"
* * * * 1-4 path/to/file.sh
```

## Example jobs
Disk usage
`0 * * * 1-5 du -h --max-depth=1 /`

Run at 9:30am on Mondays and Thursdays. Activate virtual environment and run python script.
`30 9 * * 1,4 source activate myenv && cd path/to/folder && python report.py`

Based on answer here: https://superuser.com/questions/122246/how-can-i-view-results-of-my-cron-jobs
Hide stdout output and redirect any errors to an error file. 
`0 5 * * * /path/to/job.sh 1> /dev/null 2> /path/to/file.err`
Send output to mail other than set in MAILTO. Stdout is absorbed, then stderr is redirected to stdout and is then piped to mail.
`33 3 * * * /path/to/job.sh 1> /dev/null 2>&1 | mail -s "My Subject" user@domain.com`
