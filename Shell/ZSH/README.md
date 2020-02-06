# ZSH

## What is ZSH?

- [Z Shell](https://en.wikipedia.org/wiki/Z_shell) on Wikipedia
  > The Z shell (Zsh) is a Unix shell that can be used as an interactive login shell and as a command interpreter for shell scripting. Zsh is an extended Bourne shell with many improvements, including some features of Bash, ksh, and tcsh.
- [What is ZSH, and Why Should You Use It Instead of Bash?](https://www.howtogeek.com/362409/what-is-zsh-and-why-should-you-use-it-instead-of-bash/)

## Resources

### Install and configure ZSH

- [10 Zsh Tips & Tricks: Configuration, Customization & Usage](https://www.sitepoint.com/zsh-tips-tricks/)

#### ZSH Guides for Mac

- [How to Configure your macOs Terminal with Zsh like a Pro](https://www.freecodecamp.org/news/how-to-configure-your-macos-terminal-with-zsh-like-a-pro-c0ab3f3c1156/)
- [My Terminal Setup: iTerm + Zsh](https://welearncode.com/terminal-setup/)
- [Moving to zsh – MacSysAdmin 2019](https://scriptingosx.com/zsh/)

#### Oh my ZSH

- [Oh my zsh](https://ohmyz.sh/) official site
  > Oh My Zsh is a delightful, open source, community-driven framework for managing your Zsh configuration. It comes bundled with thousands of helpful functions, helpers, plugins, themes, and a few things that make you shout...
- [Github](https://github.com/ohmyzsh/ohmyzsh)

_Oh my ZSH_ is a config manager for ZSH. By following these guides from _Oh My ZSH_ docs, you can install _ZSH_ and _Oh my ZSH_ at once.

- [Installing ZSH](https://github.com/ohmyzsh/ohmyzsh/wiki/Installing-ZSH)
- [Manual installation](https://github.com/ohmyzsh/ohmyzsh#manual-installation)
- Upgrade ZSH
    ```sh
    upgrade_oh_my_zsh
    ```

### Usage

- [Learn the basics of the ZSH shell](https://linuxconfig.org/learn-the-basics-of-the-zsh-shell)
- [10 Zsh Tips & Tricks: Configuration, Customization & Usage](https://www.sitepoint.com/zsh-tips-tricks/) (repeated from above section)

## Setup

### How to install

[source](https://github.com/ohmyzsh/ohmyzsh/wiki/Installing-ZSH)

- macOS
    ```sh
    brew install zsh
    ```
- Debian/Ubuntu
    ```sh
    sudo apt install zsh
    ```

### Try it out

Use ZSH _without_ setting it as your default shell.

Be sure to start a shell in a way that replaces the current shell i.e. This command will kill the old process and start a new one, ignoring any history of commands and configured values.

Use the `exec` command with the `--login` flag so the shell acts as if invoked by login. [source](https://www.gnu.org/software/bash/manual/html_node/Invoking-Bash.html)


```sh
# Switch.
exec -l zsh
# Revert.
exec -l bash
```

### Set ZSH as default

```sh
chsh -s $(which zsh)  # this should resolve to /bin/zsh
```

### Uninstall

#### Option A - just ZSH

Remove ZSH config.

```sh
rm ~/.zshrc
```

Set Bash as default shell.

```sh
chsh -s $(which bash)
```

Uninstall ZSH.

- macOS
    ```sh
    brew uninstall zsh --force
    ```
- Debian/Ubuntu
    ```sh
    sudo apt-get --purge remove zsh
    ```

#### Option B - Uninstall Oh my ZSH

Run this command on the command-line. It will remove itself and revert your previous bash or zsh configuration.

```sh
uninstall_oh_my_zsh
```

Source - [Uninstall Oh my ZSH](https://github.com/robbyrussell/oh-my-zsh#uninstalling-oh-my-zsh).
