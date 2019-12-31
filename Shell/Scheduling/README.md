# Scheduling

Running a task on schedule is great when you need to run automated background tasks like backing up a database or web scraping.

## What is cron?

Cron is a Unix scheduling tool that allows you to schedule tasks to run periodically. If the machine is not running at that time, the task will not run.

There are several main approaches for this.

### Crontab

On Linux and Mac, _Crontab_ can be used for more advanced rules. Such as running every 5 minutes, on weekdays, or on every other hour.

See [crontab](crontab.md) guide for more details.

### Cron files

#### Cron directories

Use one of the four directories watched by the _cron.d_ process. Place an executable file _without_ extension in one of these directories. Instead of the actual script, you could create symlink (_without_ extension) which points to your executable.

- Hourly - `/etc/cron.hourly/`
- Daily - `/etc/cron.daily/`
- Monthly - `/etc/cron.monthly/`
- Yearly - `/etc/cron.yearly/`

#### Cron.d

A config file can be placed in the `/etc/cron.d` directory for more control.


## at?

The `at` command lets you schedule tasks _once_ at a particular time in the future.

A task can resubmit itself to `at` to give the effect of period scheduling.

Tutorials:
- [linuxjournal.com](https://www.linuxjournal.com/content/schedule-one-time-commands-unix-tool).
- [computerhope.com](https://www.computerhope.com/unix/uat.htm)

## anacron

_anacron_ is a job scheduler on Linux. _anacron_ does not assume the machine is running continuously and so will catch up on tasks when the machine is running. It integrates with _cron_ to run tasks scheduled with _cron_ (but not _crontab_). Also _anacron_ it runs only once a day.

Wikipedia definition:

> anacron is a computer program that performs periodic command scheduling, which is traditionally done by cron, but without assuming that the system is running continuously. Thus, it can be used to control the execution of daily, weekly, and monthly jobs (or anything with a period of n days) on systems that don't run 24 hours a day. [source](https://en.wikipedia.org/wiki/Anacron)
