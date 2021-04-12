# C++

<img src="https://upload.wikimedia.org/wikipedia/commons/1/18/ISO_C%2B%2B_Logo.svg" width="100"/>


## Resources

- [C++](https://www.geeksforgeeks.org/c-plus-plus/) tutorial on Geeks for Geeks.
- [C++](https://en.wikipedia.org/wiki/C%2B%2B) on Wikipedia.
    > C++ is a general-purpose programming language created by Bjarne Stroustrup as an extension of the C programming language, or "C with Classes".


## Hello world example

Note the function is named `main` and so will be called.

The ISO standards for C and C++ use return type `int` and not `void`, so follow that. Some systems expect this to be an `int` Note that you don't have to do `return 0;` as that is implied.

- `main.cpp`
    ```cpp
    #include<iostream> 

    using namespace std;

    int main() {
        cout << "Hello, World!";
    }
    ```
  
If you need to process CLI arguments., use this:

- `main.cpp`
    ```cpp
    int main(int argc, char* argv[]) {
    }
    ```


## Data types

Data types in C++ is mainly divided into three types: 
 
### Primitive

- Boolean.
- Integer - available as long and short, signed and unsigned. e.g. `signed long int`
- Floating point - `float`, 4 bytes.
- Double floating point - `double`, 8 bytes.
- Character - `char`, 8 bits.
- Wide Character - `wchar_t`, 2 or 4 bytes.
- Void
 
### Derived
 
- Function
- Array
- Pointer
- Reference

### Abstract or user-defined data types

- Class
- Structure
- Union
- Enumeration
- Typedef defined DataType


## Looping

You can use `for` and `while` loops as in C.


## Conditionals

You can use `if`, `else` and `else if` as in C.


## Printing

You can use `printf` from C and now `cout`.

```cpp
#include <iostream>
    
using namespace std;

int main() {
   int a = 123;

   cout<< "The value of a : " << a;
   printf("\nThe value of a : %d", a);
   
   return 0;
}
```
