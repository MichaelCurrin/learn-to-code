# Structures

A structure in C holds key-value pairs.

See [C Structures](https://www.tutorialspoint.com/cprogramming/c_structures.htm) tutorial.


## Syntax

```c
struct [structure tag] {

   member definition;
   member definition;
   ...
   member definition;
} [one or more structure variables];  
```


## Examples

Here we declare a null structure variable `book` with type `Book`.

```c
struct Books {
   char  title[50];
   char  author[50];
   char  subject[100];
   int   book_id;
} book;
```

Here we declare a type globally, then declare an instance and update and print it.

```c
#include <stdio.h>
#include <string.h>
 
struct Book {
   char  title[50];
   char  author[50];
   char  subject[100];
   int   book_id;
};
 
void main( ) {
   struct Book Book1;        /* Declare book1 of type Book */
   
   strcpy( Book1.title, "C Programming");
   strcpy( Book1.author, "Nuha Ali"); 
   strcpy( Book1.subject, "C Programming Tutorial");
   Book1.book_id = 6495407;

   printf( "Book 1 title : %s\n", Book1.title);
   printf( "Book 1 author : %s\n", Book1.author);
   printf( "Book 1 subject : %s\n", Book1.subject);
   printf( "Book 1 book_id : %d\n", Book1.book_id);
}
```
