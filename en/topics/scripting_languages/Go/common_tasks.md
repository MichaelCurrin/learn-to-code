# Common tasks

## Read a text file

From [Read entire file](https://rosettacode.org/wiki/Read_entire_file#Go).

```go
import "io/ioutil"
 
data, err := ioutil.ReadFile(filename)
sv := string(data)
```

See also [Read a file line by line](https://rosettacode.org/wiki/Read_a_file_line_by_line#Go).
