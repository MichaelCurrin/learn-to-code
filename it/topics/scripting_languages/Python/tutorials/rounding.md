# Arrotondamento
> Una guida agli arrotondamenti in Python.

## Represent floats as strings

Usando la funzione incorporata `format` o il metodo` str.format`.
```python
>>> format(66.66666666666, '.4f')
'66.6667'
>>> '{:.4f}'.format(66.6666666)
'66.6667'

>>> # Aggiungi un separatore virgola per una facile lettura.
>>> '{:,.1f}'.format(10000.45)
'10,000.5'

>>> # Aggiungi imbottitura. Utile per una colonna di numeri o una tabella.
>>> '{:>20,.1f}'.format(10000.45)
'            10,000.5'
```

### Risorse

Guide alla formattazione delle stringhe in Python.

- [Usando % e .format() per il bene!](https://pyformat.info/)
- [Best practice per la formattazione di stringhe Python](https://realpython.com/python-string-formatting/)

## Perdita di precisione di float

Alcune frazioni decimali non possono essere archiviate accuratamente in binario, quindi vengono utilizzate le approssimazioni. Questi di solito non contano, ma possono portare a risultati inaspettati durante l'aritmetica o l'arrotondamento. Questo può fare la differenza quando si effettua un report (ad esempio qual è stato il tasso di conversazione?) O quando si imposta una condizione esatta nel flusso di controllo che non verrà mai soddisfatta.

### Addizione

```python
>>> (0.3 + 0.3) == 0.6
True

>>> # Questo non funziona come previsto.
>>> (0.3 + 0.6) == 0.9
False
>>> 0.3 + 0.6
0.8999999999999999
```

```python
>>> 0.1 + 0.1
0.2
>>> 0.1 + 0.1 + 0.1
0.30000000000000004
```

### Arrotondamento

```python
>>> # Usa un built-in per arrotondare al primo decimale.
>>> round(1.46, 1) == 1.5
True

>>> # Questo non funziona come previsto.
>>> round(1.45, 1) == 1.5
False
>>> round(1.45, 1)
1.4

>>> # Tuttavia, con una piccola modifica, si arrotonda come previsto.
>>> round(1.451, 1)
1.5
```

### Approccio decimale

Una soluzione è usare un tipo decimale al posto del tipo float.

```python
>>> from decimal import Decimal as D
>>> D(3) / D(10)
D('0.3')
>>> str( D(3) / D(10) )
'0.3'
>>> ( D(3) / D(10) ).as_integer_ratio()
(3, 10)

>>> # Ora siamo in grado di ottenere il risultato atteso.
>>> ( D(3) / D(10) + D(6) / D(10) ) == D(0.9)
>>> D(3) / D(10) + D(6) / D(10)
Decimal('0.9')

>>> # Spostare il punto verso i luoghi a destra.
>>> ( D(3) / D(10) ).shift(2)
Decimal('30.0')
```

Si noti inoltre che il valore memorizzato in una variabile può essere diverso dalla versione formattata mostrata nel terminale con alcuni arrotondamenti.

### Risorse

Se vuoi capire di più questo problema di archiviazione, ti suggerisco di leggere la "mantissa floating" o significand".

- [Significand](https://en.wikipedia.org/wiki/Significand) su Wikipedia.
- [Fondamenti di rappresentazione dei dati: numeri in virgola mobile](https://en.wikibooks.org/wiki/A-level_Computing/AQA/Paper_2/Fundamentals_of_data_representation/Floating_point_numbers).
- [Floating-Point Binary](http://cstl-csm.semo.edu/xzhang/Class%20Folder/CS280/Workbook_HTML/FLOATING_tut.htm)

Guarda anche Python 3 [decimale](https://docs.python.org/3/library/decimal.html) documentazione del modulo.
