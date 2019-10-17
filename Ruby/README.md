# Ruby

## Getting started

### Install and upgrade

```bash
$ which ruby
/usr/bin/ruby
$ ruby -v
ruby 2.3.3p222 (2016-11-21) [x86_64-linux-gnu]
```

From installation guide in Ruby docs [here](https://www.ruby-lang.org/en/documentation/installation/#package-management-systems)

#### Debian/Ubuntu

Install.

```bash
$ sudo apt-get install ruby-full
```

Upgrade.

```bash
$ sudo apt-get upgrade ruby-full
```

### Mac

Install or upgrade.
```bash
$ brew install ruby
```


### Run a script

Based on [How to Install Ruby on Linux](https://www.thoughtco.com/instal-ruby-on-linux-2908370).

1. Create script. Example, with optional shebang for executable.
    ```bash
    #!/usr/bin/env ruby
    puts "Hello world!"
    ```
2. Optionally make it executable.
    ```bash
    $ chmod +x my_file.rb
    ```
2. Run the script.
    - With ruby command.
        ```bash
        $ ruby my_file.rb
        ```
    - Or as executable.
        ```bash
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
