 
# Stats

## Disk usage

Get disk usage with human-readable flag for current dir and below.
```
$ du -h
```

Get size of a file
```
$ du -h abc.py
4.0K abc.py
```

Get size of selected dir and its contents.
```
$ du -h etc/
...
20K     etc/systemd
16K     etc/analog
12K     etc/init.d
188K    etc/
```

Get one line summary of selected dir's size.
```
$ du -s -h etc/
188K    etc/
```
