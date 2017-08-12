# Git Tags

## Annotated tag

An annotated tag includes a message with a tag, in addition to the message of a merge.

See https://stackoverflow.com/questions/11514075/what-is-the-difference-between-an-annotated-and-unannotated-tag

### Question: 
"What is the difference between an annotated and unannotated tag?"

### Answer:

"TL;DR

The difference between the commands is that one provides you with a tag message while the other doesn't. An annotated tag has a message that can be displayed with git-show(1), while a tag without annotations is just a named pointer to a commit.

More About Lightweight Tags

Unless you select the -s flag for a signed tag, the tag will be a lightweight, unsigned tag by default. There are also some differences with lightweight tags:

When you use git tag <tagname>, Git will create a tag at the current revision but will not prompt you for an annotation. It will be tagged without a message.
When you use git tag -a <tagname>, Git will prompt you for an annotation unless you have also used the -m flag to provide a message.
When you use git tag -a -m <msg> <tagname>, Git will tag the commit and annotate it with the provided message.
When you use git tag -m <msg> <tagname>, Git will behave as if you passed the -a flag for annotation and use the provided message.
Basically, it just amounts to whether you want the lightweight tag to have an annotation associated with it or not."

### A comment

"... an annotated tag always has tagger (author) and date."

## Push

tbc

```
git push origin tags
```


Man page:
"--tags "All refs under refs/tags are pushed, in addition to refspecs explicitly listed on the command line"
```
$ git push --tags
```
