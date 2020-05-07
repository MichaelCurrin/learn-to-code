# Executing shell commands

The `subprocess` builtin module has a few ways to running shell (e.g. bash) commands. See this guide on choosing the approach for you.

Note that this guide is for Python 3. 

These commands are split into the New API and Old API here, as described in the `subprocess` module.


## New API

- `run`
    - > Runs a command, waits for it to complete, then returns a `CompletedProcess` instance.
    - Leave `check=False` to avoid raising an error.
    - Set `capture_output=True` to return stdout and stderr.
    - Set `text=True` to enable text mode - input and output will be of type `str` rather than the `bytes` default.
- `Popen`
    - > A class for flexibly executing a command in a new process.
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
    - It strips newlines
    - It converts input and output from `bytes` to `str`. You do not have to worry about running `.encode('utf-8')`.
    - With the `shell=True` parameter, it accepts command a string not a list.
    - It captures `stderr` for you.
    - It also catches the `CallProcessError` when running the command so you do not need to add a try-catch block.
- `check_output`
    - Function which takes a few arguments. If you like what `getstatusoutput` does then use that. If you need more control, use `check_output`.
    - This allows you to specify `input` as a text on _stdin_, though this must be in `bytes` format.
    - Accepts a command as a list (by default, when `shell=False`) or as a string (when `shell=True`). I don't know the actual impact of the the `shell` parameter.

## List

If you want to convert a `str` into `list` that is appropriate for a command argument, then use of the following:

``` python
cmd = 'ls -l'
shlex.split(cmd)
# => ['ls', '-l']
```
