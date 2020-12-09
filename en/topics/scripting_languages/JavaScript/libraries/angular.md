# Angular

This allows use of HTML-like syntax in the application and allows interpreting of attributes for data binding. It is used for developing Single Page Applications (SPA).

It is an open source project used by Google.


## Links

- [Official site](https://angular.io/).
    > One framework. Mobile & desktop.
- [Quickstart](https://angular.io/start) to get started in 5 minutes.
- [GitHub repo](https://github.com/angular/angular).
    > Angular is a development platform for building mobile and desktop web applications using TypeScript/JavaScript and other languages.
- Courses
    - [Egghead](https://egghead.io/)
        - [Angular](https://egghead.io/browse/frameworks/angular) courses.
    - [Frontend Masters](https://frontendmasters.com)
        - [Angular path](https://frontendmasters.com/learn/angular/).
- [Cheatsheet](https://angular.io/guide/cheatsheet)


## Hello world

From [AngularJS Hello World Application: Your First Example Program ](https://www.guru99.com/angularjs-first-program.html).

```html
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf 8">
    <title>Hello World</title>
</head>

<body ng-app="app">
    <h1 ng-controller="HelloWorldCtrl">{{ message }}</h1>

    <script src="https://code.angularjs.org/1.6.9/angular.js"></script>
    <script>
        angular.module("app", []).controller("HelloWorldCtrl", function($scope) {
            $scope.message="Hello, world!"
        });
    </script>

</body>

</html>
```
