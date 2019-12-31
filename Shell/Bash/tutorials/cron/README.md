# Scheduling

## What is a cron?

Cron allows you to schedule tasks to run periodically.

> Cron allows you to schedule commands to be run on a periodic basis. With cron, you can run a command as frequently as every minute or as seldom as once a day, week, month or even year. You also can define more sophisticated rules, so commands run, for example, every five minutes, every weekday, every other hour and many other combinations. System administrators sometimes will use cron to schedule a local script to collect metrics every minute or to schedule backups. [source](https://www.linuxjournal.com/content/schedule-one-time-commands-unix-tool)

## What is the at command?

The `at` command lets you schedule tasks _once_ at a particular time in the future.

A task can resubmit iself to `at` to give the effect of period scheduling.

Tutorial on using `at` - [link](https://www.linuxjournal.com/content/schedule-one-time-commands-unix-tool).
