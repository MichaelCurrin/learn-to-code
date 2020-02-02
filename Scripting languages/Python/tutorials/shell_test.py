import shlex
import subprocess

# run

cmd = 'echo "Here are your files:" ; ls'


# This didn't work properly - only first command was executed. Perhaps it was split wrong. Or only one command is allowed even with separator.

cmd_list = shlex.split(cmd)
print(cmd_list)
result = subprocess.run(cmd, capture_output=True, text=True)
