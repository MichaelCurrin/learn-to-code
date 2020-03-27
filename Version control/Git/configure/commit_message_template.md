# Git commit message template

Configure `git` to use a preset commit message in repo.

See also this [blog post](https://thoughtbot.com/blog/better-commit-messages-with-a-gitmessage-template).

## Setup

### Create template

Create a commit message template file named `_COMMIT_MESSAGE`. Add `.txt` if you want.

For example, with a Jira ticket number used for the prefix:

```sh
[ABC-123] 
```

Then use the command-line:

```sh
echo '[ABC-123] ' > _COMMIT_MESSAGE
```

### Exclude version version control

The file should not be added to version control.

Therefore add `_COMMIT_MESSAGE` to your local ignore file (which will then appear for others too. Or even better, add `_COMMIT_MESSAGE` to your [Global ignore file](global_ignore_file.md), so that the repo's ignore file is unaffected and _all_ your repos will ignore this file.

### Link to template

Navigate to a repo.

Open the local config edit view.

```sh
git config --local -e
```

Set a config such as the following, using a tab for indentation.

```
[commit]
	template = ~/foo-message.txt
```

## Usage

How to make use of the template.

This appears in the command line when doing a commit no message.

```sh
git commit
```

And also appears in the commit message view for VS Code.

When you are done, you can remove the file from the config, empty the template file or put a new message in it.
