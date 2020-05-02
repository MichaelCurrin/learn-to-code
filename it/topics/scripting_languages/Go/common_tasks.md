# Compiti comuni

## Leggi un file di testo

Da [Leggi tutto il file](https://rosettacode.org/wiki/Read_entire_file#Go).

```go
import "io/ioutil"
 
data, err := ioutil.ReadFile(filename)
sv := string(data)
```

Vedi anche [Leggi un file riga per riga](https://rosettacode.org/wiki/Read_a_file_line_by_line#Go).
