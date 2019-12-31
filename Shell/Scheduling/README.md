# Scheduling

Running a task on schedule is great when you need to run automated background tasks like backing up a database or web scraping.

## What is cron?

Cron is a time-based job scheduler in Unix-like systems such as _Linux_ and _macOS_. It runs scheduled tasks to run periodically. If the machine is not running at that time, the task will **not** run.

Wikipedia definition:

> The software utility cron is a time-based job scheduler in Unix-like computer operating systems. Users that set up and maintain software environments use cron to schedule jobs (commands or shell scripts) to run periodically at fixed times, dates, or intervals. It typically automates system maintenance or administration—though its general-purpose nature makes it useful for things like downloading files from the Internet and downloading email at regular intervals. [source](https://en.wikipedia.org/wiki/Cron)

There are several main approaches for scheduling tasks with _cron_.

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

#### Crond

A config file can be placed in the `/etc/cron.d` directory for more control.


## at?

The `at` command lets you schedule tasks _once_ at a particular time in the future. Jobs can be viewed in the queue. A task can resubmit itself to `at` to give the effect of period scheduling.

Commands:

- **at** executes commands at a specified time. See the tool's options to things like send a mail, view the queue (alias for _atq_) and remove an item from the queue (alias for _atrm_).
- **atq** lists the user's pending jobs, unless the user is the superuser; in that case, everybody's jobs are listed. The format of the output lines (one for each job) is: job number, date, hour, year, queue, and username.
- **atrm** deletes jobs, identified by their job number.
- **batch** executes commands when system load levels permit; in other words, when the load average drops below 1.5, or the value specified in the invocation of `atd`.

Tutorials:
- [linuxjournal.com](https://www.linuxjournal.com/content/schedule-one-time-commands-unix-tool).
- [computerhope.com](https://www.computerhope.com/unix/uat.htm)


## anacron

_anacron_ is a job scheduler on Linux. _anacron_ does not assume the machine is running continuously and so will catch up on tasks when the machine is running. It integrates with _cron_ to run tasks scheduled with _cron_ (but not _crontab_). Also _anacron_ it runs only once a day.

Wikipedia definition:

> anacron is a computer program that performs periodic command scheduling, which is traditionally done by cron, but without assuming that the system is running continuously. Thus, it can be used to control the execution of daily, weekly, and monthly jobs (or anything with a period of n days) on systems that don't run 24 hours a day. [source](https://en.wikipedia.org/wiki/Anacron)

## systemd

As an alternative to _cron_, you can use _systemd_.

Wikipedia definition:

> The systemd software suite provides fundamental building blocks for a Linux operating system.[6] It includes the systemd "System and Service Manager",[7] an init system used to bootstrap user space and manage user processes. [source](https://en.wikipedia.org/wiki/Systemd)

Tutorials:
- [Using systemd as a better cron](https://medium.com/horrible-hacks/using-systemd-as-a-better-cron-a4023eea996d) from _medium.com_.
- [Scheduling Jobs with Systemd](https://jeetblogs.org/post/scheduling-jobs-with-systemd/) from _jeetblogs.org_.


## Flock

Use _flock_ with _cron_ to prevent running multiple instances of the same task.

The _flock_ man page ([link](https://linux.die.net/man/1/flock)) says:

> Manage locks from shell scripts

Examples:

```bash
(
flock -s 200

# ... commands executed under lock ...

) 200>/var/lock/mylockfile
```

Tutorials:
- [Linux shell: Introduction to Flock](https://linuxaria.com/howto/linux-shell-introduction-to-flock).
