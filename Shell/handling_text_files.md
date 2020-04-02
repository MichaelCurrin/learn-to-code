# Handling text files
> How to view and edit text files include scripts using Unix terminal tools


## View files

- less
- more
- view


## Edit

- sed
    - Stream editor
- vi
- vim
    - Vi Improved
    - Vim as and IDE
        - Links
          - [Vim is the perfect IDE](https://dev.to/allanmacgregor/vim-is-the-perfect-ide-e80) 
          - [Use Vim like an IDE](https://vim.fandom.com/wiki/Use_Vim_like_an_IDE)
        - You don't have to set Vim as your main IDE but some people like to customize it and install plugins (to match what modern GUI IDEs already do) and learn the shortcuts for action (which are not intuitive). 
        - But I find the effort to learn and set up to too high. If you want to edit files on a remote server through the terminal - you probably should be making any major changes in version control or locally and you can also use VS Code extension to open remote files in your local IDE.
- nano
    - Less versatile than Vim, but nano is easy to learn.
    - It even gives you the shortcuts available at the bottom of the screen.
- Emacs


## Modify in place

- sed
  - Example
    - Replace `foo` with `bar` in _hello.txt_, from [tutorial](https://www.cyberciti.biz/faq/how-to-use-sed-to-find-and-replace-text-in-files-in-linux-unix-shell/)
      ```sh
      sed 's/foo/bar/g' hello.txt
      ```
- awk
