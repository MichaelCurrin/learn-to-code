# Git commit message template

Configure `git` to use a preset commit message in repo.

See also this [blog post](https://thoughtbot.com/blog/better-commit-messages-with-a-gitmessage-template).

## Setup

### Create template

Create a template file with an arbitrary name. Here the repo is _foo_, so this is included in the template name. 

You could pick any a location in your user directory or Documents. This file should not be in the repo unless it is ignored (e.g. `.gitmessage`) in your ignore file.

e.g. `foo-message.txt`, here with a Jira ticket number.

```sh
[ABC-123] 
```

Using the command-line:

```sh
echo '[ABC-123] ' > ~/foo-message.txt
```


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
