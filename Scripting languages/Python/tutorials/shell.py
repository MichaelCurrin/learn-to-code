import shlex
import subprocess

# run

cmd = 'echo "Here are your files:" ; ls'
result = subprocess.run(cmd, capture_output=True, text=True, shell=True)
print(result.returncode)
# => 0
print(result.stdout)
# =>
# Here are your files:
# if_and_or.md
# nltk.md
# shell.md
# shell.py
# shell_test.py
print(result.stderr)
# =>

print('---')

cmd = 'echo "Failing script!" ; exit 1'
result = subprocess.run(cmd, capture_output=True, text=True, shell=True)
print(result.returncode)
# => 1
print(result.stdout)
# => Failing script!
print(result.stderr)
# =>
print('===\n')


# getstatusoutput


cmd = 'echo "Here are your files:" ; ls'
exitcode, data = subprocess.getstatusoutput(cmd)

print(exitcode)
# => 0
print(data)
# =>
# Here are your files:
# if_and_or.md
# nltk.md
# shell.md

print('===\n')


# check_output


# Examples are copied from the function's docstring.
subprocess.check_output(["ls", "-l", "/dev/null"])
# => b'crw-rw-rw- 1 root root 1, 3 Oct 18  2007 /dev/null\n'

subprocess.check_output(["/bin/sh", "-c",
                         "ls -l non_existent_file ; exit 0"],
                        stderr=subprocess.STDOUT)
# => b'ls: non_existent_file: No such file or directory\n'

subprocess.check_output(["sed", "-e", "s/foo/bar/"],
                        input=b"when in the course of fooman events\n")
# => b'when in the course of barman events\n'

try:
    print(subprocess.check_output(
        'echo "About to fail!" ; exit 1', text=True, shell=True))
except subprocess.CalledProcessError as e:
    print(e.output)
    print(e.returncode)
    print(e.stdout)
    print(e.stderr)
    print(e.output)
