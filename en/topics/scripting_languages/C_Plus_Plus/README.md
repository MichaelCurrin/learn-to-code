# C++

<img src="https://en.wikipedia.org/wiki/File:ISO_C%2B%2B_Logo.svg" width="50"/>


## Resources

- [C++](https://www.geeksforgeeks.org/c-plus-plus/) tutorial on Geeks for Geeks.


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
