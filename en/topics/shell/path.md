# Shell path guide

Typical locations of shells are covered below. This is useful in the terminal and in scripts (where the target shell is set in the first line). For terminal use where you do not need to be specific, the name will be fine e.g. `bash` rather than `/bin/bash`.

Not all will be installed though.


```sh
/bin/bash

/bin/zsh

/bin/dash
```

Historically for the Bourne Shell before Bash, this sh form is
faster and lacks some features. It is usually aliased to dash on Debian 
or to Bash on other systems. Read more [here](https://www.linuxquestions.org/questions/programming-9/difference-between-bin-bash-and-bin-sh-693231/).

```sh
/bin/sh
```

## Shebang

Choose a shell or programming language in the first line of an executable script.

For Bash:

```sh
#!/bin/bash
```

Preferred over the very general `!#bash`.

Use options. e.g.

```sh
#!/bin/bash -e
```

This below is the most portable and so is often used instead for a shebang in a file. Note the space, since `env` is a command and `bash` is the argument. Note options cannot be used in the first line in this format.

```sh
#!/usr/bin/env bash
set -e
```

This is commonly used for other languages. e.g.

```sh
#!/usr/bin/env python
```
