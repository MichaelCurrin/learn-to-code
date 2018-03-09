# Pipes and Redirection

## Redirecting output

```bash
# Split stdout and std error to two files.
$ command > stdout.txt 2> stderr.txt

# Send both to same place.
$ command > stdout.txt 2>&1

# discard entire output
$ command > /dev/null 2>&1
```

## Redirecting input

```bash
# Output contents of file.
$ more < file.txt

# Execute query.
$ sqlite3 myDatabase.db < myQuery.sql
```

## Piping

```bash
# Send query string to database.
$ echo "SELECT * FROM myTable;" | sqlite3 myDatabase.db

# Work with results of a regex search of files.
$ grep word * | sort
$ grep "text to find" filename.txt | sort | head
$ grep -irn "text to find" | sort | tail


# Connected processes.
$ ps | sort | less

# See process names which are running exclude process named sh
# (i.e. shell) and paginate using `more`.
$ ps -a | sort | unique | grep -v sh | more
```
