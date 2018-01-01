#!/usr/bin/env python2
# -*- coding: utf-8 -*-
"""
Lists
"""

myList = ['a', 'b', 'c', 'd', 'e']

print 'Original'
print '========'
print
print 'myList'
print myList
print

print 'Full'
print '========'
print
print 'myList[:]'
print myList[:]
print
print 'myList[0:len(myList)]'
print myList[0:len(myList)]
print
print 'myList[-len(myList):len(myList)]'
print myList[-len(myList):len(myList)]
print

print 'Slice'
print '========'
print
print myList[1:2]
print
print myList[1]
print

print 'Inserting'
print '========'
print
# Empty.
print 'myList[1:1]'
print myList[1:1]
# Insert between reference 1 at end of 1st item and before 1 for start of
# 2nd item.
myList[1:1] = 'xyz'
print 'after inserting string of characters at [1:1]'
print myList
myList[1:1] = ['word']
print 'after inserting list of strings at [1:1]'
print myList

