# TypeScript

TypeScript is an open-source language developed by Microsoft. It is a superset of JavaScript - it adds features to it and transpiles (outputs, compiles) to JavaScript code.

It is object-orientated with classes, objects and interfaces, like Java. Like Java, you need to be **explicit** with your types, when declaring variables, parameters and return types. This makes TypeScript slower for development, but safer, especially when maintaining a large codebase. As you will get errors at compile time if a type does not match - for example this can avoid performing a string method on number of null value, which would produce an error in standard JavaScript.


## Syntax

### Types

- `boolean`: Represents a boolean value - true or false.
- `number`: 64-bit double precision number - both integers and decimals.
- `string`: A sequence of characters or string type data.
- `null`: No value or null value.
- `void`: Return nothing in a function.

### Declaration

```ts
var variable_name : type;
```

e.g.

```ts
var foo : boolean;
foo = true;
```

```ts
var bar : string = 'buzz';

// This will give a compile-time error as the type changed.
// "Type '123' is not assignable to type 'string'."
// bar = 123;

// This is valid though.
bar = '123';
```

You can also use `const`. Here we omit the type.

```ts
const myVar = "Hello, world!"
console.log(myVar);
```


## Install

```sh
$ npm install -g typescript
```

## Run

Use the [hello.ts](hello.ts) script in this direcory as a Hello World demo.


### 1. Compile

Run TypeScript against a `.ts` file.

```sh
$ tsc hello.ts
```

### 2. Execute

Execute the generated `.js` file. Shown with output here.

```sh
$ hello.js
```
```
Hello, world!
```


## Resources

* Homepage [typescriptlang.org](https://www.typescriptlang.org/ "https://www.typescriptlang.org/")
    > JavaScript that scales.
    >
    > TypeScript is a typed superset of JavaScript that compiles to plain JavaScript.
    >
    > Any browser. Any host. Any OS. Open source.
* [Wikipedia](https://en.wikipedia.org/wiki/TypeScript) page
    > TypeScript is an open-source programming language developed and maintained by Microsoft. It is a strict syntactical superset of JavaScript and adds optional static typing to the language. TypeScript is designed for development of large applications and transcompiles to JavaScript.
* Online IDE
    - [TypeScript website's playground](https://www.typescriptlang.org/play)
* Tutorials
    - [Hello world in TypeScript Language](https://www.geeksforgeeks.org/hello-world-in-typescript-language/)
* Posts
    - [What are the major frameworks which uses typescript as a language?](https://www.quora.com/What-are-the-major-frameworks-which-uses-typescript-as-a-language) answer on Quora.
    - [When should I use TypeScript?](https://www.freecodecamp.org/news/when-should-i-use-typescript-311cb5fe801b/)
    - [Why TypeScript is the best way to write Front-end in 2019–2020+](https://medium.com/@jtomaszewski/why-typescript-is-the-best-way-to-write-front-end-in-2019-feb855f9b164)
    - [Why I no longer use TypeScript with React and why you shouldn’t either](https://hackernoon.com/why-i-no-longer-use-typescript-with-react-and-why-you-shouldnt-either-e744d27452b4)

See also this [Tasks](https://code.visualstudio.com/docs/editor/tasks) tutorial on VS Code codes for setting up TypeScript and other tasks.
