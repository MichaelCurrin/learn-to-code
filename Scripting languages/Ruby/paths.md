# Ruby paths

Given working directory is foo and there is a script at `foo/bar/baz.rb` which prints the expressions below. Note that you will get different results in the interactive console where there is no file.

Get current working directory.

```ruby
Dir.pwd
# => "/home/user/foo"
```

Note that is where a script is executed **from** in the terminal and not where the target script lives, which is covered next.

Absolute directory of the current script. [docs](https://www.rubydoc.info/stdlib/core/Kernel:__dir__).

```ruby
__dir__
"/home/user/foo/bar"
```

Path to current file.

```ruby
__FILE__
# => "bar/baz.rb"
```

Name of current file.

```ruby
File.basename _FILE__
# => "baz.rb"

File.basename 'foo/bar/baz.rb'
# => "baz.rb"
```
