# Common tasks

## Read a text file

### Read text file line by line

Based on [Read a text file line by line](https://rosettacode.org/wiki/Read_a_file_line_by_line#Ruby).

```ruby
IO.foreach "foo.txt" do |line|
  puts line
end
```

`File` inherits from `IO`, so `File.foreach` also works.

```ruby
File.foreach("foobar.txt") {|line| puts line}
```

`IO.foreach` and `File.foreach` can also read a _subprocess_.

```ruby
IO.foreach "| grep afs3 /etc/services" do |line|
  puts line
end
```

#### Gotcha

Caution! `IO.foreach` and `File.foreach` take a portname. To open an arbitrary filename (which might start with "|"), you must use File.open, then IO#each (or IO#each_line). The block form of File.open automatically closes the file after running the block.

```ruby
filename = "|strange-name.txt"
File.open(filename) do |file|
  file.each {|line| puts line}
end
```

### Read an entire text file

Based on [Read an entire text file](https://rosettacode.org/wiki/Read_entire_file#Ruby).


`IO.read` is for text files. It uses the default text encodings, and on Microsoft Windows, it also converts "\r\n" to "\n".

Read entire text file.

```ruby
str = IO.read "foo.txt"
```

It can also read a _subprocess_.

```ruby
str = IO.read "| grep ftp /etc/services"
```

#### Gotcha

Caution! `IO.read` and `File.read` take a portname. To open an arbitrary path (which might start with "|"), you must use `File.open`, then `IO#read`.

```ruby
path = "|strange-name.txt"
str = File.open(path) {|f| f.read}
```
