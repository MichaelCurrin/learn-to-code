# Read Cron Mails in a GUI
> How to view cron job results in the Thunderbird mail client.

## Summary

The aim is to automate scripts (e.g. Python or Bash), on a Linux or Mac OS, at the same time every day or week. Then to also monitor the successes or failures in a way that's easy to manage - in this case with a mail client GUI. This is especially if you have a lot of scripts to run, they run frequently, or the output of each is long and is included in the mail body.

This tutorial covers how to:

1. Install `crontab` and schedule a script to run job.
2. Install `mail` and use it to view cron job output.
3. Use Thunderbird Mail as a mail client to the view cron job output.


## 1. Setup crontab

### 1.1 Install

You should have `crontab` installed on Debian, Ubuntu or Mac OS. If not then follow this:

```bash
sudo apt-get update
sudo apt-get install cron
```

Choose or create a script you want run on a schedule. For example, create  `~/Documents/test.sh` and make it executable with `chmod +x test.sh`. For this tutorial you can just use `echo "Test"` directly without creating a script.

Before setting up the crontab job, make a note of what your shell and path values. These will need to be set explicitly in crontab to make a script execute in the same environment as it did when executed in the terminal.

```bash
$ echo $SHELL
e.g. /bin/bash
$ echo $PATH
e.g. /usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin
```

Alternatively, view the variables which are already set in the system-wide crontab.
```bash
$ view /etc/crontab
```

### 1.2 Create a job

Open crontab.

```bash
$ crontab -e
```

Then follow the prompt to select an editor. Use `nano` if you are not familiar with `vim`. You can always change later with `$ select-editor` or `$ export EDITOR=vim`.


Now set SHELL and PATH variables at the start of the file, pasting what you got earlier. For example.

```bash
SHELL=/bin/bash
PATH=/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin
```


Set mail recipient. Something like one of these.

```bash
# Send the mail to the root user.
MAILTO=root
# Send the mail to your user.
MAILTO=michael
# Send the mail to an external platform. This may need some extra configuration of your mail system.
MAILTO=abc@gmail.com
```

Setup a test job in the crontab file to print the phase "Test" every minute and every hour.

e.g. 
```
* * * * * echo "Test"
```

You can leave that job running while you get mail setup next.

For further details on crontab usage, see `$ man crontab` or [How Do I Setup A Cron Job?](https://askubuntu.com/questions/2368/how-do-i-set-up-a-cron-job).


## 2. Setup mail utility


### 2.1 Install

Install `mail` (this appeared to not be a default on Debian or Ubuntu).

```bash
$ sudo apt-get mailutils
```

You should have the `postfix` configuration prompts appear. I recommend choosing the "local" mail option for monitoring crontab output on the same machine. I've not tried the other options.

If you need to get back to the configuration later, enter:

```bash
$ sudo dpkg-reconfigure postfix
```

If it's not installed, then:

```bash
$ sudo apt-get install postfix
```

That is based on this post, which also covers setting up forwarding aliases - [How are Administrators Supposed To Read Root's Mail](https://askubuntu.com/questions/2261/how-are-administrators-supposed-to-read-roots-mail).


### 2.2 View mailbox

View mails for current user.

```bash
$ cd ~
$ view mbox
```

I tested this on Ubuntu and Debian. On Ubuntu, I found unfortunately that `mbox` was owned by root instead of current user and gave a permissions warning when exiting `mail` after reading mails. So I changed the owner using the below - you might want to as well.

```bash
$ # Check who the owner is for mbox (ignoring other files and directories in ~).
$ ls -l mbox 
$ # If the owner is root then change it to your user.
$ chmod michael:michael mbox
```

Open `mail`. Check that the test messages from crontab have appeared.

```bash
$ mail
```

Here are some alternatives to the command above.

Open mail for a specific user.

```bash
$ mail -u michael
$ mail -u anotherUser.
```

Open root user's mailbox. This requires `sudo`.

```bash
$ sudo mail -u root
$ # Or simply
$ sudo mail
```

You can also do this, according to [Setup A Mail Server](http://www.linuxintro.org/wiki/Set_up_a_mail_server).

```bash
$ sudo cat /var/spool/mail/michael
$ sudo cat /var/spool/mail/root
```

For help on mail, do one of these:

```bash
$ man mail
$ mail --help
```


## 3 Setup mail client

I found that Thunderbird Mail on Ubuntu was straightforward to setup but I haven't figured out Kmail on Debian yet.

### 3.1 Add account

Add logged in user to mail group, as recommended by [How Do I Read A Local Email In Thunderbird?](https://askubuntu.com/questions/192572/how-do-i-read-local-email-in-thunderbird).

```bash
$ sudo adduser $USER mail
```

Open Thunderbird Mail from applications.

Top menu -> Edit -> Account Settings

Click _Account Actions_ in the bottom left.

Click _Add Other Account..._

Then select "Unix Mailspool", again according to [How Do I Read A Local Email In Thunderbird?](https://askubuntu.com/questions/192572/how-do-i-read-local-email-in-thunderbird).

Enter name as you wish to be displayed. 

e.g. `michael`

Enter email address.

e.g. `michael@localhost`

Should also be able to use your device's name for the host part. 

Set this on Ubuntu under Settings => Details => Overview => Device name => myDeviceName. 

Then set email address in Thunderbird Mail in the format:

e.g. `michael@myDeviceName`

Leave the outgoing server details blank for now. If you wish to send mail, that is covered by other tutorials online.


### 3.2 View messages

Click "Get Messages" in Thunderbird Mail.

The mails in `mbox` detailing crontab output should now be available in Thunderbird Mail.

If you are happy, then go back and comment it out or change the frequency, so your mailbox doesn't get cluttered.

Add the scripts you want in crontab. Then check back in Thunderbird Mail to see that they ran and what the outcome was.
