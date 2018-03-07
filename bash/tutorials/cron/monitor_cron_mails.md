# Read Cron Mails in a GUI
_How to view cron job results in the Thunderbird mail client._

## Summary

The aim is to automate scripts (e.g. Python or Bash), on a Linux or Mac OS, at the same time every day or week. Then to also monitor the successes or failures in a way that's easy to manage - in this case with a mail client GUI. This is especially if you have a lot of scripts to run, they run frequently, or the output of each is long and is included in the mail body.

This tutorial covers how to:

1. Install `crontab` and schedule a script to run job.
2. Install `mail` and use it to view cron job output.
3. Use Thunderbird Mail as a mail client to the view cron job output.

If you have a cron job running, you can probably skip step 1 and get to the part about mails.


## 1. Setup crontab

Note that you do not necessarily have to use `crontab`. You can put scripts in `/etc/cron.daily` and they will run daily, provided they are executable and have no extension.

### 1.1 Install

You should have `crontab` installed on Debian, Ubuntu or Mac OS. If not then follow this:

```bash
$ sudo apt-get update
$ sudo apt-get install cron
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
```bash
# m h  dom mon dow   command
  * *  *   *   *     echo 'Test!'
```

You can leave that job running while you get mail setup next.

For further details on crontab usage, see `$ man crontab` or [How Do I Setup A Cron Job?](https://askubuntu.com/questions/2368/how-do-i-set-up-a-cron-job).


## 2. Setup mail utility

### 2.1 Install

Install `mail` (this appeared to not be a default on Debian or Ubuntu).

```bash
$ sudo apt-get install mailutils
```

The `postfix` configuration prompts appear. From setup types, I recommend choosing the "local" mail option if you only need to deliver mail on the local machine. Then when choosing domain name, you can leave it as the default value provided.

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

View mails for current user. This tutorial assumes use of the `mbox` format, but `Maildir` should also work fine in Thunderbird. The differences between the systems are explained [here](https://wiki.dovecot.org/MailboxFormat).

First identify the location of your user's mbox file. This will either be an "mbox" file named "mbox", in your home directory, or an mbox type file named after your user in the `/var/mail` directory.

There are two locations for your mail, as shown when exiting the `mail` assistant after viewing some mails.
- `/home/michael/mbox`
- `/var/mail/michael`


Ensure that your user has permissions for your user's mail box in `/var/mail`.

```bash
$ cd /var/mail
$ # This mail directory contains a file for each user. 
$ # Initially it only has one named root, but the additional file can be created as below.
$ ls -l
-rw------- 1 root mail 0 Mar  7 21:38 root
$ sudo mail -u michael
$ ls -l
-rw------- 1 root mail 0 Mar  7 21:40 michael
-rw------- 1 root mail 0 Mar  7 21:38 root
$ # Change the permissions on the file that was just created.
$ sudo chown michael:michael /var/mail/michael
```

Now run the `mail` command to get the interactive mail viewer. Press enter to go through some mails and `q` and enter to exit. 

```
$ mail
"/var/mail/michael": 5 messages 1 new 4 unread
 U   1 Cron Daemon        Wed Mar  7 22:44  23/701   Cron <michael@compaq-lite> echo 'Test!'
 U   2 Cron Daemon        Wed Mar  7 22:45  22/676   Cron <michael@compaq-lite> echo 'Test!'
 U   3 Cron Daemon        Wed Mar  7 22:46  22/676   Cron <michael@compaq-lite> echo 'Test!'
 U   4 Cron Daemon        Wed Mar  7 22:47  22/676   Cron <michael@compaq-lite> echo 'Test!'
>N   5 Cron Daemon        Wed Mar  7 22:48  20/657   Cron <michael@compaq-lite> echo 'Test!'
?
...
Message-Id: <20180307204801.7EA75868DB@compaq-lite>
Date: Wed,  7 Mar 2018 22:48:01 +0200 (SAST)

Test!

? q
Saved 1 message in /home/michael/mbox
Held 4 messages in /var/mail/michael
```

Some more tips when in `mail`
- `> 1`: view mail ID 1
- `> help`: view the list of commands

See more details at this [page](http://manpages.ubuntu.com/manpages/xenial/man1/bsd-mailx.1.html), which don't seem to be covered in the man pages indicated below.


For more help on `mail` command, do one of these:

```bash
$ man mail
$ mail --help
```

As an extra, you can view sudo's mail box like this, though you probably won't see any mails there yet.

```bash
$ sudo mail
```

Or the mail for other users like this.

```bash
$ sudo mail -u someotheruser
```

You can also do this, according to [Setup A Mail Server](http://www.linuxintro.org/wiki/Set_up_a_mail_server).

```bash
$ sudo cat /var/spool/mail/michael
$ sudo cat /var/spool/mail/root
```

If you expect to see mails but your mail box is empty, check the system logs. This was recommended in [Where Is The Cron Crontab Log?](https://askubuntu.com/questions/56683/where-is-the-cron-crontab-log).

```bash
$ grep CRON /var/log/syslog
...
Mar  7 22:24:01 compaq-lite CRON[10607]: (michael) CMD (echo 'Test!')
Mar  7 22:25:01 compaq-lite CRON[10619]: (michael) CMD (echo 'Test!')
...
```

If you have mails created and visible in your mbox file, you can continue.


## 3 Setup mail client

I found that Thunderbird Mail on Ubuntu was straightforward to setup but I haven't figured out Kmail on Debian yet.

### 3.1 Install mail client

If you do not have Thunderbird Mail installed, see if you can download it using your system's package manager.

### 3.2 Add account

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

You could also set the domain to be your device's name. 

To read or update your device name in Unbuntu, go to `Settings => Details => Overview => Device name`. 

Then set email address in Thunderbird Mail in the format:

e.g. `michael@myDeviceName`


Leave the outgoing server details blank for now. If you wish to send mail, that is covered by other tutorials online.


### 3.3 View messages

Click "Get Messages" in Thunderbird Mail.

The mails in `mbox` detailing crontab output should now be available in Thunderbird Mail.

If you are happy, then go back and comment it out or change the frequency, so your mailbox doesn't get cluttered.

Add the scripts you want in crontab. Then check back in Thunderbird Mail to see that they ran and what the outcome was.
