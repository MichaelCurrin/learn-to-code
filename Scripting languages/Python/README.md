# Python

## What is Python?

Python is an elegant, easy to learn and read yet powerful programming language. It was named after _Monty Python_.

It can be used for functional and object-oriented programming.

In Python, to separate logical blocks in conditionals and loops we use indentation (typically 4 spaces at a time) rather than curly brackets as in C, Java or JavaScript.

Python has a rich friendly growing community. 

> Python is an easy to learn, powerful programming language. It has efficient high-level data structures and a simple but effective approach to object-oriented programming. Python’s elegant syntax and dynamic typing, together with its interpreted nature, make it an ideal language for scripting and rapid application development in many areas on most platforms. Source: [Tutorial on the Python docs](https://docs.python.org/3/tutorial/index.html)

### Typing

Python is a **dynamically** typed language. This means that a variable can change data types (though this can cause headaches when catching bugs, so adding type checking is useful). 

It is also a **strongly** typed language. Youu do not need to specify the data type of a variable explicily as it can be inferred - this check is done at runtime, unlike languages like _Java_ and _C++_ which check types at a compile time. 

Since Python is dynamically typed, some people incorrectly think Python is weakly typed. But it is strongly typed - if you add an `int` and `str` together or try run a `str` method on an `int` object, you will get an error. Contrast with JavaScript which is "weakly typed" or "untyped" such that `1 + '1'` is allowed and `'11'`. Resource on [types](https://hackernoon.com/actually-understand-statically-dynamically-strongly-weakly-typed-languages-axbpi3za2).

Fortunately, Python allows groups of data types - for example, to get the count of elements you run `len(iterable)` where the iterable could be a `str` or `list` for example.

Extract from Typing heading on [Wikipedia page](https://en.wikipedia.org/wiki/Python_(programming_language)):

> Python uses duck typing and has typed objects but untyped variable names. Type constraints are not checked at compile time; rather, operations on an object may fail, signifying that the given object is not of a suitable type. Despite being dynamically typed, Python is strongly typed, forbidding operations that are not well-defined (for example, adding a number to a string) rather than silently attempting to make sense of them.

### Libraries

Python libraries are usually stored on the Python Package Index (PyPI) - [link](https://pypi.org/).

There are many Python libraries available for download for free. You can use some as standup applications. Some can be imported in your projects. Python projects are typically open source, so you can modify an existing project, using it as a starting point for your project or modifying a library you need to import as the original one is lacking something.

### Common usecases for Python

- Once-off short scripts
- Automating repetive tasks
- Web servers
- Web scraping
- Data science (fetching, processing and visualizing data)
- Machine learning
- Games on desktop

Python can even be used for mobile apps and build a static website.

One web server appoach is Wordpress style - generate HTML from templates and use a database for fetching and store user data. 

Another approach is create an API which processes web requests and return serves JSON data for use by a web frontend or mobile apps.

## Resources

- [Official site](https://python.org)
- [Wikipedia page](https://en.wikipedia.org/wiki/Python_(programming_language))
- [Python 3 Documentation](https://docs.python.org/3/)
- PEP (Python Enhancement Proposal) documents
    - [The Zen of Python](https://www.python.org/dev/peps/pep-0020/)
    - [PEP 8 - Style Guide for Python Code](https://www.python.org/dev/peps/pep-0008/)
- [Python Package Index](https://pypi.org/) for libraries
- Tutorials
    - [The Python Tutorial](https://docs.python.org/3/tutorial/index.html) on the Python Documentation site
    - [Learn Python in Y Minutes](https://learnxinyminutes.com/docs/python/)
- Ebooks
    - [Automate the Boring Stuff](https://automatetheboringstuff.com/) ebook - available to view on the website or to buy as a book or Ebook
    - [Python for Informatics](http://www.pythonlearn.com/book_007.pdf) ebook - downloadable as PDF from [pythonlearn.com](https://www.pythonlearn.com). 
        - This is a great way to start doing something useful within Python even if you are just a beginner. It takes you from the basics to doing data science tasks with Python, such as reading from a database, posting a tweet or visualizing data. The sections contain info and practical code and they aren't tool detailed or long. Also, you don't have to read it in sequence - you can skip to a later section that interests you if you want to build that thing.
- Cheatsheets
    - [wilfredinni/python-cheatsheet](https://github.com/wilfredinni/python-cheatsheet)
    - [8 Best Python Cheat Sheets for Beginners and Intermediate Learners](https://sinxloud.com/python-cheat-sheet-beginner-advanced/)
- Courses
    - Udemy - [Python courses](https://www.udemy.com/topic/python/)
    - Codecademy - [Python course](https://www.codecademy.com/catalog/language/python)
    - Coursera - [Python courses](https://www.coursera.org/courses?query=python)
- [Python topic](https://github.com/topics/python?l=python&o=desc&s=stars) on Github
- Blogs
    - [Real Python](https://realpython.com/) blog - I really enjoy this site, which has a few authors writing Python tutorials. Subscribe to their mailing list for regularly updates on a few posts.
    - [Do you speak Python?](https://towardsdatascience.com/do-you-speak-python-5dcfa9bb1fbe) post - examples of using Python basics including classes, lambdas, conditional statements and loops.
    - [Learn to be a developer](https://michaelcurrin.github.io/coding-blog/2020/01/27/learn-to-be-developer.html) post - one of my own blog posts which focuses on Python. Not just what to learn about it, but how. And how to find a motivation.

### Design patterns

- [Python Patterns](https://github.com/faif/python-patterns) - collection on Github with a great summary and links to code.
- [Design Patterns in Python](https://refactoring.guru/design-patterns/python) - another catalogue of Python examples in website format.
- [Python Design Patterns: For Sleek And Fashionable Code](https://www.toptal.com/python/python-design-patterns) blog post.
- [Python Patterns guide](https://python-patterns.guide/) website.

### Code editors

#### What is an IDE?

To write code with more than just notepad, you can find a text editor that supports some limited code functionality. For more advanced use (but common for every development), you probably want to find an IDE (Integrated Developer Environment).

An IDE is a text editor for viewing and editing code that provides additional functionality to make development easier. Many provide some kind of autocomplete based on text already in the file. And syntax highlighting and raising errors and warnings, specific to the specific language you are coding it. They also let you run code, such as with a run button or an integrated terminal pane.

They also usually offer an additional level of _intellisense_, which may require extensions for a certain language. This sense uses code definitions (from your own code and other libraries) to give you better hints as you type and also can show you what inputs the function or class takes. This is a tool to augment your coding and make you faste. Based on advice from an article _ read - be case of relying too much on this though, as it can hamper your ability to solve problems and ability to code in a plain text editor. Basically its like you never get to learn to how to spell a word like "accessibility" because you rely on your phone or Word or Gmail to correct the word for you.

#### Recommended options

I like this article, which covers the [Top 10 Python IDE and Code Editors in 2020](https://www.geeksforgeeks.org/top-10-python-ide-and-code-editors-in-2020/). Alternatively, see my own notes on IDEs covered below.

These IDEs are free and available on Windows, Mac and Linux and I recommend them for Python development.

- Visual Studio Code
    * Also known as VS Code. Not to be confused with _Visual Studio_.
    * It takes effort to get this to work with Python for running code and handling linting and syntax highlighting.
        * Setup your user config.
        * Setup files in each project. `.vscode/settings.json` with environments and other settngs setup. A dotenv (`.env`) file is also needed with `PATH=...`
    * There is only a free version of this.
    * [Download page](https://code.visualstudio.com/)
    * Read this guide for [Getting Started with Python in VS Code](https://code.visualstudio.com/docs/python/python-tutorial)
- PyCharm
    * This is targeted at Python developers so the program overall feels smoother for Python development. For example, managing and activating virtual environments and installing dependencies.
    * This works much better out of box than VS Code, both on an IDE and project-specific config level. The disadvantage of PyCharm is that it has a less support (fewer extensions or built functionality) to handle other languages. For example, JavaScript is handled fine, but not CoffeeScript. And when you put JavaScript inside HTML inside a markdown template file, you lose some functionality on the inner levels which VS Code does handle, such as syntax highlighting and picking up errors.
    * There are also extensions for better support for things like Bash and databases.
    * Available a free "Community Edition" which does a lot. There is also a paid "Professional Edition".
    * [Download](https://www.jetbrains.com/pycharm/)

#### More options

Alternatives - I don't use or recommend these but they are provided for completeness.

- Spyder
    * You might come across this in tutorials related to Data Science work. I read that it is deprecated i.e. no longer maintained and may be unavailable. When I used it I found that it did not work so well for virtual environments. I also had Spyder itself stop working when Python upgraded on the system and it took some looking on Stack Overflow to fix this.
    * [Homepage](https://www.spyder-ide.org/)
- Sublime Text
    * "A sophisticated text editor for code, markup and prose."
    * I used to use this in my early days but found it was not convenient for things like virtual environments, Python versions, extensions 
    * The free version occasionally gives a message to ask you to buy the paid version, but there is no other difference in functionality.
    * [Homepage](https://www.sublimetext.com/)
- Atom
    * I have not used this before but I see it mentioned online a lot but not as often as VS Code.
    * [Homepage](https://atom.io/)

#### Extensions

- For Visual Studio Code. Follow the download URLs or use lookup by name in the VS Code Extension tab.
    * Python extension.
        + "Linting, Debugging (multi-threaded, remote), Intellisense, code formatting, refactoring, unit tests, snippets, and more."
        + [Download page](https://marketplace.visualstudio.com/items?itemName=ms-python.python). 
    * Python Indent extension. 
        + "Correct Python indentation"
        + [Download page](https://marketplace.visualstudio.com/items?itemName=KevinRose.vsc-python-indent).

## Installation

### Install Python

#### Use a package manager

Follow steps 1 and 2 on this [gist](https://gist.github.com/MichaelCurrin/3a4d14ba1763b4d6a1884f56a01412b7).

#### Download source

If you package manager does not support the latest version, you can dowload the source and install it manually.

- [Download Python](https://www.python.org/downloads/) from _python.org_.


### Install addition Python versions

For managing multiple versions of Python which are all installed, use the `pyenv` tool.

- [pyenv/pyenv](https://github.com/pyenv/pyenv) on Github.

Example usage for Python 2, if you _really_ need to use it:

- Install Python version `2.7.15`.
    ```sh
    $ pyenv install -v 2.7.15
    
    $ # On macOS Catalina, set flag as per https://github.com/pyenv/pyenv/wiki/common-build-problems
    $ CFLAGS="-I$(xcrun --show-sdk-path)/usr/include" pyenv install -v 2.7.15
    ```
- Run target Python version.
    ```
    $ $(pyenv root)/versions/2.7.15/bin/python -v
    Python 2.7.15
    
    $ $(pyenv root)/versions/2.7.15/bin/python
    >>> print 'Hello, world!'
    Hello, world!
    ```
- Run pip for target Python version (`pip` comes with newer versions of PY2 and PY3).
    ```sh
    $ $(pyenv root)/versions/2.7.15/bin/pip list
    ...
    ```
- Create a virtual environment using target Python version.
    ```sh
    $ $(pyenv root)/versions/2.7.15/bin/python -m virtualenv <NEW_ENV_NAME>
    $ source <NEW_ENV_NAME>/bin/activate
    ```

### Install pip

The Python package manager - from the recursive abbreviation "Pip install packages".

```sh
$ cd ~/Downloads
$ curl https://bootstrap.pypa.io/get-pip.py -o get-pip.py
$ python get-pip.py
```

## Run

### Online

- Online code playgrounds
    - [repl.it](https://repl.it/languages/python3)
    - [Tutorials Point](https://www.tutorialspoint.com/execute_python_online.php)
- Jupyter notebooks
    - [Jupyter](https://jupyter.org/try) for a choice notebooks through My Binder
    - [My binder](https://mybinder.org/)
    - [Google Colab](https://colab.research.google.com/)
