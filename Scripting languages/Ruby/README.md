# Ruby

## What is Ruby?

From the [Ruby official site](https://www.ruby-lang.org/en/):

> Ruby is...
> A dynamic, open source programming language with a focus on simplicity and productivity. It has an elegant syntax that is natural to read and easy to write.

From [Wikipedia](https://en.wikipedia.org/wiki/Ruby_(programming_language))

> Ruby is an interpreted, high-level, general-purpose programming language. It was designed and developed in the mid-1990s by Yukihiro "Matz" Matsumoto in Japan.
> Ruby is dynamically typed and uses garbage collection. It supports multiple programming paradigms, including procedural, object-oriented, and functional programming. According to the creator, Ruby was influenced by Perl, Smalltalk, Eiffel, Ada, Basic, and Lisp.

## Getting started

### Install and upgrade

Check where Ruby in installed, if at all.

```bash
$ which ruby
/usr/bin/ruby
```

Check which version you have installed.

```bash
$ ruby -v
ruby 2.3.3p222 (2016-11-21) [x86_64-linux-gnu]
```

Install Ruby using one of the commands below or follow this [installation guide](https://www.ruby-lang.org/en/documentation/installation/#package-management-systems).

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

- [Official site](https://www.ruby-lang.org/en/)
- Tutorials
    - [Ruby for Beginners](http://ruby-for-beginners.rubymonstas.org/) - the preface recommends a few resources
    - [First Ruby Program](http://rubylearning.com/satishtalim/first_ruby_program.html)
    - [Ruby in 20 Minutes](https://www.ruby-lang.org/en/documentation/quickstart/) - quickstart guide from Ruby docs
    - [Learn Ruby in Y Minutes](https://learnxinyminutes.com/docs/ruby/)
    - [HTTP request with Ruby](https://www.rubyguides.com/2018/08/ruby-http-request/)
- Ruby libraries
    - [RubyGems](https://rubygems.org/) website, where gems can be uploaded and downloaded.
    - [Ruby on Rails](https://rubyonrails.org/) - the most popular web development framework for Ruby.
    - [Jekyll](https://jekyllrb/com) - static site generator.
