# Logs


Using this git alias to show log as oneline and as a tree graph view.

```
log --graph --decorate --oneline
```

For example:

```sh
$ git checkout master
$ git lol
```

You can view the log of branch without switching to it.

```sh
$ git lol my-feature
```

Note when you use the `log` (or `lol`) command, you only see _up to the tip of the current branch_ and not after. This is usually useful to do on a feature branch to compare vs master.


But in some cases this is not enough.

What about if the current branch is **behind** master? You won't see the master commits.

So run this command with **two** branch names.

```sh
$ git checkout my-feature
$ git lol master my-feature
```


What if your master is behind the remote? Run with the local and remote branch references.

```sh
$ git lol master
* 2c0d41a (HEAD -> master) chore: Update gem files
...
```

Here see can see that we have diverged.

```sh
$ git lol master origin/master
* bb678a6 (origin/master, origin/HEAD) docs: Update README.md
* 2991dd2 docs: Update README.md
| * 2c0d41a (HEAD -> master) chore: Update gem files
|/
* 02e0a74 ...
* fdbdaa5 ...
```

If you just run this, you'll create a new commit and you'll get a messy commit tree.

```sh
$ git pull
```

So a much cleaner way is to get the remote in your local master and shift your unpushed commits to on top of it.
```sh
$ git pull --rebase
```
