# Install cron
> Get `cron` and `crontab` and installed

From [Ubuntu crontab](https://www.rosehosting.com/blog/ubuntu-crontab/) guide.

## Ubuntu / Debian

```sh
sudo apt-get update && apt-get upgrade
```

```sh
sudo apt-get install cron
```

## Configure crontab

Edit with default.

```sh
crontab -e
```

Edit with vim.

```sh
VISUAL=vim crontab -e
```

Or edit the file directly - not recommended.

```sh
nano /etc/crontab
```

List configured jobs:

```sh
crontab -l
```
