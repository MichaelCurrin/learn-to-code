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

#### macOS

_Note that since Catalina, the system Ruby's dependencies are locked, so running this below will install a **separate** version of Ruby with its own dependencies. Running the steps below may cause **problems** on earlier version of macOS._

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

Add the following to your `~/.bashrc` or `~/.zshrc` file. This will ensure so that your user (Homebrew) install of Ruby will be found before the system Ruby.

```sh
export RUBY_HOME=/usr/local/opt/ruby/bin
export PATH="$RUBY_HOME:$PATH"
```

#### Make the custom Ruby's gems runable

If you do a gem install with the `--user-install` flag, you'll install for your user only. However, you'll see a message that the gem path is not in your path. 

So add the following:

```sh
export GEM_PATH="$HOME/.gem/ruby/2.6.0/bin"
export PATH="$GEM_PATH:$PATH"
```

Adjust the version above from `2.6.0` to your Ruby version if necessary.

#### Install a gem

You might want install bundler, a Ruby dependency manager that lets you install gems that are isolated for each project.

```sh
$ gem install --user-install bundler
```

#### Check paths

Reload your shell or start a new terminal, then check where the installed versions are. For example:

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

- [ruby-lang.org](https://www.ruby-lang.org/) Ruby homepage.
- [ruby/ruby](https://github.com/ruby/ruby) on Github.
- Tutorials for starting Ruby.
    - [Ruby for Beginners](http://ruby-for-beginners.rubymonstas.org/) on _Ruby Monstas_ site - the preface recommends a few resources.
    - [First Ruby Program](http://rubylearning.com/satishtalim/first_ruby_program.html) on [rubylearning.com](http://rubylearning.com). There are also tutorials on that site by topic or concept, but I found the site not so friendly so read.
    - [ruby-lang.org](www.ruby-lang.org) 
        - [Ruby in 20 Minutes](https://www.ruby-lang.org/en/documentation/quickstart/) - quickstart guide from the Ruby docs.
        - [To Ruby from Python](https://www.ruby-lang.org/en/documentation/ruby-from-other-languages/to-ruby-from-python/)
    - [Learn Ruby in Y Minutes](https://learnxinyminutes.com/docs/ruby/)
- Tutorials beyond the basics
    - [Ruby book](https://launchschool.com/books/ruby) on _LaunchSchool.com_. This includes references to loops, hashes, strings and so on in the sidebar.
    - [culttt.com](https://culttt.com) blog.
        - [Structs in Ruby](https://culttt.com/2015/04/15/working-with-structs-in-ruby/)
        - [Symbols in Ruby](https://culttt.com/2015/04/22/what-are-symbols-in-ruby/)
    - [rubyguides.com](https://www.rubyguides.com) 
        - Covers topics like how to use queues, how to use methods and from Java to Ruby.
        - [HTTP request with Ruby](https://www.rubyguides.com/2018/08/ruby-http-request/)
    - [Mastering ruby blocks](https://mixandgo.com/learn/mastering-ruby-blocks-in-less-than-5-minutes) on _Mix and Go_ site.
    - [Blocks, procs and lambdas](https://www.rubyguides.com/2016/02/ruby-procs-and-lambdas/) on _Ruby Guides_ site.


## Ruby packages

Also known as "gems".

### Managing gems

- RubyGems
    - [rubygems.org](https://rubygems.org/) homepage. Gems are uploaded here and can be installed from here. Typically a `Gemfile` will include the line `source "https://rubygems.org”`.
    - [RubyGem basics](https://guides.rubygems.org/rubygems-basics/).
    - [Publishing your Gem](https://guides.rubygems.org/publishing/) on RubyGems listing.
- Bundler
    - [bundler.io](https://bundler.io/) homepage.
        > Bundler provides a consistent environment for Ruby projects by tracking and installing the exact gems and versions that are needed.
    - [Bundler Gemfile](https://bundler.io/gemfile.html) guide.
    - [How to install gems from git repositories](https://bundler.io/guides/git.html)
- [Github packages documentation](https://help.github.com/en/packages)
    - [Configuring RubyGems for use with Github pacakges](https://help.github.com/en/packages/using-github-packages-with-your-projects-ecosystem/configuring-rubygems-for-use-with-github-packages). From list of packages in the Github ecosystem [here](https://help.github.com/en/packages/using-github-packages-with-your-projects-ecosystem).
 
### Recommended gems

- [Ruby on Rails](https://rubyonrails.org/) - the most popular web development framework for Ruby.
- [Jekyll](https://jekyllrb/com) - static site generator.


## Syntax

Ruby uses indentation of 2 spaces, though tabs are used occasionally. Ruby does not require indentation to work though. Unlike C-like languages, blocks are defined using words rather than braces.

e.g.

```ruby
def greet name
  if name
    puts "Hello, #{name}!"
  else
    puts "Hello, world!"
  end
end
```

```ruby
> greet 'Ruby student'
Hello, Ruby student!

> greet nil
Hello, world!
```

The Ruby syntax is light:

- Functions can be called even with arguments, but the brackets are _optional_. The brackets usually not used for functions but are used for methods (on classes).
- The return statement in a function is implied - the last variable name or the function call result will be returned.
