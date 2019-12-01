# Dart

## What is Dart?

> Dart is a client-optimized[clarification needed] programming language for apps on multiple platforms. It is developed by Google and is used to build mobile, desktop, backend and web applications.
> Dart is an object-oriented, class defined, garbage-collected language using a C-style syntax that transcompiles optionally into JavaScript. It supports interfaces, mixins, abstract classes, reified generics, static typing, and a sound type system.

From [Wikipedia](https://en.wikipedia.org/wiki/Dart_(programming_language)):


## What is Flutter?

> Flutter is an open-source UI software development kit created by Google. It is used to develop applications for Android, iOS, Windows, Mac, Linux, Google Fuchsia and the web.
> Flutter apps are written in the Dart language and make use of many of the language's more advanced features.

From Flutter [homepage](https://flutter.dev) and [Wikipedia](https://en.wikipedia.org/wiki/Flutter_(software)#Dart_platform).


## Resources

### Dart

- Dart [homepage](https://dart.dev/)
- Dart site's [tutorials](https://dart.dev/tutorials)
- [Top Tutorials To Learn Dart To Build Applications](https://medium.com/quick-code/top-tutorials-to-learn-dart-to-build-applications-262b946a3fc9)
- Dart [samples](https://dart.dev/samples) - these were used in this project for the basics section.
- VS Code
    - [Setup](https://dart.dev/tools/vs-code) for Dart.
    - [Dart](https://marketplace.visualstudio.com/items?itemName=Dart-Code.dart-code) plugin.
    - [Dart (Syntax Highlighting Only)](https://marketplace.visualstudio.com/items?itemName=oscarcs.dart-syntax-highlighting-only) plugin.


## Install

For Dart web, command-line, and server apps - [Get the Dart SDK](https://dart.dev/get-dart).

For developing only mobile apps - [Install Flutter](https://flutter.dev/docs/get-started/install).


## Run

There are scripts in the [Basics](Basics) directory copied from Dart's samples. They are mainly for demonstrative purposes of Dart features so some of them will give errors.

See the [Dark SDK Overview](https://dart.dev/tools/sdk) and subsections for details on the various ways to run Dart.

### Run script on command-line

```bash
$ dart --enable-asserts test.dart
```

### Start server

How to start a Dart application server. See the links for quickstarts and tutorials.

- [Command-line & server apps](https://dart.dev/server)
    ```bash
    $ dart bin/main.dart
    ```
- [Web apps](https://dart.dev/web)
    ```bash
    $ webserve dev
    ```
