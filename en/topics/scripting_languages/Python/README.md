# Python

## What is Python?

Python is an elegant, easy to learn and read yet powerful programming language. It was named after _Monty Python_.

It can be used for functional and object-oriented programming.

In Python, to separate logical blocks in conditionals and loops we use indentation (typically 4 spaces at a time) rather than curly brackets as in C, Java or JavaScript.

Python has a rich friendly growing community.

> Python is an easy to learn, powerful programming language. It has efficient high-level data structures and a simple but effective approach to object-oriented programming. Python’s elegant syntax and dynamic typing, together with its interpreted nature, make it an ideal language for scripting and rapid application development in many areas on most platforms. Source: [Tutorial on the Python docs](https://docs.python.org/3/tutorial/index.html)

### Libraries

Python libraries are usually stored on the Python Package Index (PyPI) - [link](https://pypi.org/).

There are many Python libraries available for download for free. You can use some as standup applications. Some can be imported in your projects. Python projects are typically open source, so you can modify an existing project, using it as a starting point for your project or modifying a library you need to import as the original one is lacking something.

### Common usecases for Python

- Once-off short scripts
- Automating repetive tasks
- Web servers (website, API, CMS)
- Web scraping
- Data Science (fetching, processing and visualizing data)
- Machine Learning
- Games
- Special effects

Python can even be used for mobile apps and build a static website.

One web server appoach is Wordpress style - generate HTML from templates and use a database for fetching and store user data.

Another approach is create an API which processes web requests and return serves JSON data for use by a web frontend or mobile apps.


### Typing

Some detailed notes on _typing_ in the languages itself.

Python is a **dynamically** typed language. This means that a variable can change data types (though this can cause headaches when catching bugs, so adding type checking is useful).

It is also a **strongly** typed language. Youu do not need to specify the data type of a variable explicily as it can be inferred - this check is done at runtime, unlike languages like _Java_ and _C++_ which check types at a compile time.

Since Python is dynamically typed, some people incorrectly think Python is weakly typed. But it is strongly typed - if you add an `int` and `str` together or try run a `str` method on an `int` object, you will get an error. Contrast with JavaScript which is "weakly typed" or "untyped" such that `1 + '1'` is allowed and `'11'`. Resource on [types](https://hackernoon.com/actually-understand-statically-dynamically-strongly-weakly-typed-languages-axbpi3za2).

Fortunately, Python allows groups of data types - for example, to get the count of elements you run `len(iterable)` where the iterable could be a `str` or `list` for example.

Extract from Typing heading on [Wikipedia page](https://en.wikipedia.org/wiki/Python_(programming_language)):

> Python uses duck typing and has typed objects but untyped variable names. Type constraints are not checked at compile time; rather, operations on an object may fail, signifying that the given object is not of a suitable type. Despite being dynamically typed, Python is strongly typed, forbidding operations that are not well-defined (for example, adding a number to a string) rather than silently attempting to make sense of them.


## Resources

See my [Python](https://michaelcurrin.github.io/dev-resources/resources/python/) Dev Resources page for more links.

- [Python topic](https://github.com/topics/python) on GitHub.
- Ebooks
    - [Automate the Boring Stuff](https://automatetheboringstuff.com/) ebook - available to view on the website or to buy as a book or Ebook
    - [Python for Informatics](http://www.pythonlearn.com/book_007.pdf) ebook - downloadable as PDF from [pythonlearn.com](https://www.pythonlearn.com).
        - This is a great way to start doing something useful within Python even if you are just a beginner. It takes you from the basics to doing data science tasks with Python, such as reading from a database, posting a tweet or visualizing data. The sections contain info and practical code and they aren't tool detailed or long. Also, you don't have to read it in sequence - you can skip to a later section that interests you if you want to build that thing.
- PEP (Python Enhancement Proposal) documents and other style guides
    - [The Zen of Python](https://www.python.org/dev/peps/pep-0020/)
    - [PEP 8 - Style Guide for Python Code](https://www.python.org/dev/peps/pep-0008/)
    - [PyGuide](https://google.github.io/styleguide/pyguide.html) page by Google on GitHub.
- Cheatsheets
    - [wilfredinni/python-cheatsheet](https://github.com/wilfredinni/python-cheatsheet) on GitHub.
    - [8 Best Python Cheat Sheets for Beginners and Intermediate Learners](https://sinxloud.com/python-cheat-sheet-beginner-advanced/).
- Courses
    - Get certified using Google, edX, Coursera or other courses. [blog post](https://www.thecoderworld.com/how-to-become-a-certified-python-programmer/)
    - Codecademy - [Python course](https://www.codecademy.com/catalog/language/python). This is what got me into Python originally.
    - Udemy - [Python courses](https://www.udemy.com/topic/python/).
    - Udacity - see [courses](https://www.udacity.com/courses/all) then search for _Python_.
    - Coursera - [Python courses](https://www.coursera.org/courses?query=python).
- Blogs
    - [Real Python](https://realpython.com/) blog - I really enjoy this site, which has a few authors writing Python tutorials. Subscribe to their mailing list for regularly updates on a few posts.
    - [Do you speak Python?](https://towardsdatascience.com/do-you-speak-python-5dcfa9bb1fbe) post - examples of using Python basics including classes, lambdas, conditional statements and loops.
    - [Learn to be a developer](https://michaelcurrin.github.io/coding-blog/2020/01/27/learn-to-be-developer.html) post - one of my own blog posts which focuses on Python. Not just what to learn about it, but how. And how to find a motivation.
- Type checking MyPY
    - [Recipes](https://github.com/MichaelCurrin/code-cookbook/tree/master/recipes/python/mypy)
    - [Cheatsheet](https://github.com/MichaelCurrin/dev-cheatsheets/blob/master/cheatsheets/python/type-checks.md)

If you want to setup a Python environment for Data Science work, see my [Python for Data Science](data_science.md) guide.

### Design patterns

- [Python Patterns](https://github.com/faif/python-patterns) - collection on GitHub with a great summary and links to code.
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
    * This is great if you like to switch between programming languages - support is wider than PyCharm for example handling derivatives of JS like CoffeeScript or handling Jekyll. VS Code also handles nesting well such as HTML file contains HTML and inside the HTML is CSS, JS and Liquid templating.
    * It takes effort to get this to work with Python for running code, handling linting and syntax highlighting and so on. For example you have to install a linter in your virtual environment instead of using a global one and you need extensions to handle Python in the first place plus add things like intellisense. So it adds friction for both new and experienced developers. If you are new to Python, consider PyCharm, covered below.
        * Install extensions
            * [Python](https://marketplace.visualstudio.com/items?itemName=ms-python.python) extension - this is currently VS Code's most popular extension overall by number of installs. You can't do much without this. See features below:
                > ... IntelliSense, linting, debugging, code navigation, code formatting, Jupyter notebook support, refactoring, variable explorer, test explorer, snippets
            * [PyLance](https://marketplace.visualstudio.com/items?itemName=ms-python.vscode-pylance) extension - I haven't used this yet but this adds extra help. It claims to "supercharge your Python IntelliSense experience with rich type information".
        * Setup your user-level settings file - this applies to all projects and can be overridden with per-project settings. For example change formatting and linting settings.
        * Setup files in each project.
            - Create workspace-specific settings file in your project as `.vscode/settings.json`. See this template [settings.json](https://github.com/MichaelCurrin/py-project-template/blob/master/.vscode/settings.json) file. Note that this should be done per-project.
            - A dotenv file - use this to add your app folder and virtual environment folder to the `PYTHONPATH` value. Otherwise VS Code will complain that it cannot do imports when it is checking a file. See this template [.env](https://github.com/MichaelCurrin/py-project-template/blob/master/.env) file. Unfortunately, this value does not seem to be possible to set in `settings.json` so you must create a separate `.env` file of just one line.
    * There is only a free version of this. It is open source and by MicroSoft.
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

Follow steps 1 and 2 on this [gist](https://gist.github.com/MichaelCurrin/3a4d14ba1763b4d6a1884f56a01412b7) to install Python using your preferred package manager for your OS. e.g. Homebrew or APT.

#### Download source

If you package manager does not support the latest version, you can dowload the source and install it manually.

- [Download Python](https://www.python.org/downloads/) from _python.org_.


### Install addition Python versions

For managing multiple versions of Python which are all installed but don't conflict, I recommend **PyEnv**.

_Not to be confused with **pyvenv** which shows a deprecated message when used in PY3_.

**macOS Catalina note**

- You are now unable to make changes to the system Python 2 (in order to use `pip` or `virtualenv`).
- And `python@2` is no longer available in `brew`.
- So PyEnv is a good solution to install a custom Python 2 for your user.

#### Links

- [pyenv/pyenv](https://github.com/pyenv/pyenv) repo on GitHub.
- [pyenv/pyenv-installer](https://github.com/pyenv/pyenv-installer) repo on GitHub.
- [Intro to pyenv](https://realpython.com/intro-to-pyenv/) tutorial on RealPython.


#### Install PyEnv

Install dev dependencies and then `pyenv` using this guide:

- [Installing pyenv](https://realpython.com/intro-to-pyenv/#installing-pyenv) section of Intro to PyEnv guide on RealPython.

Or use the `pyenv-installer` repo linked above.


#### List available versions

View available PY versions to install.

Unfiltered (very long list).

```sh
$ pyenv install --list
```

Filter to Python 3 only (note the leading space):

```sh
$ pyenv install --list | grep ' 3'
```

### Python 3

Example usage for installing a custom version of Python 3:

- Install Python version `3.8-dev`. This must be done before any of the commands below.
    ```sh
    $ pyenv install 3.8-dev
    ```
- Use the installed Python version.
    ```sh
    $ $(pyenv root)/versions/3.8-dev/bin/python
    ```
- Create a virtual environment for that Python version.
    ```sh
    $ $(pyenv root)/versions/3.8-dev/bin/python -m venv <NEW_ENV_NAME>

    $ source <NEW_ENV_NAME>/bin/activate
    $ python -V
    3.8.dev
    ```

### Python 2

Only if you _really_ need to use thid, since Python 2 was deprecated on 1 Jan 2020 (after it was first sort-of deprecated in 2015).

Example usage for installing a custom version of Python 2:

- Install Python version `2.7.15`. This must be done before any of the commands below.
    ```sh
    $ pyenv install -v 2.7.15

    $ # On macOS Catalina, set flag as per https://github.com/pyenv/pyenv/wiki/common-build-problems
    $ CFLAGS="-I$(xcrun --show-sdk-path)/usr/include" pyenv install -v 2.7.15
    ```
- List installed versions (this initially started with system only):
    ```sh
    $ pyenv versions
      system
    * 2.7.15 (set by /Users/my-user/.python-version)
    ```
- Run target Python version.
    ```sh
    $ $(pyenv root)/versions/2.7.15/bin/python --version
    Python 2.7.15
    ```
    ```sh
    $ $(pyenv root)/versions/2.7.15/bin/python
    >>> print 'Hello, world!'
    Hello, world!
    ```
- Run pip for target Python version (`pip` comes with newer versions of PY2 and PY3).
    ```sh
    $ $(pyenv root)/versions/2.7.15/bin/pip list
    ...
    ```
- Create a virtual environment using he target Python version. Normally you would pass a version with the `--python <PYTHON>` flag, but this works fine below.
    ```sh
    $ $(pyenv root)/versions/2.7.15/bin/python -m virtualenv <NEW_ENV_NAME>
    ```
    ```sh
    $ source <NEW_ENV_NAME>/bin/activate
    $ python --version
    2.7.15
    ```
- Create an alias for `virtualenv`.
    - An optional step.
    - If you cannot install `virtualenv` globally in system Python 2, then you can create an alias for using your custom PY2 verion's virtualenv. Add the alias to `~/.aliases` or a Bash/ZSH config file then reload the shell.
    - Example:
        ```sh
        $ alias virtualenv='~/.pyenv/versions/2.7.15/bin/python -m virtualenv'
        ```
    - Usage:
        ```sh
        $ virtualenv <NEW_ENV_NAME>
        $ source <NEW_ENV_NAME>/bin/activate
        ```

### Install pip

The Python package manager - from the recursive abbreviation "Pip install packages".

You probably **do not need** to install `pip` as it comes with newer PY2 and PY3 versions. But in case you need to:

```sh
$ cd ~/Downloads
$ curl https://bootstrap.pypa.io/get-pip.py -o get-pip.py
$ python get-pip.py
```
