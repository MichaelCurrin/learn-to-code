# Programmazione in C

Punti chiave:

- _C_ è una linguaggio general-purpose nato nel 1972.
- È noto per le sue prestazioni elevate e il controllo a basso livello.
- _C_ non è così adatto ai principianti poichè, anche per fare qualcosa di semplice hai bisogno di un codice dettagliato rispetto ad altri linguaggi.
- Tuttavia, il vantaggio è che offre un alto grado di controllo, il che significa che è possibile ottimizzare la gestione della memoria a basso livello.
- _C_ è a Tipizzazione Statica, quindi, nella maggior parte dei casi, devi dichiarare esplicitamente il tipo (ad es. Intero con segno a 32 bit). Inoltre gli oggetti non possono cambiare tipo.
- Ha variabili e funzioni.
- Non ci sono classi e non esiste un tipo di stringa (sebbene sia possibile avere una matrice di caratteri).
- Utilizza i puntatori: una funzione può operare su un puntatore di una variabile e modificarla in posizione, senza fare una copia del valore che utilizzerebbe memoria aggiuntiva.

## Risorse

- [C (linguaggio di programmazione)](https://it.wikipedia.org/wiki/C_(linguaggio)) su Wikipedia.
    - > In informatica C è un linguaggio di programmazione imperativo di natura procedurale: i programmi scritti in questo linguaggio sono composti da espressioni matematiche e da istruzioni imperative raggruppate in procedure parametrizzate in grado di manipolare vari tipi di dati.
- [
Che cos'è il linguaggio di programmazione C? Introduzione, storia e nozioni di base](https://www.guru99.com/c-programming-language.html)
- [Introduzione al linguaggio C](https://www.geeksforgeeks.org/c-language-set-1-introduction/)

## Implementazione


La maggior parte dei linguaggi di programmazione che incontrerai come Bash, Python o Java saranno **implementati** in _C_.

Ad esempio, la versione comunemente usata di Python conosciuta come CPython e può essere trovata qui GitHub come ([python / cpython](https://github.com/python/cpython)). Questo è Python implementato in _C_. Vedrai molti file scritti in _C_ con estensioni `.c` o` .h`. Quando si esegue il codice Python o si importa una libreria integrata, è possibile che si stia eseguendo la directory di codice _C_ compilata o che si stia eseguendo il codice _Python_ che esegue internamente il codice _C_. L'esecuzione diretta di _C_ è in genere più veloce, poiché l'esecuzione del codice Python richiede interpretazione e compilazione in fase di esecuzione.

Esistono alternative come Jython implementata in Java e IronPython implementata in C#.

## Aiuto

Chiedi aiuto per sapere come utilizzare il compilatore GNU C
 direttamente da riga di comando.

```
$ man cc
$ info cc
$ cc --help
```
