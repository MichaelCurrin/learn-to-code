#!/usr/bin/env python3
"""
Zipping.
"""
from pprint import pprint

column_names = ['a', 'b', 'c']
rows = [
    [1, 2, 3],
    [10, 7, 2],
    [6, 8, 1]
]

first_row = rows[0]

# Note that Python 3 uses a generator which requries list conversion
# while Python 2 allowed `print zip(keys, first_row)``

pprint(list(zip(column_names, first_row)), width=20)
print()

pprint(dict(zip(column_names, first_row)), width=20)
print()

data = [dict(zip(column_names, row)) for row in rows]
pprint(data, width=20)
