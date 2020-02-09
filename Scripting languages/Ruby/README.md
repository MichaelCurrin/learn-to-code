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

Check where Ruby in installed, if at all. For example:

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

### macOS

_Note that since Catalina, the system Ruby's dependencies are locked, so running this below will install a **separate** version of Ruby with its own dependecies. Running the steps below may cause **problems** on earlier version of macOS._

Based on this [article](https://medium.com/faun/macos-catalina-xcode-homebrew-gems-developer-headaches-cf7b1edf10b7)

#### Install or upgrade Ruby

Install `ruby` and `gem` commands using [Homebrew](https://brew.sh/).

```bash
$ brew install ruby

# Alternatively:
$ brew reinstall ruby
```

In the output, you will something like this:

> ruby is keg-only, which means it was not symlinked into /usr/local, > because macOS already provides this software and installing another version in parallel can cause all kinds of trouble.

Then it gives a suggestion to add to your shell config, which we do next.

#### Enable your custom Ruby

Add the following to your `~/.bashrc` or `~/.zshrc` file. This will ensure so that your user (Homebrew) install of Ruby will be found before the system Ruby. The first line is not necessary but makes it easy to show the value later.

```sh
export RUBY_HOME=/usr/local/opt/ruby/bin
export PATH="$RUBY_HOME:$PATH"
```

#### Make custom Ruby's gems runable

If you do a gem install with the `--user-install` flag, you'll install for your user only. However, you'll see a message that the gem path is not in your path. So add the following:

```sh
export GEM_PATH="$HOME/.gem/ruby/2.6.0/bin"
export PATH="$GEM_PATH:$PATH"
```

#### Install a gem

You might want install bundler, a Ruby dependency manager that lets you install gems that are isolated for each project.

```sh
$ gem install --user-install bundler
```

#### Check paths

```
$ which ruby
/usr/local/opt/ruby/bin/ruby

$ which gem
/usr/local/opt/ruby/bin/gem

$ which bundler
/Users/foo-bar/.gem/ruby/2.6.0/bin/bundler
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

If you just enter `ruby` on the command-line with no filename or stdin, _Ruby_ will wait for input. So rather use the interactive _Ruby_ which lets you get a response each time you press enter.

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
