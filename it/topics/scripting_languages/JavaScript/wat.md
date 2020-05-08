# JavaScript Wat
> Cosa? Stranezze di JavaScript.

Per maggiori informazioni, vedi questo post sul blog [Il perché dietro il WAT: una spiegazione del sistema di tipi di [JavaScript](https://medium.com/dailyjs/the-why-behind-the-wat-an-explanation-of-javascripts-weird-type-system-83b92879a8db), guarda la seconda metà del video [qui](https://www.destroyallsoftware.com/talks/wat) o cerca "js wat" su Youtube.

## Tipi e oggetti

```Javascript
> typeof {}
'oggetto'

> typeof []
'oggetto'
```

Combinazioni sorprendenti quando si sommano oggetti.

```Javascript
> [] + []
''

> [] + {}
'[oggetto Oggetto]'

> {} + []
0

> {} + {}
NaN
```

```Javascript
> Array (16) .join ('wat' - 1) + 'Batman'
"NaNNaNNaNNaNNaNNaNNaNNaNNaNNaNNaNNaNNaNNaNNaN Batman"
```

Non esiste una funzione `sum`. Devi implementare il tuo usando il metodo `.reduce` su un array.

Se si tenta di aggiungere agli array, si ottiene una stringa.

```Javascript
> [1, 2] + [3]
'1,23'
```

Quindi devi usare `[] .concat`.
 
```Javascript
> [1, 2] .concat ([3])
[1, 2, 3]

> [] .concat ([1, 2], [3])
[1, 2, 3]
```

## Maps

JavaScript ha `{}` che è un array associativo, cioè coppie chiave-valore.

```Javascript
> var x = {
  foo: 100,
  barra: 200,
  3: 'baz'
}
> x.foo
100
> x.3 // errore

> x [3]
'Baz'
```

Sebbene sia possibile avere solo stringhe come chiavi.
```Javascript
> x [4] = 'fizz'

> x
{foo: 100, bar: 200, 3: 'baz', '4': 'fizz'}
```

Se si desidera una mappa corretta in grado di gestire altri tipi, utilizzare una [Mappa](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Map#Examples).

```Javascript
> var x = nuova mappa ()
Carta geografica {}
> x.set ('pippo')
Mappa {'foo' => undefined}
> x.set ('pippo', 1)
Mappa {'foo' => 1}
> x.set ('bar', 2)
Mappa {'foo' => 1, 'bar' => 2}
> x.set (3, 'baz')
Mappa {'foo' => 1, 'bar' => 2, 3 => 'baz'}
```

Confronti

```Javascript
> NaN === NaN
falso
```

Hai bisogno di un triplo segno di uguaglianza per un confronto rigoroso, altrimenti stai solo verificando che due valori siano entrambi veritieri o entrambi falsi.

```Javascript
> 1 == vero
vero
> 1 === vero
falso
>

> 0 == falso
vero
> 0 === falso
falso
```

## Numeri

```Javascript
> tipo di NaN
'numero'

> numero // Questa non è una cosa.
gettato:
ReferenceError: il numero non è definito

> Numero // Ma questa è una cosa. Ma è una funzione, non una classe.
[Funzione: numero]
```

```Javascript
> 1 + '10' // Implicita la conversione in stringa quando aggiungi numeri.
'110'

> [1, 2, 100] .sort () // Ordinamento alfanumerico di numeri
[1, 100, 2]
```

## Array

```Javascript
> var x = [] // Questo è un array.

> x [1] = 'foo' // Sì, puoi saltare l'assegnazione dell'elemento 0
'Foo'
> x
[<1 oggetto vuoto>, 'pippo']
> x [0] = 'bar'
'bar'
> x
['bar', 'foo']

> xy = 'baz' // Sì, è possibile aggiungere un attributo come valore o utilizzare un array.
'Baz'
> x
['bar', 'foo', y: 'baz']
> xy
'Baz'

> x.length = 10 // Sì, puoi assegnare una nuova lunghezza all'array.
10
> x
['bar', 'foo', <8 oggetti vuoti>, y: 'baz']

> delete (x [0]) // È possibile eliminare un elemento sul posto senza influire sugli altri.
vero
> x
[<1 oggetto vuoto>, 'pippo', <8 oggetti vuoti>, y: 'baz']
```

## Object work

Per ottenere le chiavi di un array associativo, non esiste alcun metodo sull'oggetto. È necessario "Oggetto".

```Javascript
> var x = {a: foo, b: buzz}

>> Object.keys (x)
['a', 'b']

> Object.values ​​(x)
['foo', 'buzz']

> Object.entries (x)
[['a', 'foo'], ['b', 'buzz']]
```
