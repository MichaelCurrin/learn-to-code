# Executing shell commands

The `subprocess` builtin module has a few ways to run shell (e.g. Bash) commands. See this guide on choosing the approach for you.

- Running a shell command inside Python is a _subprocess_, so we use the [subprocess](https://docs.python.org/3/library/subprocess.html) builtin module.
- Note that this guide is for Python 3.
- Also this is macOS / Linux, but hopefully this can work on Windows to except using appropriate PowerShell commands in place of Bash.
- These commands are split into the New API and Old API here, as described in the `subprocess` module.


## New API

- [run](https://docs.python.org/3/library/subprocess.html#subprocess.run)
    - > Runs a command, waits for it to complete, then returns a `CompletedProcess` instance.
    - Signature with defaults:
        ```python
        subprocess.run(args,
                       stdin=None, input=None, stdout=None, stderr=None, 
                       capture_output=False, shell=False, 
                       cwd=None, timeout=None, check=False, 
                       encoding=None, errors=None, text=None, env=None, 
                       universal_newlines=None)
        ```
    - Tips:
        - Leave `check=False` to avoid raising an error.
        - Set `capture_output=True` to return stdout and stderr.
        - Set `text=True` to enable text mode - input and output will be of type `str` rather than the `bytes` default.
    - This will return a [CompletedProcess](httpas://docs.python.org/3/library/subprocess.html#subprocess.CompletedProcess) instance.
- [Popen](httpas://docs.python.org/3/library/subprocess.html#subprocess.CompletedProcess)
    - > A class for flexibly executing a command in a new process.
    - e.g.
        ```python
        Popen(["/usr/bin/git", "commit", "-m", "Fixes a bug."])
    - This is used internally by `run`.


## Old API

- `call`
    - > Runs a command, waits for it to complete, then returns the return code.
- `getstatusoutput`
    - This is a high-level function which takes just one argument - the command you want to run, as a string.
    - Great if you want to always get output back even if the script
failed, but still know if it passed or failed.
- This does a few thing internally:
    - It runs the `check_output` function, which in turn runs `run`.
    - It strips newlines.
    - It converts input and output from `bytes` to `str`. You do not have to worry about running `.encode('utf-8')`.
    - With the `shell=True` parameter, it accepts command a string not a list.
    - It captures `stderr` for you.
    - It also catches the `CallProcessError` when running the command so you do not need to add a try-catch block.
- `check_output`
    - Function which takes a few arguments. If you like what `getstatusoutput` does then use that. If you need more control, use `check_output`.
    - This allows you to specify `input` as a text on _stdin_, though this must be in `bytes` format.
    - Accepts a command as a list (by default, when `shell=False`) or as a string (when `shell=True`). I don't know the actual impact of the the `shell` parameter.


## Tokenization
> Breaking a string command into an args list

It can be more intuitive to write your command as a `str`, but then it needs to be converted into a `list` to be handle. So use `shlex.split`.

Example:

``` python
cmd = 'ls -l'
shlex.split(cmd)
# => ['ls', '-l']
```

From [docs](https://docs.python.org/3/library/subprocess.html#popen-constructor)


```
command_line = "/bin/vikings -input eggs.txt -output "spam spam.txt" -cmd "echo '$MONEY'"
args = shlex.split(command_line)
print(args)
# ['/bin/vikings', '-input', 'eggs.txt', '-output', 'spam spam.txt', '-cmd', "echo '$MONEY'"]
```
