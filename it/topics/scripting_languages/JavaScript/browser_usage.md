# Eseguire JS nel browser

## Risorse

- [Documentazione JavaScript e HTML DOM](https://www.w3schools.com/jsref/default.asp) su W3 Schools.
- Documentazione sulla funzione [JS global](https://www.w3schools.com/jsref/jsref_obj_global.asp) su W3 Schools.
- JS [Web APIs](https://developer.mozilla.org/it/docs/Web/API) documentazione di Mozilla. Copre argomenti per lavorare con aree come DOM, API di geolocalizzazione, API Push e API Fetch.

## Esegui

1. Apri un browser.
2. Fare clic con il pulsante destro del mouse e scegliere _Ispeziona_.
3. Aprire la scheda _Console_.
4. Immettere il comando e premere INVIO.


## Esecuzione on body loaded

Vari modi per eseguire JS solo dopo il caricamento del corpo.

Se si esegue JS a breve, è possibile ottenere un errore che un elemento con un determinato ID non esiste ancora.

Eseguire la funzione anonima utilizzando `window.onload`.

```html
<head>
    <script>
        window.onload = function () {
            var el = document.getElementById('foo');
            console.log(el.innerHTML)
        }
    </script>
</head>

<body>
    <p id="foo">Hello, world!</p>
</body>
```

Variazione, utilizzando `addEventListener`.

```html
<head>
    <script>
        window.addEventListener('load', function () {
            var el = document.getElementById('foo');
            console.log(el.innerHTML);
        });
    </script>
</head>

<body>
    <p id="foo">Hello, world!</p>
</body>
```

Associare la funzione denominata direttamente all'evento dell'elemento body.

```html
<head>
    <script>
        function run() {
            var el = document.getElementById('foo');
            console.log(el.innerHTML);
        }
    </script>
</head>

<body onload="run()">
    <p id="foo">Hello, world!</p>
</body>
```

Inserire lo script dopo il contenuto nel corpo.

```html
<head>
</head>

<body onload="run()">
    <p id="foo">Hello, world!</p>

    <script>
        var el = document.getElementById('foo');
        console.log(el.innerHTML)
    </script>
</body>
```

Se si desidera mantenere lo script nell'ambito, utilizzare un [IIFE](#immediately-invoked-function-expression).

## Immediately Invoked Function Expression

Noto anche come _IIFE_. Si tratta di una funzione che viene eseguita immediatamente e mantiene tutti i relativi oggetti limitati al relativo ambito, che evita di inquinare o sovrascrivere nello spazio dei nomi globale. Queste funzioni, di solito, non sono denominate.

- Funzione semplice
    ```js
    function () {}
    ```
- L'aggiunta di una chiamata alla fine restituirà un errore di sintassi.
    ```js
    function () {}()
    ```
- Racchiudere la funzione tra parentesi prima di chiamarla funzionerà.
    ```js
    (function () {})()
    ```
- O al posto delle parentesi, utilizzare l'operatore non `!` all'inizio. Questa operazione considererà la funzione come un'espressione e restituirà `true` (poiché l'opposto di `!undefined` è `true`).
    ```js
    !function () {}()
    ```

Negli esempi riportati di seguito viene utilizzato lo stile della parentesi.

[IIFE](https://developer.mozilla.org/en-US/docs/Glossary/IIFE) dalla documentazione sul sito Mozilla. Vedi anche [IIFE on Wikipedia](https://en.wikipedia.org/wiki/Immediately-invoked_function_expression).

## Sintassi

```js
(function () {
    statements
})();
```

### Esempi

> La funzione diventa un'espressione di funzione che viene eseguita immediatamente. Non è possibile accedere alla variabile all'interno dell'espressione dall'esterno.

```js
(function () {
    var aName = "Barry";
})();

//  Variabile aName non accessibile dall'ambito esterno
aName // genera l'errore "Uncaught ReferenceError: aName is not defined"
```

>  L'assegnazione di IIFE a una variabile archivia il valore restituito della funzione, non la definizione stessa della funzione.

```js
var result = (function () {
    var name = "Barry";
    return name;
})();

// Crea immediatamente l'output:
result; // "Barry">
```

## Stringhe di query URL

### Leggi URL

guarda la documentazione window [location](https://developer.mozilla.org/en-US/docs/Web/API/Window/location) per maggiori dettagli.

```js
> window.location
// Posizione "https://example.com/fizz?foo=bar"

> window.location.host
"example.com"

> window.location.hostname
"example.com"

> window.location.pathname
"/fizz"

> window.location.port
""
```

### Leggere i parametri di query

Questa proprietà fornirà la stringa del parametro di query.

```js
> window.location.search
// "?foo=bar&fizz=123"
```

### Analizzare i parametri di query

Come cercare un valore in base alla chiave dalla stringa dei parametri di ricerca.

È presente una classe incorporata `URLSearchParams`. Nota: è necessario utilizzare la parola chiave `new`.

- Documentazione [URLSearchParams](https://developer.mozilla.org/en-US/docs/Web/API/URLSearchParams).
- tutorial [Get URL parameters with JavaScript](https://www.sitepoint.com/get-url-parameters-with-javascript/).


Esempio:

```js
> var paramsString = "?foo=bar&fizz=123";
> var searchParams = new URLSearchParams(paramsString);
>
> searchParams.get("foo");
// "bar"
```


### Codifica e decodifica

Il percorso URL e i parametri di query devono essere con codifica percentuale per essere validi nell'URL. Ad esempio, uno spazio è `'%20'`.

#### Codifica

Codifica in una stringa con codifica percentuale.

- Documentazione [encodeURIComponent](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/encodeURIComponent) 

```js
> encodeURIComponent('Foo Bar');
// "Foo%20Bar"
```


C'è anche `encodeURI` che è per l'uso su un intero URL, non solo un componente. Ciò è utile in quanto manterrà alcuni caratteri come `?` e `=` come testo normale.


```js
> encodeURI('https://example.com/fizz?foo=Foo Bar');
"https://example.com/fizz?foo=Foo%20Bar"
```

#### decodifica

Decodifica in una stringa normale.

- Documentazione [decodeURIComponent](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/decodeURIComponent) 

```js
> decodeURIComponent('Foo%20Bar');
"Foo Bar"
```

C'è anche `decodeURIComponent` che è per l'uso su un intero URL, non solo un componente.
