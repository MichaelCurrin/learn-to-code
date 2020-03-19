# Git commit message template

Configure `git` to use a preset commit message in repo.

See also this [blog post](https://thoughtbot.com/blog/better-commit-messages-with-a-gitmessage-template).

## Setup

### Create template

Create a template file with an arbitrary name and path. This should not be in the repo unless it is ignored. You could pick a location in your user directory or Documents.

e.g. `.gitmessage`. Here with a Jira ticket number and a space.

```sh
[ABC-123] 
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
		template = ~/.gitmessage
```

## Usage

How to make use of the template.

This appears in the command line when doing a commit no message.

```sh
git commit
```

And also appears in the commit message view for VS Code.

When you are done, you can remove the file from the config, empty the template file or put a new message in it.
