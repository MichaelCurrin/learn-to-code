# Rounding
> A guide to rounding in Python.

## Represent floats

Using the builtin `format` function or `str.format` method.
```python
>>> format(66.66666666666, '.4f')
'66.6667'
>>> '{:.4f}'.format(66.6666666)
'66.6667'

>>> # Add comma separator for easy reading.
>>> '{:,.1f}'.format(10000.45)
'10,000.5'

>>> # Add padding. Useful for a column of numbers or a table.
>>> '{:>20,.1f}'.format(10000.45)
'            10,000.5'
```

### Resources

Python string formatting guides. 

- [Using % and .format() for great good!](https://pyformat.info/)
- [Python String Formatting Best Practices](https://realpython.com/python-string-formatting/)

## Dangers when rounding

Certain decimal fractions cannot be stored accurately in binary so approximations are used. These usually don't matter, but can lead to unexpected results when doing arithmetic or rounding. This can make a difference when doing a report (e.g. what was the conversation rate?) or when you set an exact condition in your control flow that will never be met.

Addition:

```python
>>> (0.3 + 0.3) == 0.6
True

>>> # This does not work as expected.
>>> (0.3 + 0.6) == 0.9
False
>>> 0.3 + 0.6
0.8999999999999999
```

```python
>>> 0.1 + 0.1
0.2
>>> 0.1 + 0.1 + 0.1
0.30000000000000004
```

Rounding:

```python
>>> # Use a builtin to round to one decimal place.
>>> round(1.46, 1) == 1.5
True

>>> # This does not work as expected.
>>> round(1.45, 1) == 1.5
False
>>> round(1.45, 1)
1.4
```

One solution it to use a decimal type in place of the float type.

```python
>>> from decimal import Decimal as D
>>> D(3) / D(10)
D('0.3')
>>> str(D(3) / D(10))
'0.3'
>>> (D(3) / D(10)).as_integer_ratio()
(3, 10)

>>> # Now we are able to get the expected result.
>>> ( D(3) / D(10) + D(6) / D(10) ) == D(0.9)
>>> D(3) / D(10) + D(6) / D(10)
Decimal('0.9')

>>> # Shift point to places to the right.
>>> (D(3) / D(10)).shift(2)
Decimal('30.0')
```

Note also that the value stored in a variable can be different to the formatted version shown in the terminal with some rounding.

### Resources

If you want to understand this storage issue more, I suggest reading about the "floating mantissa" or significand".

- [Significand](https://en.wikipedia.org/wiki/Significand) on Wikipedia.
- [Fundamentals of Data Representation: Floating point numbers](https://en.wikibooks.org/wiki/A-level_Computing/AQA/Paper_2/Fundamentals_of_data_representation/Floating_point_numbers).
- [Floating-Point Binary](http://cstl-csm.semo.edu/xzhang/Class%20Folder/CS280/Workbook_HTML/FLOATING_tut.htm)

See also the Python 3 [decimal](https://docs.python.org/3/library/decimal.html) module's documentation.
