# If And Or

Guide to using `and` and `or` together in `if` statements.

You may find that reading a series of `and` and `or` conditions are not giving you what you expect and are hard to read. Adding brackets is a good way to solve this.

## And

Start off with `and` and no `or`.
```python
>>> False and False
False
```

Now this passes because what is on the right side of the `or` is checked, though the first value has no impact in this situation.
```python
>>> False and False or True
True
```

Force the first value to be checked on the left of the `and` by adding brackets.

```python
>>> False and (False or True)
False
```

## Or

If the first part to the left of the `or` passes, then the rest is not evaluated.

```python
>>> True or False and True
True
>>> True or False and False
True
```

Add brackets to make sure the part on the right of the `and` is checked.

```python
>>> (True or False) and False
False
```
