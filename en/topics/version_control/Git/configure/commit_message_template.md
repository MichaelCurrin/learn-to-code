# Git commit message template

Configure `git` to use a pre-filled commit message prefix for every commit. 

## Summary

- All new commits in the terminal or IDE can be made to start with a prefix template, only in the context of a repo.
- You can use an unversioned text file in a repo to set a commit message prefix.
- This can be used to associate all commits on a branch with a label such as ticket number.
- Setup steps:
	1. Create the template file.
	2. Exclude template from version control
	3. Configure the repo to use the template


## About

You might put a project name or branch name as the prefix. This is useful for including a Jira ticket number for example. This solution relies on functionality built into `git` and works well whether committing on the command-line or with an IDE (such as VS Code, which pre-fills the commit message field as soon as you finish a commit).

You can always edit or delete the template text for a particular commit and it will reppear the next time.

You can also make template file empty to turn the prefix behavior off.

See also this [blog post](https://thoughtbot.com/blog/better-commit-messages-with-a-gitmessage-template).


## Setup

### 1. Create the template file

Create a commit message template file named `_COMMIT_MESSAGE`. Add `.txt` extension if you want.

For example, with a Jira ticket number used for the prefix:

```
[ABC-123] 
```

Alternatively you could use a branch name.

Create the file - using the command-line here:

```sh
$ echo '[ABC-123] ' > _COMMIT_MESSAGE
```

### 2. Exclude template from version control

Ignore the template in a global git ignore file.

The file should not be added to version control, as you will change it locally depending on the feature you are working on and you don't need it to be in your history or repo code.

Therefore add `_COMMIT_MESSAGE` to your local ignore file (which will then appear for others too. Or even better, add `_COMMIT_MESSAGE` to your [Global ignore file](global_ignore_file.md), so that the repo's ignore file is unaffected and _all_ your repos will ignore this file.


### 3. Configure the repo to use the template

Navigate to a repo.

Then add to the repo's config using an approach below. Note that if you omit the `--global` flag, then the `--local` flag is implied.

- Do it in one line.
	```sh
	$ git config commit.template _COMMIT_MESSAGE
	```
- Or, open the local config edit view.
	1. Edit.
		```sh
		$ git config -e
		```
	2. Add content.
		```ini
		[commit]
			template = _COMMIT_MESSAGE
		```


## Usage

How to make use of the template.

1. Update the template with an appropriate message and save it.
2. Make a commit.
3. When you are done, you can remove the file from the config, empty the template file or put a new message in it.

See samples belows for making a commit.

### Use the command-line

```sh
$ git commit
```

Then you will see the message appear in the editor.

![Command-line](/.image/command-line.png)

Note that this won't work with this approach: `git commit -m 'My message'`.

### Use IDE

In VS Code, open the Source Control panel. See the commit message, edit it and commit

![VS Code](/.image/vs-code.png)

You might not see the message the very first time after setting up the prefix. But after that, whever you commit, the box will default back to the template.

