"""
This script focuses on environment variables and setting a prefix in
click. Click is an a new alternative to argparse and is available in
python 2 and 3.

Set an environment variable in the bash shell, then run this python
script to see the value set at the environment level.
Whether the environment variable is set or not, the value used in arguments
will take preference.

Set environment variable names with this format:
 - Top-level variables as PREFIX_VARIABLE
 - Function variables as PREFIX_FUNCTION_VARIABLE

Where
- PREFIX is a your custom prefix e.g. the name of your script or project.
- FUNCTION is the name of the function to use this variable.
- VARIABLE is the variable name with an option function or entry point function.

On prefix syntax, see:
    http://click.pocoo.org/6/options/#values-from-environment-variables

On splitting environment variable values on spaces, see:
    http://click.pocoo.org/6/options/#multiple-values-from-environment-values


Example usage:

    Help
      $ python click_prefix.py --help
      $ python click_prefix.py buy --help

    Show script defaults.
      $ python click_prefix.py buy

    Set environment variables, using auto_envvar_prefix feature.
    Note that `shop` is a string, while `fruit` and `vegetable` are tuples,
    since we set `multiple=True` on them.
      $ export CLICKTEST_SHOP='The Market'
      $ export CLICKTEST_BUY_FRUIT='banana'
      $ export CLICKTEST_BUY_VEGETABLE='peas carrots'
      $ python click_prefix.py buy

    Override environment variables with commandline option.
      $ python click_prefix.py buy --fruit grapes
      $ python click_prefix.py buy --fruit orange --fruit kiwi -v cabbage

    Unset an environment variable.
      $ export -n CLICKTEST_SHOP
"""
from __future__ import print_function

import click

# Enviroment variable names must start with this.
ENVVAR_PREFIX = 'CLICKTEST'


# Entry point for the commandline.
@click.group(chain=True)
@click.option('--shop', '-s', default='Fruit & Veg City')
def run(shop):
    """
    Go shopping.
    """
    # This would possibly not do anything, as it runs when even when using
    # help on an option.
    print('Run')
    print('shop: {0}\n'.format(shop))


# Buy is an option of the script, with fruit and vegetable as values.
@run.command()
@click.option('--fruit', '-f', multiple=True, default=['apple'])
@click.option('--vegetable', '-f', multiple=True, default=['carrot'])
def buy(fruit, vegetable):
    """
    Set a fruit and vegetable to buy. If no values are set in environment
    variables or in arguments, defaults are used.
    """
    print('Buy')
    print('fruits: {0}'.format(fruit))
    print('vegetables: {0}\n'.format(vegetable))


if __name__ == '__main__':
    run(auto_envvar_prefix=ENVVAR_PREFIX)
