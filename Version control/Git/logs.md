# Logs

## Log graph

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

Note when you use the `log` (or `lol`) command, you only see _up to the tip of the current branch_ and not after. This is usually useful to do on a feature branch to compare against `master`.


### Fix unwanted diverges with help of lol

In some cases, simple usage is not enough.

What about if the current branch is **behind** master? You won't see the master commits.

So run this command with **two** branch names.

```sh
$ git checkout my-feature
$ git lol master my-feature
```


What if your master is behind the remote?

Simply viewing the **local** master doesn't the full story.

```sh
$ git lol master
* 2c0d41a (HEAD -> master) chore: Update gem files
...
```

So run it with the **local** and **remote** branch references. Here see the who have diverged (work was done separately on both, though we don't know chronologically which happened first and this usually don't matter).

```sh
$ git lol master origin/master
* bb678a6 (origin/master, origin/HEAD) docs: Update README.md
* 2991dd2 docs: Update README.md
| * 2c0d41a (HEAD -> master) chore: Update gem files
|/
* 02e0a74 ...
* fdbdaa5 ...
```

If you just run this, you'll create a new commit and you'll get a messy commit tree which winds between `master` and `origin`master`

```sh
$ git pull
```

So, a much cleaner way is to get the remote in your local master and shift your unpushed commits to on top of it. 
Not convinced? Read this article I found called [Please, oh please, use git --rebase](https://coderwall.com/p/7aymfa/please-oh-please-use-git-pull-rebase).

```sh
$ git pull --rebase
```

Now the tree is clean and there is **no** branching in the graph and **no** merge commit.

```
$ git lol
* f897f5c (HEAD -> master) chore: Update gem files
* bb678a6 (origin/master, origin/HEAD) docs: Update README.md
* 2991dd2 docs: Update README.md
* 6155e4b docs: Update README.md
```

Next, push local commits to the remote. When you check afterwards, you'll see `master` and `origin/master` will be in sync.

```sh
$ git push

$ git lol
* f897f5c (HEAD -> master, origin/master, origin/HEAD) chore: Update gem files
* bb678a6 docs: Update README.md
* 2991dd2 docs: Update README.md
* 6155e4b docs: Update README.md
* 14bbd8b docs: Add tag badge
```
