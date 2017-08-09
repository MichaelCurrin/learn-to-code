# Working With Text

##  Create

Create a multi-line line text file.

Using cat.
```
$ cat -> newFile.txt<enter>
input line 1
input line 2
<ctrl+d>

$ cat newFile.txt # which outputs ...
input line 1
input line 2
```

Using echo.
```
# Create file.
echo -e "input line 1\ninput line 2" > newFile.txt
# Append to file.
echo -e "input line 3\ninput line 4" >> newFile.txt

$ cat newFile.txt # which outputs ...
input line 1
input line 2
input line 3
input line 4
```


Using nano
```
$ nano newFile.text
# edits existing file or creates a new one...
# press <ctrl>+O then <enter> to save.
# press <ctrl>+X to exit.
```

Using Vim.
```
$ vim newFile.txt
# edits existing file or creates a new one...
# press i to go to insert mode.
# press <esc> then :q!<enter> to exit.
```

## View

View text in files.


Open in VIM but in read-only view.
```
$ view filename.txt
```

View contents of file in file viewer. Press `q` to return.
```
$ less filename.txt
```

Display contents without entering a viewer or editor. I don't know if more does anything differently.
```
$ cat filename.txt
$ more filename.txt
```

Copy contents of file to another, using redirection stdout.
```
$ cat filename.txt > newFile.txt
$ more filename.txt > newFile.txt
```

Search contents of a file using regex.
```
$ cat filename.txt | grep "inp.*1"
```
