# View commits

## Commit details

```sh
$ git log -p
```

Most recent commit only

```sh
$ git show
```

## Merges

View commits of type merge.

```sh
$ git log --merges
```

## Tags

View tag names.

```sh
$ git tag
```

View commit details for each tag.

```sh
$ git log --simplify-by-decoration --pretty='%C(yellow)%h %C(bold blue)%ci%C(green)%d %Creset%s'
```

## File history

View history for a given file.

```sh
$ git log PATH
```

Show actual lines changed.

```sh
$ git log -p PATH
```
