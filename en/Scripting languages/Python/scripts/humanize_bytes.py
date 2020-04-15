"""
Convert a number in bytes to a human-readable value with an appropriate unit
of measurement.

The logic is to keep dividing by 1024, as long as we have a value in the
step which is at least 1024 and the iteration index is within the
available units list.

This script converts based on the Binary IECE standard.
See table below from https://en.wikipedia.org/wiki/Mebibyte

      Decimal                       Binary
Value       Metric       | Value        IEC              JEDEC
1000      kB  kilobyte   | 1024  1   KiB  kibibyte    KB  kilobyte
1000**2   MB  megabyte   | 1024**2   MiB  mebibyte    MB  megabyte
1000**3   GB  gigabyte   | 1024**3   GiB  gibibyte    GB  gigabyte
1000**4   TB  terabyte   | 1024**4   TiB  tebibyte    -
1000**5   PB  petabyte   | 1024**5   PiB  pebibyte    -
1000**6   EB  exabyte    | 1024**6   EiB  exbibyte    -
1000**7   ZB  zettabyte  | 1024**7   ZiB  zebibyte    -
1000**8   YB  yottabyte  | 1024**8   YiB  yobibyte    -

We check regularly if the current value is worth dividing by 1024 again.
This can be done with bool(v >= 1024) or with bool(v // 1024). While the
former might be more intuitive to read, it is 50% slower according to
my testing with %timeit in ipython.

For the functions as a whole, the `for` loop and `while` approaches have similar
performance using %timeit in ipython, though the recursive approach is slower.

The calculation for length of UNITS tuple could be moved to the global
level so it does not have to be repeated in a while loop or recursion loop.
However, we are only a few iterations, so the saving in processing time
would be negligible.

This script could be extended to process negative values by using abs(), however
I didn't feel that feature would be used enough to make it worth changing
the code now.

The inspiration for this script and some further reading:
 - I like the loop in Fred Cirera's answer and wrote my log logic
    based on in joctee's answer https://stackoverflow.com/questions/1094841/reusable-library-to-get-human-readable-version-of-file-size
 - converting from bytes to human-readable and back https://stackoverflow.com/questions/13343700/bytes-to-human-readable-and-back-without-data-loss
 - a few other approaches https://stackoverflow.com/questions/5194057/better-way-to-convert-file-sizes-in-python
"""
from __future__ import division, print_function

import argparse
import math


# Depending on your use-case, you could extend this to include EiB, ZiB and YiB.
UNITS = ('B', 'KiB', 'MiB', 'GiB', 'TiB', 'PiB')


def humanize_bytes_for(v):
    """
    Convert integer in bytes to human-readable value, using a for loop.

    The use of unitCount twice in here is not elegant but is necessary.
    When i is 4, then we divide by 1024 and go to start of loop with i = 5
    and then break. But we cannot reduce the range to end at 4 - it has
    to cover 0 to 5 (length 6) so we can have i = 5.
    """
    i = 0
    unitCount = len(UNITS)

    for i in range(unitCount):
        if v // 1024 and i < unitCount - 1:
            v /= 1024
        else:
            break

    return v, i


def humanize_bytes_while(v):
    """
    Convert integer in bytes to human-readable value using logic a while loop.

    The while loop breaks on one less than the length of the units list,
    because if it was equal we would get a key error.
    This is equivalent to adding a check at the end of while block
    to break on i >= len(UNITS).
    """
    i = 0

    while v // 1024 and i < len(UNITS) - 1:
        i += 1
        v /= 1024

    return v, i


def humanize_bytes_recursive(v, i=0):
    """
    Convert integer in bytes to human-readable value using recursion.
    """
    if v // 1024 and i < len(UNITS) - 1:
        return humanize_bytes_recursive(v / 1024, i + 1)
    else:
        return v, i


def humanize_bytes_recursive_alt(v, i=0):
    """
    Convert integer in bytes to human-readable value using recursion.

    This only has a single return statement, which is interesting but less
    readable than the other version of this function.
    """
    if v // 1024 and i < len(UNITS) - 1:
        v, i = humanize_bytes_recursive_alt(v / 1024, i + 1)

    return v, i


def humanize_bytes_log(v):
    """
    Convert integer in bytes to human-readable value, using a log approach.

    Use log to get the exponent in base 1024, instead of iterating.
    We avoid an error on log of zero, only accept exponents in the units range
    and use int() to round down the float to nearest int. Note that math.floor
    could be used, though it would keep as a float when rounding down.
    """
    exp = min(int(math.log(v, 1024)), len(UNITS) - 1) if v else 0
    v = v / 1024**exp

    return v, exp


def format_as_str(v):
    """
    Convert integer in bytes to a human-readable value in an appropriate unit
    and return a string.

    Use this function when calling this script externally, since this is
    the only function besides `test` which does string handling.

    This function uses the log approach as it has maximum complexity O(1),
    due to not iterating.

    @param v: number of bytes, as zero or a positive integer.

    @return: string containing the the input value converted to appropriate unit
        to two decimal places and shown with the symbol.
    """
    newValue, index = humanize_bytes_log(v)

    return "{0:,.2f} {1}".format(newValue, UNITS[index])


def test():
    """
    Check at that all functions give the same output value and unit for
    a given input value.
    """
    # The value mapping is done to cover 1 and then 32 of the current unit, then
    # to jump to the next order of magnitude (1024 of the current unit) to
    # jump to the next unit. The range is set to cover 1 billion PiB, to see
    # how the functions performs once the highest unit is reached.
    # This creates floats, which take up fewer bytes in memory than an int.
    magnitude_test = map(lambda x: 1024**(x / 2), range(0, 17))

    # Create some decimal values to test against, going up to the PiB output.
    decimal_test = map(lambda x: 2**(x + 0.12345), range(0, 60))

    for v in magnitude_test + decimal_test:
        # Add thousands separator and show in integer form rather than
        # scientific notation.
        print ("{0:,.2f} B (original)".format(v))

        for func in (humanize_bytes_for, humanize_bytes_while,
                     humanize_bytes_recursive, humanize_bytes_log):
            func(v)
            newValue, index = func(v)
            print("{0:,.2f} {1}".format(newValue, UNITS[index]))
        print()


def main():
    """
    Run script with command-line arguments.
    """
    parser = argparse.ArgumentParser()

    parser.add_argument('bytes',
                        type=int,
                        help="Positive integer value in bytes to convert to"
                             " human-readable value then print to stdout."
                             " Output is rounded two decimal places and shown"
                             " with the unit of measurement.")

    args = parser.parse_args()

    print(format_as_str(args.bytes))


if __name__ == '__main__':
    main()
