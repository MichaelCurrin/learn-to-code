# How to view cron job output in a mail client

## Summary

The aim here is to automate scripts (e.g. Python or Bash) to run on a Linux or Mac OS machine, at the same time every day or week. Then to also monitor the successes or failures in way that's easy to manage. This is especially if you have a lot of scripts to run, they run frequently, or the output of each is long.

This tutorial covers how to:
1. Install `crontab` and schedule a script to run job.
2. Install `mail` and use it to view cron job output.
3. Use Thunderbird Mail as a mail client to the view cron job output.

The first two steps should work on Debian and Ubuntu, but the third step is only covered here for Thunderbird Mail on Ubuntu. 


## 1. Setup crontab

### 1.1 Install

You should have `crontab` installed on Debian, Ubuntu or Mac OS. If not then follow this:
```
sudo apt-get update
sudo apt-get install cron
```
Choose or create a script you want run on a schedule. For example, create  `~/Documents/test.sh` and make it executable with `chmod +x test.sh`. For this tutorial you can just use `echo "Test"` directly without creating a script.

Before setting up the crontab job, make a note of what your shell and path values. These will need to be set explicitly in crontab to make a script perform in the same environment as it did when executed in the terminal.
```
$ echo $SHELL
e.g. /bin/bash
$ echo $PATH
e.g. /usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin
```

### 1.2 Create a job

Open crontab.
```
$ crontab -e
```
Then follow the prompt to select an editor. Use `nano` if you are not familiar with `vim`. You can always change later with `$ select-editor` or `$ export EDITOR=vim`.


Now set SHELL and PATH variables at the start of the file, pasting what you got earlier. For example.
```
SHELL=/bin/bash
PATH=/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin
```


Set mail recipient. Something like one of these.
```
MAILTO=root
MAILTO=michael
MAILTO=abc@gmail.com
```

Setup a test job in the crontab file to print the phase "Test" every minute and every hour.

e.g. `* * * * * echo "Test"`

You can leave the job running while you get mail setup next

For further details on crontab usage, see `$ man crontab` or https://askubuntu.com/questions/2368/how-do-i-set-up-a-cron-job.


## 2. Setup mail utility


### 2.1 Install

Install `mail` (this appeared to not be a default on Debian or Ubuntu).
```
$ sudo apt-get mailutils
```

You should have the `postfix` configuration prompts appear. I recommend choosing the "local" mail option for monitoring crontab output on the same machine. I've not tried the other options.

If you need to get back to the configuration later, enter:
```
$ sudo dpkg-reconfigure postfix
```
If it's not installed, then:
```
$ sudo apt-get install postfix
```

That is based on this post, which also covers setting up forwarding aliases. https://askubuntu.com/questions/2261/how-are-administrators-supposed-to-read-roots-mail


### 2.2 View mailbox

View mails for current user.
```
cd ~
view mbox
```
I tested this on Ubuntu and Debian. On Ubuntu, I found unfortunately that `mbox` was owned by root instead of current user and gave a permissions warning when exiting `mail` after reading mails. So I changed the owner using the below - you might want to as well.
```
# Check who the owner is for mbox (ignoring other files and directories in ~).
$ ll mbox 
# If the owner is root then change it to your user.
$ chmod michael mbox
# Check that it worked
$ ll mbox
```

Open mail. Check that the test messages from crontab have appeared.
```
$ mail
```

Here are some alternatives to the command above.

Open mail for a specific user.
```
$ mail -u michael
$ mail -u anotherUser.
```
Open root user's mailbox. This requires `sudo`.
```
$ sudo mail -u root
# Or simply
$ sudo mail
```

You can also do this, according to http://www.linuxintro.org/wiki/Set_up_a_mail_server
```
$ sudo cat /var/spool/mail/michael
$ sudo cat /var/spool/mail/root
```


For help on mail
`man mail`
`mail --help`


## 3 Setup mail client

I found that Thunderbird Mail on Ubuntu was straightforward to setup but I haven't figured out Kmail on Debian yet.

Add logged in user to mail group as recommended by https://askubuntu.com/questions/192572/how-do-i-read-local-email-in-thunderbird
```
sudo adduser $USER mail
```

## 3.1 Add account

Open Thunderbird Mail from applications.

Top menu -> Edit -> Account Settings

Click _Account Actions_ in the bottom left.

Click _Add Other Account..._

Then select "Unix Mailspool", according to this post. https://askubuntu.com/questions/192572/how-do-i-read-local-email-in-thunderbird

Enter name as you wish to be displayed. 

e.g. `michael`

Enter email address.

e.g. `michael@localhost`

Should also be able to use your device's name for the host part. 

Set this on Ubuntu under Settings => Details => Overview => Device name => myDeviceName. Then set email address in Thunderbird Mail as 

e.g. `michael@myDeviceName`

Leave the outgoing server details blank for now. If you wish to send mail, that is covered by other tutorials online.

## 3.2 View messages
Click "Get Messages" in Thunderbird Mail.

The mails in mbox detailing crontab output should now be available in Thunderbird Mail.

If you are happy, then go back and comment it out or change the frequency, so your mailbox doesn't get cluttered.

Add the actual scripts you want to run in crontab.

