"""
Demo of the argparse package.

See docs:
    https://docs.python.org/2/howto/argparse.html

This script works in python 2 and 3.

Usage:
    $ python argparse_demo.py --help

    $ python argparse_demo.py --cube=12 word 10

    $ python argparse_demo.py word 10 -c -c

    $ python argparse_demo.py 'convert to upper!' 20 --cube 3 --num 2 \
       --verbose -ccccccc
"""
from __future__ import print_function

import argparse


def run():
    """
    Command-line function to demo the argparse package.
    """
    parser = argparse.ArgumentParser()

    ### Positional arguments

    # String. Required as first argument.
    parser.add_argument('upper',
                        help="return text as uppercase.")
    # Integer. Required as second argument.
    parser.add_argument('square',
                        type=int,
                        help="return a square of a number. Set as `square N`.")

    ### Flags

    # For options with values (arguments), separate them with a space or
    # equals sign.

    parser.add_argument('--cube', '-C',
                        type=int,
                        default=0,
                        help="return a cube of a number.")

    parser.add_argument('--num',
                        type=int,
                        choices=[0, 1, 2],
                        help="optional integer value in a range.")

    parser.add_argument('-v', '--verbose',
                        action='store_true',
                        help="turn on verbose mode. Default False.")

    parser.add_argument('-c',
                        action='count',
                        help="increase level of count.")
    # Input:
    # missing => None
    # -c      => 1
    # -c -c   => 2
    # -cc     => 2
    # -ccc    => 3
    # ...
    # When dealing with values once set, remember that checking
    # (args.c >= 2) will raise an error if the value is None.


    ### Process

    args = parser.parse_args()

    print("Upper: `{0}` to `{1}`".format(args.upper, args.upper.upper()))
    print("Square input={0} and value={1}".format(args.square, args.square**2))
    print("Cube input={0} and value={1}".format(args.cube, args.cube**3))
    print("Choice number: {0}".format(args.num))
    print("Verbose: {0}".format(args.verbose))
    print("Count: {0}\n".format(args.c))

    # Show all values on object instance.
    print(args)


if __name__ == '__main__':
    run()
