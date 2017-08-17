 
# Stats

## Disk usage

Get disk usage with human-readable flag for current dir and below.
```
$ du -H
```

Apply to selected dir and its contents.
```
$ du -H etc/
...
20K     etc/systemd
16K     etc/analog
12K     etc/init.d
188K    etc/
```

Apply to a file
```
$ du -H abc.py
4.0K abc.py
```
