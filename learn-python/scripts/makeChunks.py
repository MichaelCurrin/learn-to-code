#!/usr/bin/env python
# -*- coding: utf-8 -*-
"""
Created on Fri Oct 20 19:28:11 2017
@author: Michael Currin

Split a long list of items into a list of smaller chunks, where each chunk
is a list up to a maximum count of items.

Example:
    >>> data = [1, 2, 3, 4, 5]
    >>> print(makeChunks(data, limit=2)
    # => [[1, 2], [3, 4], [5]] 
"""
from __future__ import print_function, unicode_literals



def makeChunks(data, limit):
    groupings = range(0, len(data), limit)

    return [data[x:(x + limit)] for x in groupings]


limit = 10

# Numbers from 101 to 195.
nums = range(101, 196)

chunks = makeChunks(nums, limit)
for c in chunks:
    print(c)

print()

# Unicode characters created from integer range of 0 to 127.
characters = [chr(n) for n in range(0, 128)]
chunks = makeChunks(characters, limit)
for c in chunks:
    print(' '.join(c))
