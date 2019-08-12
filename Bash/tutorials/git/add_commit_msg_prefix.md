# Add commit message prefix

Save yourself time and effort writign commit messages. If your project requires adding a prefix (such as a Jira ticket number) to all commits on a feature branch, you can get this inserted automatically.


## 1. Create a template

```bash
$ echo "[PROJ-123] " > ~/PATH/TO/template.txt
$ git config commit.template ~/PATH/TO/template.txt
```

The template should not be versioned as you will change it locally depending on the feature you are working on. You might want to create directory set aside for just templates. If you create in the current repo, `git` will see it as a new file and you might not want that.


## 2. Use it

With a change staged, try one of the following: 


### Command-line

```bash
$ git commit
```

You will see the message appear in the editor.

```
[PROJ-123]
```

Add to the message and save the commit.


### VSCode

Or in VSCode go to the Source Control panel and you will see the prefix there.


## 3. Change it

Every time you do a commit in that repo, you will get that prefix.

When you are done with the current ticket or need to work on another, edit the template with another prefix.

```
$ open ~/PATH/TO/template.txt
```
