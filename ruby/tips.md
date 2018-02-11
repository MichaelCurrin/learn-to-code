# Tips

## Getting started

### Install and upgrade

```bash
$ which ruby
/usr/bin/ruby
$ ruby -v
ruby 2.3.3p222 (2016-11-21) [x86_64-linux-gnu]
$ sudo apt-get install ruby-full
```

### Run a script

Based on [How to Install Ruby on Linux](https://www.thoughtco.com/instal-ruby-on-linux-2908370).

1. Create script
```
#!/usr/bin/env ruby
puts "Hello world!"
```
2. Run
```bash
$ ruby my_file.rb
$ chmod +x my_file.rb
$ ./my_file.pb
```

### Interactive mode

```bash
$ irb
```
```ruby
irb(main):001:0> puts 'test'
test
=> nil
irb(main):002:0> Math
=> Math
irb(main):004:0> Math.sqrt(123)
=> 11.090536506409418
```

## Resources

* [Ruby for Beginners](http://ruby-for-beginners.rubymonstas.org/) - the preface recommends a few resources
* [Ruby in 20 Minutes](https://www.ruby-lang.org/en/documentation/quickstart/)
* [First Ruby Program](http://rubylearning.com/satishtalim/first_ruby_program.html)
