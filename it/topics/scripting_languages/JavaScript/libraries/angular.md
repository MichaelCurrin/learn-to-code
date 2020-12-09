# Angular

Consente l'uso di una sintassi simile all'HTML nell'applicazione e consente l'interpretazione degli attributi per l'associazione dei dati. Viene utilizzato per lo sviluppo di applicazioni a pagina singola (SPA).

È un progetto open source utilizzato da Google.


## Links

- [Sito Ufficiale](https://angular.io/).
    > Un framework. Mobile & desktop.
- [Quickstart](https://angular.io/start) per iniziare in 5 minuti.
- [GitHub repo](https://github.com/angular/angular).
    > Angular è una piattaforma di sviluppo per la creazione di applicazioni Web mobili e desktop utilizzando TypeScript/JavaScript e altre linguaggi.
- Corsi
    - [Egghead](https://egghead.io/)
        - Corsi [Angular](https://egghead.io/browse/frameworks/angular).
    - [Frontend Masters](https://frontendmasters.com)
        - [Angular path](https://frontendmasters.com/learn/angular/).
- [Cheatsheet](https://angular.io/guide/cheatsheet)


## Hello world

da [AngularJS Hello World Application: Il tuo primo programma di esempio ](https://www.guru99.com/angularjs-first-program.html).

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
