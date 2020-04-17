# Global ignore file
> Tutorial to create an apply a git ignore file which applies to all repos.

## 1. Edit your config

Create the file first if it does not exist then open it to edit.

```sh
$ open ~/.gitconfig
```

Add the following to your config then save.

```
[core]
	excludesfile = ~/.gitignore
```

## 2. Create ignore file

```sh
$ touch ~/.gitignore

$ open ~/.gitignore
```

Add any rules to it. For example:

```
# Linux folder attributes and PyCharm metadata.
.idea

# Mac folder attributes
.DS_Store
```

Save and exit.


## 3. Test

Navigate to a repo.

Create a file or folder which is in your ignore list.

Then run

```sh
$ git status
```

You will see the file or folder will be ignored.
