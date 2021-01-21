# JavaScript Wat
> What? Quirks of JavaScript.

For more info, see this blog post [The WHY behind the WAT: An explanation of JavaScript’s type system](https://medium.com/dailyjs/the-why-behind-the-wat-an-explanation-of-javascripts-weird-type-system-83b92879a8db), watch the second half the video [here](https://www.destroyallsoftware.com/talks/wat) or search "js wat" on Youtube.


## Types and objects

```javascript
> typeof {}
'object' // Why not hash or map?
```

```javascript
> typeof []
'object' // Why not array?
```

You can use the uncommon `Array` constructor, but you'll get an object, not an array.

```javascript
> var y = Array()
[]
> typeof y
'object' // Why not Array?
```

```javascript
> typeof null
'object' // Why not 'null'?
```

```javascript
> var z = Object()
[]
> typeof z
'object' // Why not 'Object'?
```

Surprising combinations when adding objects together.

```javascript
> [] + []
''

> [] + {}
'[object Object]' // Why not error? Why lowercase and uppercase mixed?

> {} + []
0 // Why not error? Why different to [] + {} result?

> {} + {}
NaN
```

```javascript
> Array(16).join('wat' - 1) + ' Batman'
'NaNNaNNaNNaNNaNNaNNaNNaNNaNNaNNaNNaNNaNNaNNaN Batman'
```

There is no `sum` function. You have to implement your own using `.reduce` method on an array.

If you try and add to arrays, you get a string.

```javascript
> [1, 2] + [3]
'1,23'
```

So you need to use `[].concat`.
 
```javascript
> [1, 2].concat([3])
[ 1, 2, 3 ]

> [].concat([1, 2], [3])
[ 1, 2, 3 ]
```

Methods on `Object` are not available to instances of it.

```javascript
> typeof {}
'object'

> Object.keys
[Function: keys]

> {a: 1}.keys
undefined // or an error if you try to use it

> // So you have to do this:
> Object.keys({a: 1})
[ 'a' ]
```


## Maps

JavaScript has `{}` which is an associative array i.e. key-value pairs.

```javascript
> var x = {
  foo: 100,
  bar: 200,
  3: 'baz'
}
> x.foo
100
> x.3 // error

> x[3]
'baz'
```

Though it can only have strings as keys.

```javascript
> x[4] = 'fizz'

> x
{ foo: 100, bar: 200, 3: 'baz', '4': 'fizz' }
```

Mostly that is what people use, but there is also a `Map` type. It can have other types as keys and is more specialized than `Object` type. See [Map](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Map#Examples) in Mozilla docs.

```javascript
> var x = new Map()
Map {}
> x.set('foo')
Map { 'foo' => undefined }
> x.set('foo', 1)
Map { 'foo' => 1 }
> x.set('bar', 2)
Map { 'foo' => 1, 'bar' => 2 }
> x.set(3, 'baz')
Map { 'foo' => 1, 'bar' => 2, 3 => 'baz' }
```


## Comparisons

```javascript
> NaN === NaN
false
```

You need a triple equality sign for strict comparison, otherwise you are just checking two values are both truthy or both falsy.

```javascript
> 1 == true
true
> 1 === true
false
>

> 0 == false
true
> 0 === false
false
```


## Numbers

The type of not-a-number is number.

```javascript
> typeof NaN
'number'
```

```javascript
> 1 + '10' // Implict conversion to string when adding numbers.
'110'

> [1, 2, 100].sort() // Alphanumeric sorting of numers
[ 1, 100, 2 ]
```


## Arrays

```javascript
> var x = [] // This is an array, well actually an `Object` because there is no array type.
```

```javascript
> x[1] = 'foo' // Yes, you can skip assigning item 0
'foo'
> x
[ <1 empty item>, 'foo' ]
> x[0] = 'bar'
'bar'
> x
[ 'bar', 'foo' ]
```

```javascript
> x.y = 'baz' // Yes, you can add an attribute as a value or function an array.
'baz'
> x
[ 'bar', 'foo', y: 'baz' ]
> x.y
'baz'
```

```javascript
> x.length = 10 // Yes you can assign a new length to array.
10
> x
[ 'bar', 'foo', <8 empty items>, y: 'baz' ]
```

```javascript
> delete(x[0]) // You can delete an item in place without affecting the others.
true
> x
[ <1 empty item>, 'foo', <8 empty items>, y: 'baz' ]
```

Initialize an array.

```javascript
> Array(10)
[<10 empty items>]
> Array(10, 13)
[10, 13]
```

Python:

```python
>>> [None]*10
[None, None, None, None, None, None, None, None, None, None]
>>> [10, 13]
[10, 13]
>>> list([10, 13])
[10, 13]
```



## Object work

To get an associativate array's keys, there is no method on the object. You need `Object`.

```javascript
> var x = {a: foo, b: buzz}

> > Object.keys(x)
[ 'a', 'b' ]

> Object.values(x)
[ 'foo', 'buzz' ]

> Object.entries(x)
[ [ 'a', 'foo' ], [ 'b', 'buzz' ] ]
```


## Checking types

The way to check null is using `===`.

```javascript
> var x = null
> x === null
true
> typeof x
'object'
```

But the way to check `undefined` is `typeof`.

```javascript
> var y
> typeof y
'undefined'
> typeof y === 'undefined'
true
```

It also works if a key or a variable does not exist.

```javascript
> typeof {}.foo
'undefined'

> typeof randomVar
'undefined'
```


## Instances

In JS, you use a function to create an instance of a builtin type. Because classes did not exist at that point (in fact, `class` is just a work around for making an `Object` with scoped functions that works like a class in other languages.

```javascript
> typeof Array
'function'

> Array
[Function: Array]

> Object
[Function: Object]
> Set
[Function: Set]
> Map
[Function: Map]
> Number
[Function: Number]
```

And sometimes you need the `new` keyword. At least for classes.
 
In Python, the builtins are classes.

```python
>>> x = dict() # or x = {}
>>> type(x)
<class 'dict'>

>>> y = set() # or y = {1, 2}
>>> type(y)
<class 'set'>
```

