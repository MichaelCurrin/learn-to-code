# Dart


## What is Dart?

> Dart is a client-optimized language for fast apps on any platform - [dart.dev](https://dart.dev)

Dart is a multi-paradigm programming language which was developed by Google started in 2011. It lets you use a single codebaes to build a web app, desktop application and Android/iOS app. Its syntax is similar or C or JavaScript.


## Resources

### Dart

- Dart [official site](https://dart.dev/)
- [Wikipedia](https://en.wikipedia.org/wiki/Dart_(programming_language))
    > Dart is a client-optimized[clarification needed] programming language for apps on multiple platforms. It is developed by Google and is used to build mobile, desktop, backend and web applications.
    > Dart is an object-oriented, class defined, garbage-collected language using a C-style syntax that transcompiles optionally into JavaScript. It supports interfaces, mixins, abstract classes, reified generics, static typing, and a sound type system.
- Tutorials
    - [Official Dart tutorials](https://dart.dev/tutorials)
    - [Top Tutorials To Learn Dart To Build Applications](https://medium.com/quick-code/top-tutorials-to-learn-dart-to-build-applications-262b946a3fc9)
- Dart [samples](https://dart.dev/samples) - these were copied to this project for the basics section.
- Dart packages on [pub.dev](https://pub.dev/). These are separated into flutter and web packages.
- VS Code
    - [Setup](https://dart.dev/tools/vs-code) for Dart.
    - [Dart](https://marketplace.visualstudio.com/items?itemName=Dart-Code.dart-code) plugin.
    - [Dart (Syntax Highlighting Only)](https://marketplace.visualstudio.com/items?itemName=oscarcs.dart-syntax-highlighting-only) plugin.

### Flutter

- Flutter [official site](https://flutter.dev)
    > Flutter is Google’s UI toolkit for building beautiful, natively compiled applications for mobile, web, and desktop from a single codebase.
- [Wikipedia](https://en.wikipedia.org/wiki/Flutter_(software)).
    > Flutter is an open-source UI software development kit created by Google. It is used to develop applications for Android, iOS, Windows, Mac, Linux, Google Fuchsia and the web.
    > Flutter apps are written in the Dart language and make use of many of the language's more advanced features.
- [Flutter](https://www.youtube.com/channel/UCwXdFgeE9KYzlDdR7TG9cMw) channel on Youtube


## Install

### Web

For Dart web, command-line, and server apps, go to [Get the Dart SDK](https://dart.dev/get-dart).

### Mobile

For developing only mobile apps, go to [Install Flutter](https://flutter.dev/docs/get-started/install).


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
