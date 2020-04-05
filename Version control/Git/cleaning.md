# Cleaning

Clean up a git repo.

## Remove unversioned changes using reset and checkout

_Note: This section will only affect files which are **already** in version control. To remove unversioned files, skip to the next section._

This is useful if you have paused during a merge or rebase and want to restore to clean files.

Unstage changes. Note that reset is non-destructive to files. This should be done _before_ checkout.

```sh
$ git reset
```

Revert files to their version-control state. This is destructive (you'll lose any changes).

```sh
$ git checkout .
```

Run that from the root using `.` for current directory, as omitted the path will not do anything. 

You can also specify directories or filenames. Example:

```sh
$ git checkout foo/ bar/ baz
```

## Remove files using clean command

Help:

```
$ git clean -h
usage: git clean [-d] [-f] [-i] [-n] [-q] [-e <pattern>] [-x | -X] [--] <paths>...

    -q, --quiet           do not print names of files removed
    -n, --dry-run         dry run
    -f, --force           force
    -i, --interactive     interactive cleaning
    -d                    remove whole directories
    -e, --exclude <pattern>
                          add <pattern> to ignore rules
    -x                    remove ignored files, too
    -X                    remove only ignored files
```

### Flags

- Add `-n` or `--dry-run` to preview changes, then rerun the command without that flag.
- Use `-f` to do a whole batch as below, unless you prefer interactive mode.

### Commands

- Remove untracked files. The `-d` is optional, for directories.
    ```sh
    $ git clean -f -d
    ```
- Remove ignored files.
    ```sh
    $ git clean -f -X
    ```
- Remove untracked and ignored files.
    ```sh
    $ git clean -f -x
    ```

Based on [source](https://coderwall.com/p/g16jpq/keep-your-git-directory-clean-with-git-clean-and-git-trash).

## Branches

Do this before continuing with the rest of this document, so that your local repo's origin will reflect the branches on remote

```bash
$ git fetch
```

### Display

For more info see answers on StackOverflow question - [Remove old remote branches from git](https://stackoverflow.com/questions/17470691/remove-old-remote-branches-from-git).

```bash
$ git branch
feature_branch_C
feature_branch_D
feature_branch_E
feature_branch_F
* develop
master
```

Display local and remote branches known to local git.

```bash
$ git branch -a
* develop
feature_branch_C
feature_branch_D
feature_branch_E
feature_branch_F
master
remotes/origin/HEAD -> origin/develop
remotes/origin/develop
remotes/origin/feature_branch_A
remotes/origin/feature_branch_B
remotes/origin/feature_branch_C
remotes/origin/feature_branch_D
remotes/origin/feature_branch_E
remotes/origin/feature_branch_F
remotes/origin/master
```

Display only remote branches.

```
$ git branch -r
remotes/origin/develop
remotes/origin/feature_branch_A
remotes/origin/feature_branch_B
remotes/origin/feature_branch_C
remotes/origin/feature_branch_D
remotes/origin/feature_branch_E
remotes/origin/feature_branch_F
remotes/origin/master
```

Get more info on what commit each branch is pointing to using this. You could also change the flag to `-av` for more branches.

```bash
$ git branch -v
*   develop                                                    abcdef01 Short hash left and commit message here
feature_branch_C                                               ........ ...
feature_branch_D                                               ........ ...
feature_branch_E                                               ........ ...
feature_branch_F                                               ........ ...
```

### Remove unused branches

Feature branches may accumulate in your repo over time, from your own work or when doing a `git fetch` to get branches of other users working on the repo.

Delete a feature branch which is no longer required, such as it was deleted on the remote repo after it was merged into develop.

```bash
$ # Delete invidually. Note their remotes are not affected.
$ git branch -d feature_branch_C feature_branch_D
$ # Result.
$ git branch -a
* develop
feature_branch_E
feature_branch_F
master
remotes/origin/HEAD -> origin/develop
remotes/origin/develop
remotes/origin/feature_branch_A
remotes/origin/feature_branch_B
remotes/origin/feature_branch_C
remotes/origin/feature_branch_D
remotes/origin/feature_branch_E
remotes/origin/feature_branch_F
remotes/origin/master
```

Note that `-d` is a safe option which may raise an error like this and can be overridden using `-D`.
```
error: The branch 'feature_branch_A' is not fully merged.
If you are sure you want to delete it, run 'git branch -D feature_branch_A'.
```

Consider branches A and B above which were pushed to the remote repo by other users but were never worked on using the local machine. Yet they were added as remotes by a fetch or pull. If they are no longer in the _remote_ repo but still on your local repo, they are considered stale and can be deleted. The prune command can be used to delete the stale remotes without affecting the active ones.

Delete remote branches by name, by combining the delete and remote options.

```bash
$ git branch -dr origin/feature_branch_A origin/feature_branch_B origin/feature_branch_C origin/feature_branch_D
```

Instead of deleting by name, you can use the prune command to delete _all_ the branches on the remote which have been deleted.

```bash
$ git remote prune origin
 * [pruned] origin/feature_branch_A
 * [pruned] origin/feature_branch_B
 ...
```

If you have deleted branches lingering after the above, like I did, then alternatively you can run this. It delete _all_ your origin branches from your local repo (including master). You can then bring the remote's branches back in.

```bash
$ git branch -r | xargs -I {} git branch -dr {}
Deleted remote-tracking branch origin/master (was 463e6818).
Deleted remote-tracking branch origin/feature_branch_A (was 34df86aa).
...

$ git fetch
From github.com:user/repo
 * [new branch]        master                                     -> origin/master
 * [new branch]        develop                                    -> origin/develop
 * [new branch]        feature_branch_E                           -> origin/feature_branch_E
 * [new branch]        feature_branch_F                           -> origin/feature_branch_F
```

Check the result after using a step delete above.

```bash
$ git branch -a
* develop
feature_branch_E
feature_branch_F
master
remotes/origin/HEAD
remotes/origin/HEAD -> origin/develop
remotes/origin/feature_branch_E
remotes/origin/feature_branch_F
remotes/origin/master
```
