# Is Python compiled or interpreted?


## Summary

Python is not compiled to machine code like C, C++, Java, Rust or Go.

In interactive mode, you can pass commands to the Python interpreter. This is not possible with languages that need a compile step (though Java has this ability now with Groovy).

Python is compiled to **byte code**. That is then executed by the Python **interpreter**. You can see the byte code in form of the `.pyc` files which are generated when importing modules but not when executing a script directly.


## Detailed

Based on this article, Python has both compiled and interpreted parts to it. But the compiled part is minor I think and its still useful to think of Python and interpreted

https://www.geeksforgeeks.org/python-compiled-or-interpreted/

Yes Python does compile to `.pyc` files. They are not used immediately - they are only used when running the application a second time and if the modified date of the .py and .pyc file is the same then it does not recompile the files. So performance is a bit faster on repeat runs. (If you view your `.pyc` file it will look garbled to you but docstrings actually get preserved as plain text, for interest)

These files are only created when doing module imports (`python - m foo` or imports within a script) and not when running a script directly (`python foo.py`). You can also give the `python` command a flag to disable creating `.pyc` files.

Yes those byte code `.pyc` files are compiled files but they still get sent to the Python interpreter which generates machine code. So `.pyc` files only get us part of the way there.

Using `.pyc` files improves performance a bit, as they can be reused on repeat runs. But those compiled files will not give you the performance of  machine code compiled languages like C.

### Info on Java

This is a complex topic. I thought Java must be compiled because it won't compile if you have bad types, you get compiled files out and you get performance close to C. But the thing is that Java creates byte code when is then interpreted by the JVM (Java Virtual Machine) to machine code and run.

This article covers Java Interpreter Compiler. Note the diagram from high level to byte code to machine code.

https://www.codespeedy.com/why-java-is-called-compiler-interpreter-language/

I don't know about Java anymore - is it both compiled and interpreted? Python compile step is optional and it doesnt have compile time checks so I'd say Python is interpreted. But I don't know how the actual interpreter works to discuss further
