# Navigation

_TODO: This is not default behaviour on some systems I've tried as you get a message that the directory is not a legal filename. I need to check why this works on Debian and Ubuntu for me but not Linux Lite._

Use vim to view a directory and navigate around it.
```
$ view path/to/dir/
```

Example of what you see
```
" ============================================================================
" Netrw Directory Listing                                        (netrw v155)
"   /home/michael/path/to/dir
"   Sorted by      name
"   Sort sequence: [\/]$,\<core\%(\.\d\+\)\=\>,\.h$,\.c$,\.cpp$,\~\=\*$,*,\.o$,\.obj$,\.info$,\.swp$,\.bak$,\~$
"   Quick Help: <F1>:help  -:go up dir  D:delete  R:rename  s:sort-by  x:special
" ==============================================================================
../
./
fileA.py
myDir/
```

Navigate with the arrow keys and press enter.

You can try the shortcuts at the top.

Press `p` to show a preview of a file.

For usual Vim help, type `:help` and press enter.

