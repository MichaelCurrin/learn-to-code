# Bash

Bash is the shell  (command-line interpreter) for the GNU operating system. The name is an acronym for the "Bourne-Again SHell" and is a pun on Stephen Bourne's name. [source](https://devdocs.io/bash/html_node/what-is-bash_003f#What-is-Bash_003f).

It is commonly used on Linux systems. It was default shell for macOS, until Catalina made [ZSH](../ZSH/README.md) the default. Bash is what your system boots and logs in with. It is what you configure and run other programs on top of. You can also do programming/scripting in bash, as commands in the console or bash scripts (typically `.sh`).

Wikipedia definition:

> GNU Bash or simply Bash is a Unix shell and command language written by Brian Fox for the GNU Project as a free software replacement for the Bourne shell. First released in 1989, it has been used widely as the default login shell for most Linux distributions and Apple's macOS Mojave and earlier versions. [source](https://en.wikipedia.org/wiki/Bash_(Unix_shell))

Bash can be powerful and elegant to do fancy stuff in a one-line command or handling text or CSV succinctly without writing a Node or Python etc. I use it every day and the more I know about it and use it, the more I can do and the faster I get at it.

But, Bash has some things which are not so intuitive - variables are global by default, a script will keep executing commands even if one of them has an error code, there are no data types as everything is text. So think carefully before choosing to write a Bash script to solve your problem - perhaps write it in another language that can make development, debugging and maintenance a lot easier.

<!-- TODO how to run bash -->

## Resources

- [Bash](https://www.gnu.org/software/bash/) page on _gnu.org_.
- [Bash reference manual](https://devdocs.io/bash/) on _devdocs.io_.
- Tutorials
    - [Learn Bash in Y Minutes](https://learnxinyminutes.com/docs/bash/)
    - [The Bash Guide](https://guide.bash.academy/)
        > A quality-driven guide through the shell's many features.
    - [Learn Shell](https://www.learnshell.org/). Includes basic and advanced sections.
    - [Linux Shell Scripting Tutorial](https://bash.cyberciti.biz/guide/Main_Page)
- Cheat sheets
    - On [DevHints](https://devhints.io/bash)
