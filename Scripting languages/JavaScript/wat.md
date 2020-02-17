# JavaScript Wat
> What? Quirks of JavaScript.

For more info, see this blog post [The WHY behind the WAT: An explanation of JavaScript’s type system](https://medium.com/dailyjs/the-why-behind-the-wat-an-explanation-of-javascripts-weird-type-system-83b92879a8db) or search "js wat" on Youtube.

## Types and objects

```javascript
> typeof {}
'object'

> typeof []
'object'
```

Surprising combinations when adding objects together.

```javascript
> [] + []
''

> [] + {}
'[object Object]'

> {} + []
0

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

Though is can only have strings as keys.
```javascript
> x[4] = 'fizz'

> x
{ foo: 100, bar: 200, 3: 'baz', '4': 'fizz' }
```

If you want a proper map which can handle other types, use a [Map](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Map#Examples).

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

```javascript
> typeof NaN
'number'

> number // This is not a thing.
Thrown:
ReferenceError: number is not defined

> Number // But this is a thing. But it is a function, not a class.
[Function: Number]
```

```javascript
> 1 + '10' // Implict conversion to string when adding numbers.
'110'

> [1, 2, 100].sort() // Alphanumeric sorting of numers
[ 1, 100, 2 ]
```

## Arrays

```javascript
> var x = [] // This is an array.

> x[1] = 'foo' // Yes, you can skip assigning item 0
'foo'
> x
[ <1 empty item>, 'foo' ]
> x[0] = 'bar'
'bar'
> x
[ 'bar', 'foo' ]

> x.y = 'baz' // Yes, you can add an attribute as a value or function an array.
'baz'
> x
[ 'bar', 'foo', y: 'baz' ]
> x.y
'baz'

> x.length = 10 // Yes you can assign a new length to array.
10
> x
[ 'bar', 'foo', <8 empty items>, y: 'baz' ]

> delete(x[0]) // You can delete an item in place without affecting the others.
true
> x
[ <1 empty item>, 'foo', <8 empty items>, y: 'baz' ]
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
