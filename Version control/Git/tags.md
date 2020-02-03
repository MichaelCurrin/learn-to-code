# Git Tags

From the _git_ docs: [Git Basics Tagging](https://git-scm.com/book/en/v2/Git-Basics-Tagging)

## Create

Replace `TAG_NAME` with a value such as `v0.0.1`.

```sh
$ git tag TAG_NAME
```

## View

```sh
$ git tag
```
```
v0.0.1
v0.0.2
...
```

## Latest

Latest tag for current branch:

```sh
$ git describe --abbrev=0 --tags
```

Latest tag across all branches:

```sh
$ git describe --tags `git rev-list --tags --max-count=1`
```

[source](https://gist.github.com/rponte/fdc0724dd984088606b0)

## Push

Push current branch, plus all tags.

```sh
$ git push --tags
```

## Annotated tag

Standard tags are "lightweight" tags. You also get "annotated tags", which have tagger info, date and a message.

According to Git docs:

> Annotated tags, however, are stored as full objects in the Git database. 
>
> They’re checksummed; contain the tagger name, email, and date; have a tagging message; and can be signed and verified with GNU Privacy Guard (GPG). 
>
> It’s generally recommended that you create annotated tags so you can have all this information; but if you want a temporary tag or for some reason don’t want to keep the other information, lightweight tags are available too.

### Create

```sh
$ git tag -a v1.4 -m "my version 1.4"
```

### View

```sh
$ git tag
v1.4
```

```sh
$ git show v1.4
tag v1.4
Tagger: ...
Date:   ...

my version 1.4

commit ...
```

See [StackOverflow answer](https://stackoverflow.com/questions/11514075/what-is-the-difference-between-an-annotated-and-unannotated-tag).

### More about annotated tags

> "TL;DR
> 
> The difference between the commands is that one provides you with a tag message while the other doesn't. An annotated tag has a message that can be displayed with git-show(1), while a tag without annotations is just a named pointer to a commit.
> 
> More About Lightweight Tags
>
> Unless you select the -s flag for a signed tag, the tag will be a lightweight, unsigned tag by default. There are also some differences with lightweight tags:
> 
> When you use git tag <tagname>, Git will create a tag at the current revision but will not prompt you for an annotation. It will be tagged without a message.
> When you use git tag -a <tagname>, Git will prompt you for an annotation unless you have also used the -m flag to provide a message.
> When you use git tag -a -m <msg> <tagname>, Git will tag the commit and annotate it with the provided message.
> When you use git tag -m <msg> <tagname>, Git will behave as if you passed the -a flag for annotation and use the provided message.
> Basically, it just amounts to whether you want the lightweight tag to have an annotation associated with it or not."
