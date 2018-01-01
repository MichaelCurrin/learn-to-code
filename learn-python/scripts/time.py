# -*- coding: utf-8 -*-
"""
Demonstrate use of datetime and time modules.

Requires installation of pytz for working with timezones.
"""
import datetime
import time

import pytz


print 'Today (date)'
print datetime.date.today()
print

print 'Today (datetime)'
# Curren time as a datetime object.
# According to help it takes no arguments and says this:
#   Current date or datetime:  same as
#       self.__class__.fromtimestamp(time.time()).
# Meaning that the time module is used to generate a float and this is used
# to create a datetime object.
todayDT = datetime.datetime.today()
print todayDT
print

print 'Now (datetime) without tz set'
# Current time as datetime object.
# According to help, it takes optional argument.
#   [tz] -> new datetime with tz's local day and time.
nowDT = datetime.datetime.now()
print nowDT
# Expect these two to be equal, both using system's timezone by default.
print (nowDT - todayDT)
print

print 'Now with tz set'
# Get timezone object.
# Or simply, `pytz.UTC`.
tzObj = pytz.timezone('utc')

# According to help, it takes optional argument.
#   [tz] -> new datetime with tz's local day and time.
nowDTtimezone = datetime.datetime.now(tzObj)
print nowDTtimezone
# Expect these two hour values to differ, unless your system's timezone
# is actually utc.
print '{0} hrs difference'.format(nowDT.hour - nowDTtimezone.hour)
# This would raise an error.
# >>> print nowDT - nowDTtimezone
# => TypeError: can't subtract offset-naive and offset-aware datetimes
print

print 'Time'
# Current time as a float.
now = time.time()
print '{0} seconds'.format(now)
print

print 'Unixtimestamp'
unixInt = 1234567890
unixDT = datetime.datetime.fromtimestamp(unixInt)
print str(unixDT)
print

print 'Duration by substraction'
# Create timedelta object by substracting two datetime objects.
duration = (datetime.datetime.now() - unixDT)
print str(duration)
print '{0} seconds'.format(duration.total_seconds())
print

print 'Duration by creation'
# Set duration as 1 day and 12 hrs
duration = datetime.timedelta(1.5)
print str(duration)
print '{0} seconds'.format(duration.total_seconds())
print

print 'ctime'
print datetime.datetime(1970, 1, 1).ctime()
# => Fri Jan  1 00:00:00 2010'
print datetime.datetime.now().ctime()

print 'more on timezone'
# Create a timezone aware datetime object.
d = datetime.datetime(2017, 1, 2, 12, 3, 40, tzinfo=pytz.UTC)
