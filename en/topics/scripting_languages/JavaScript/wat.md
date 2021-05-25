# JavaScript Wat?!
> A look at the confusing and surprising quirks of JavaScript

The "JS Wat" idea is a comical look at the annoyances and design flaws around JavaScript and also serves a reminder of pitfalls to avoid.

For more info on JS wat, see these resources:

- Blog post [The WHY behind the WAT: An explanation of JavaScript’s type system](https://medium.com/dailyjs/the-why-behind-the-wat-an-explanation-of-javascripts-weird-type-system-83b92879a8db)
- Watch the second half the video [here](https://www.destroyallsoftware.com/talks/wat) or 
- Search "js wat" on Youtube.

Some of these quirks I cover below where probably due to the fact that JavaScript was famously written in 10 days and these are areas never got corrected because it would break code that relies on the quirks to continue to exist.


## Types and objects

```javascript
> typeof {}
'object' // Why not hash or map?
```

```javascript
> typeof []
'object' // Why not array?
```

You can use the uncommon `Array` constructor, but you'll get an object type, not an array.

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

### Adding

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

If you try to add two arrays, you will a string, which is unexpected.

```javascript
> [1, 2] + [3]
'1,23'
```

So you need to use `[].concat` to join them.
 
```javascript
> [1, 2].concat([3])
[ 1, 2, 3 ]

> [].concat([1, 2], [3])
[ 1, 2, 3 ]
```

This syntax is verbose.

In Python you would do this, on a list or tuple.

```python
>>> [1, 2] + [3]
[1, 2, 3]
```

### Methods

Methods on `Object` are not available to instances of it.

```javascript
> typeof {}
'object'

> Object.keys
[Function: keys]
```

You'd expect this would work, but you get an `undefined` value.

```javascript
> const myObject = {a: 1}
> myObject.keys
undefined 
```

So you have to do be verbose and use `Object`.

```javascript
> const myObject = {a: 1}
> Object.keys(myObject)
[ 'a' ]
```


## Missing behavior

### Adding

There is no `sum` function, like in other languages. 

You have to implement your own in a function of a few liens, such as using `.reduce` method on an array. There are plenty of approaches on StackOverflow. 

Or you find a library which supports it.

Fortunately, there is still `Math.min` and `Math.max`.

### Rounding

There is a `Math.round` function, but it doesn't let you round to a level of precision. A second param just gets ignored.

So you have to multiply by something then divide by it.

```javascript
> Math.round(1234.123 * 100) / 100
1234.12
```

Python is easy:

```python
>>> round(1234.123, 2)
1234.12
```


## Weird string and number operations

JavaScript is **loosely-typed**. Loosely typed means that JavaScript will sometimes cast values for you.

Adding two numbers or concatenating two strings is straightforward.

```javascript
> 1 + 1
2
> "1" + "1"
'11'
```

But here you get casting so the number becomes a string.

```javascript
> "11" + 1
'111'
```

Use a minus sign and now the string becomes a number.

```javascript
> "11" - 1
10
```

Python on the other hand is **strongly-typed**. If you try and mix add a string and number or do a maths operation on a string, you'll get a type error. 

```python
>>> "1" + 1
Traceback (most recent call last):
  File "<stdin>", line 1, in <module>
TypeError: cannot concatenate 'str' and 'int' objects
```

There is different to **statically typed** and **dynamically typed**. That distinction is about whether the type is fixed (like in C or Go) or can change (like in JS or Python) during execution. Static typing is also enforced at compile time.


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


## Exports

In Python, everything is exported by default. And you use a leading underscore to indicate and object shouldn't be imported unless you really need it.

In JS you have to do this. Sometimes missing named and default imports.

```javascript
export default function foo () {
}

export bar () {
}
```

Or after creating without exporting.

```javascript
function foo () {
}

bar () {
}

export default foo
export bar
```

This approach in JS is to export every function and every variable under its own name and then import as that. Which can get to unwieldly export and import statements which are hard to read and change. I regularly work with multi-line imports from a signle modle. And you have the risk of colliding as different modules might export the same variable name. And if all the imports are in the same global scope, it's hard to see which module someting comes from.

JavaScript:

```javascript
import { myFunc, myOtherFunc } from "./bar/foo"
import { MY_CONFIG_VALUE, MY_OTHER_CONFIG_VALUE } from "./constants"

myFunct(MY_CONFIG_VALUE)
myOtherFunc(MY_OTHER_CONFIG_VALUE)
```

While in Python, the norm is to import a module and use its elements, to show the context. And you are encourage to put variables on a variable to keep things light. This is a better programming style I think, but I can't apply it so easily to JavaScript as it breaks the pattern of what other JS developers would expect my code to do. Similarly, I prefer snakecase names to camelcase, but the JS community uses camelCase so I must use that.

Python:

```python
import bar
from constants import config


bar.foo.my_func(config.MY_CONFIG_VALUE)
bar.foo.my_other_func(config.MY_OTHER_CONFIG_VALUE)
```

Then if add another variable to `config` object, you don't have to add to exports in `constants` and to imports in the other script. You just starting using it.

Or you could do:

```python
from bar import foo
```


## Is JavaScript beginner-friendly?

Although many beginners start with JavaScript, I would not say it is beginner-friendly. Yes, it is less verbose than C or Java because you don't have to be explicit with types or choosing choosing data types (do I want a signed 32-bit integer or an unsigned 8-bit integer?). And you don't have to worry about memory management like in C++.

But JavaScript is less friendly than Python.

This page covers surprises which beginners and experienced programmers will be surprised by and will have to cope with.

JavaScript has overhead of things to learn and you can't forget or skip learning the old styles, because you'll work across projects that use old or new styles or mix them together. I've covered some of these in the rest of this page.

You have to know how to use `require` and `import` styles of imports.

You have to know callbacks, promises and async syntax.

You have to know `function` and arrow-function syntax. You have to know how to use these alone and on a class.

You have to know how to work with items load CSVs and databases and also how to interact with the DOM.

You have to know how to use `this`, which works differently in other languages.

You have to know how to use `const`, `let` and `var` (also you don't need `var` anymore) and understand block scope. Ruby and Python don't use these keywords. Plus `const` doesn't actually freeze a variable, it only prevents reassignment, so you can still make updates to an array for example that is a `const` value.

The lack of classes historically in JS means that functions in functions were the norm. This was done not just to namespace functions (which can be solved by other methods like IFFE or using a hash to store functions). But it was done to implicitly use variables from the other function in the inner function. Which makes state hard to reason about. And its harder to write unit tests agains the inner function.

```javascript
function foo() {
  let x = 123
  
  function increment() {
    x++
  }
  
  increment()
  console.log(x)
}

foo()
// 124
```


## Naming

Other languages are consistent.

In Python, you use lowercase names for your scripts. 

Names are underscores and never dots or hyphens. This is enforced at a language level not just convention. Since a dot is meaningful in module structure and hyphens are not allowed outside of quotes.

But JavaScript switches between these:

- `myModule.js`
- `MyModule.js` - in the case of components like in Rect.
- `my-module.js` - e.g. the most common you'll see is `package-lock.json`.
- `my.module.js` - In particular for tests, like `myModule.spec.js`. But also sometimes in other places.

Similarly, imports must be done from those names, in a string like:

```
import { foo } from './my-module.js';
```

Also, you have to use dot forward slash for a local module or it will break.

In Python, you don't have to use the dot forward slash. The convention is your external imports go at the top and the local imports at the bottom of the imports. Tools can even apply this ordering for you.
