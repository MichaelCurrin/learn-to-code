# If E Or

Guida all'utilizzo di `and` e `or` insieme nelle istruzioni `if`.

Potresti scoprire che leggere una serie di condizioni `and` e `or` non ti danno quello che ti aspetti e sono difficili da leggere. L'aggiunta di parentesi è un buon modo per risolvere questo problema.

## And

Inizia con `and` e non `or`.
```python
>>> False and False
False
```

Ora questo passa perché ciò che si trova sul lato destro del `or` è controllato, anche se il primo valore non ha alcun impatto in questa situazione.

```python
>>> False and False or True
True
```

Forzare il primo valore da controllare a sinistra del `and` aggiungendo le parentesi.

```python
>>> False and (False or True)
False
```

## Or

Se la prima parte a sinistra del `or` passa, il resto non viene valutato.

```python
>>> True or False and True
True
>>> True or False and False
True
```

Aggiungere parentesi per assicurarsi che la parte a destra del `and` sia selezionata.

```python
>>> (True or False) and False
False
```
