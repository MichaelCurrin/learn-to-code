# Add a prefix to commit messages
> Add a reusable prefix to your commit message

If your project requires adding a prefix (such as a Jira ticket number) to all commits on a feature branch, you can get this inserted automatically, for commits made on the command-line or VSCode.


## 1. Configure a template

Choose a location for your template.

_Note: The template does not need to be added version control, as you will change it locally depending on the feature you are working on. You might want to create directory set aside for just templates. If you create in the current repo, `git` will see it as a new file and you might not want that._

Then add your prefix text (including a training space) to a new template file.

```bash
$ echo "[PROJ-123] " > PATH/TO/template.txt
```

Update the config for the target repo so that it will recognize the template.

```bash
$ cd <PATH_TO_REPO>
$ git config commit.template PATH/TO/template.txt
```


## 2. Make a commit

Edit a file and stage it so you can make a commit. Then do a commit with one of the following actions: 


### A. Command-line

```bash
$ git commit
```

Then you will see the message appear in the editor, including a trailing space.

```
[PROJ-123]
```

Add to the message and save the commit.


### B. VSCode

Or in VSCode go to the Source Control panel and you will see the prefix there. It does not keep the trailing space though.


## 3. Change it

Every time you do a commit in that repo, you will get that prefix.

When you are done with the current ticket or need to work on another, edit the template with another prefix.

```bash
$ open ~/PATH/TO/template.txt
```
