# JavaScript Wat
> What? Quirks of JavaScript.

For more info, see this blog post [The WHY behind the WAT: An explanation of JavaScript’s type system](https://medium.com/dailyjs/the-why-behind-the-wat-an-explanation-of-javascripts-weird-type-system-83b92879a8db) or search "js wat" on Youtube.

## Types and objects

```javascript
> [] + []
''

> [] + {}
'[object Object]'

> {} + []
0

> {} + {}
NaN
> Array(16).join('wat' - 1) + ' Batman'
'NaNNaNNaNNaNNaNNaNNaNNaNNaNNaNNaNNaNNaNNaNNaN Batman'
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
