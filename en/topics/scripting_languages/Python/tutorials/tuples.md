# Python tuples

A tuple is list of zero or more elements, except it is _frozen_ i.e. immutable. 


## Basics

Both of these are equivalents of `tuple` containing two `int` values.

```python
>>> (1, 2)
(1, 2)
>>> 1, 2
(1, 2)
```

Or just one value:

```python
>>> 1, 
(1,)
```

Brackets are usually best to keep in, for readability. You can omit the brackets, but be sure to keep the comma - this is important for a `tuple` of one element.

```python
# A tuple containing an int
>>> 1, 
(1,)

>>> # Just an int
>>> 1
1
```

## Empty tuple

Use the `tuple` keyword to make an empty one.

```python
>>> tuple([])
()
```

This will not work though - `(,)`.

```python
>>> (,)
  File "<stdin>", line 1
    (,)
     ^
SyntaxError: invalid syntax
```

## Types

These can be of the same or different types.

```python
>>> x = (True, 1, 'yes')
>>> x
(True, 1, 'yes')
```

Elements can be repeated.

```python
>>> (1, 2, 3, 1)
(1, 2, 3, 1)
```


## Updating

You **cannot** update a `tuple` such as append to, delete or modify elements. If you want to edit a tuple, must create a new tuple.

```pyton
>>> x = (1, 2)

>>> # Update
>>> x = (1, 3)

>>> # Insert
>>> x = (1, 0, 3)

>>> # Remove
>>> x = (1, 0)
```

## Cast

You can cast another type to `tuple`. Give an iterable to `tuple`.

For a `list`:

```python
>>> tuple([1, 2, 3])
(1, 2, 3)

>>> my_list = [1, 2, 3]
>>> tuple(my_list)
(1, 2, 3)
```

For a `dict`, just keys are used.

```python
>>> x = {'a': 1, 'b': 2}
>>> tuple(x)
('a', 'b')
```


## Hashing

A tuple is hashable. So if you want a pair co-ordinates as a key in a `dict`, use a `tuple` not a `list` type.

```python
>>> coords = {(100, 200): 'home', (300, 900): 'work'}
>>> coords
{(100, 200): 'home', (300, 900): 'work'}
```


## Functions

When a function returns a multiple values, it actually returns a `tuple`.

```python
def foo():
    a = 1
    b = 2
    
    return a, b
    
result = foo()
result
# =>
(1, 2)

# Or skip the intermediate `result` variale.
x, y = foo()
x
# => 1
```


## Unpacking

```python
>>> x = [1, 2, 3]

>>> a, b, c = x
>>> a
1
```

If you don't want to use `b`, you could do this:

```python
>>> a, _, c = x
```

If you have more elements, you can put them together.

```python
>>> x = [1, 2, 3, 4, 5]

>>> a, *b, c = x
>>> a
1
>>> b
[2, 3, 4]
>>> c
5
```
