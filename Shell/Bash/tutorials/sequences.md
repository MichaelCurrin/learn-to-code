# Sequences

##  Number sequence

Use the `seq` command to get a range of values.

```sh
$ seq
usage: seq [-w] [-f format] [-s string] [-t string] [first [incr]] last
```

From the man page:

> The seq utility prints a sequence of numbers, one per line (default), from first (default 1), to near last as possible, in increments of incr (default 1).  When first is larger than last the default incr is -1.

- Man page: https://www.unix.com/man-page/osx/1/seq/ or https://linux.die.net/man/1/seq
- Tutorial: https://www.howtoforge.com/linux-seq-command/


### Basic use

```sh
$ seq LAST

$ # e.g.
$ seq 5
1
2
3
4
5
```

```sh
$ seq FIRST LAST

$ # e.g.
$ seq 2 5
2
3
4
5
```

```sh
$ seq FIRST INCREMENT LAST

$ # e.g. 
$ seq 1 0.5 5
1
1.5
2
2.5
3
3.5
4
4.5
5
```

### Range

Iterate over a sequence and do multiplication on the value.

```sh
for i in $(seq 1 10); do 
  echo "$i $(($i * 2))"
done
```

### Separator

```sh
$ seq -s, 1 9
1,2,3,4,5,6,7,8,9,%
```

## Letter sequence

```sh
echo {a..z}
a b c d e f g h i j k l m n o p q r s t u v w x y z
```

From [source](https://stackoverflow.com/questions/7300070/looping-through-alphabets-in-bash). Using `nl` for line numbering filter.

```sh
echo -e {{a..n},ñ,{o..z}}"\n" | nl
     1	a
     2	 b
     3	 c
     4	 d
     5	 e
     6	 f
     7	 g
     8	 h
     9	 i
    10	 j
    11	 k
    12	 l
    13	 m
    14	 n
    15	 ñ
    16	 o
    17	 p
    18	 q
    19	 r
    20	 s
    21	 t
    22	 u
    23	 v
    24	 w
    25	 x
    26	 y
    27	 z
```
