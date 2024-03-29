# Java


## About Java

### What is Java?

> Java is a high-level programming language originally developed by Sun Microsystems and released in 1995. Java runs on a variety of platforms, such as Windows, Mac OS, and the various versions of UNIX. [source](https://www.tutorialspoint.com/java/index.htm)


### Why learn Java?

> Java is among the most popular programming languages out there, mainly because of how versatile and compatible it is. Java can be used for a large number of things, including software development, mobile applications, and large systems development.
>
> As of 2019, 88% market share of all smartphones run on Android, the mobile operating system written in Java. Knowing Java opens a great deal of doors for you as a developer. [source](https://www.codecademy.com/learn/learn-java)


### Features

Language features

- Object Oriented
- Platform Independent
- Secure
- Architecture-neutral
- Portable
- Robust

Java follows the approach of "Write Once, Run Anywhere". Research about the Just In Time compiler and the Java Virtual Machine.

Technical features

- Multithreaded
- Interpreted
- High Performance
- Distributed
- Dynamic

[source](https://www.tutorialspoint.com/java/index.htm)


## Hello world app

1. Start with a `hello.java` script. 
    - You can run the [hello.java](hello.java) script in this repo directly.
    - Or copy the contents of it to a new file.
2. Compile it.
    ```sh
    $ javac hello.java
    ```
3. Execute the created binary file. In macOS/Linux, it will have no extension.
    ```console
    $ ./hello
    Hello, world!
    ```


## Resources

- [java.com](https://www.java.com/) homepage
- Tutorials
    - [Learn Java in Y minutes](https://learnxinyminutes.com/docs/java/) - also tutorials listed at the bottom.
    - [Java](https://www.geeksforgeeks.org/setting-environment-java/) tutorial on Geeks for Geeks website.
    - [Java Tutorial for Beginners with Examples](https://beginnersbook.com/java-tutorial-for-beginners-with-examples/)
    - [Java on TutoralsPoint](https://www.tutorialspoint.com/java/index.htm)
    - [Best way to learn Java programming](https://howtodoinjava.com/resources/best-way-to-learn-java/)
- Courses
    - [Learn Java](https://www.codecademy.com/learn/learn-java) on Codecademy.


## Install

[Download](https://www.java.com/en/download/) from Java homepage.


## Looping

The `while` loop.

```java
int i = 0;

while (i < 3){
    System.out.println("Index: ", i);
    i++; 
}
```

The `for` loop.

```java
for (int i = 0; i < 3; i++) {
    System.out.println("Index: ", i);
}
```


Using `.forEach`.

```java
myArray.forEach(element -> {
  // Multiple statements
});

myArray.forEach(element -> statement);
```

e.g.

```java
List<String> nameList = new ArrayList<String>();

nameList.add("Java");
nameList.add("Kotlin");
nameList.add("Android");

nameList.forEach(name -> System.out.println(name) );

nameList.forEach(name -> {
    if (name.equals("Android")) {
        System.out.println(name + " is a framework.");  
    } else {
        System.out.println(name + " is a programming language.");
    }
});
```
 
