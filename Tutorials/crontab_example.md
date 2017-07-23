# Crontab Example


Guide to time format. See `man crontab` for more details.
```
* * * * *

* minute (0-59)
* hours (0-23)
* day (1-31)
* month (1-12)
* day of week (0 - 7 with Sunday as 0 and 7)
```

This is an example of lines to include in a crontab file.
```
SHELL=/bin/bash
PATH=/usr/bin:/bin:/usr/sbin:/sbin:/usr/local/bin
MAILTO=michael

# Disk usage
0 * * * 1-5 du -h --max-depth=1 /

# Example of how to hide stdout output and redirect any errors to an error file.
# Based on answer here: https://superuser.com/questions/122246/how-can-i-view-results-of-my-cron-jobs
0 5 * * * /path/to/job.sh 1> /dev/null 2> /path/to/file.err

# Run at 9:30am. Activate virtual environment and run python script.
30 9 * * 1,4 source activate myenv && cd path/to/folder && python report.py
```
