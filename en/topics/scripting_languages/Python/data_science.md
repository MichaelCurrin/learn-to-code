# Python for Data Scientists

If you want to use Python for Data Science projects, I recommend installing [Anaconda](#anaconda) and/or [Conda](#conda), covered below. These are popular tools for setting up environments with specific Python versions and packages and then running the code. In particular, the programs that come with Anaconda help with development, debugging and viewing in the output of the code close to the code.

You can also ignore the Spyder and Anaconda parts of this guide. Using VS Code or Pycharm as an IDE and pip to manage your virtual environments is perfectly fine for Python data science projects. Either way, you're likely to come across [Jupyter](#jupyter) notebooks, which are a great way to develop and show work, regardless of the IDE and env manager used.

## Libraries

Python libraries commonly used for data science. A lot of these are very popular and come up often in tutorials. They are often optimized for performance (often with C code written to fine tune them).

- Data processing
	- Numpy
		- For working with arrays and similar data structures.
	- Pandas
		- Particularly used for its dataframes, which actually come from the [R](topics/scripting_languages/R) language.
		- Built on Numpy.
		- Used for reading or writing a tabular source like a CSV. It can also read from a database.
		- Used for performing tasks file sorting, filtering or searching a table or a vector. These would be tedious and less performant if done without use of the library.
- Machine Learning:
	- Sci-kit learn
	- TensorFlow
	- Keras
- Dataviz:
	- NetworkX
	- Bokeh
	- Matplotlib


## IPython

- [ipython.org](https://ipython.org/) homepage.
- Python for interactive computing.
- It includes features like tab autocomplete, doc previews, inline graphs and extended help.

### Install
Install IPython globally for a particular version of Python. Or install it in a virtual environment.

See the [install](https://ipython.org/install.html) guide on official docs.

Check your version and installed location. For example:

```sh
$ ipython -V
7.5.0
$ which ipython
/usr/local/bin/ipython
```

## Usage

Start IPython.

```bash
$ ipython
Python 3.7.6 (default, Dec 30 2019, 19:38:26)
Type 'copyright', 'credits' or 'license' for more information
IPython 7.5.0 -- An enhanced Interactive Python. Type '?' for help.
```

```
In [1]: print('Hello from IPython')
Hello from IPython
```

Get help on an object using the object name and a single <kbd>?</kbd> or double <kbd>??</kbd> for more detail in certain cases.

```
In [2]: print?
Docstring:
print(value, ..., sep=' ', end='\n', file=sys.stdout, flush=False)

Prints the values to a stream, or to sys.stdout by default.
Optional keyword arguments:
file:  a file-like object (stream); defaults to the current sys.stdout.
sep:   string inserted between values, default a space.
end:   string appended after the last value, default a newline.
flush: whether to forcibly flush the stream.
Type:      builtin_function_or_method
```

Press <kbd>?</kbd> and enter to view IPython help.

```
In []: ?

IPython -- An enhanced Interactive Python
=========================================

IPython offers a fully compatible replacement for the standard Python
interpreter, with convenient shell features, special commands, command
history mechanism and output results caching.

At your system command line, type 'ipython -h' to see the command line
options available. This document only describes interactive features.

GETTING HELP
------------
...
```

## Jupyter

- [jupyter.org](https://jupyter.org/)
    > Project Jupyter exists to develop open-source software, open-standards, and services for interactive computing across dozens of programming languages.
- Run Jupyter notebooks.
    - These include markdown, code and output (text and inline graphs and tables) and so are ideal for iterating on code and presenting results.
    - Previously known as iPython notebooks but now they run more than just iPython. They run Julia, Python and R (hence the name) plus Bash.
- How it works:
    - Jupyter runs a Jupyter server with a Python kernel in a specific environment (such as one for your project) - this works locally.
    - Run and edit the notebook in the browser.
    - The result can be saved as as `.ipnb` file, so when you start up again you keep the code and output. The notebook file can also be viewed as non-interactive HTML format in an IDE (such as Pycharm) or on Github, making it easy to share your output without needing Python setup to view the notebook.
- Use with IDEs
    - Pycharm - see the [Jupyter notebook support](https://www.jetbrains.com/help/pycharm/jupyter-notebook-support.html) doc.
    - VS Code - see the [Jupyter support](https://code.visualstudio.com/docs/python/jupyter-support) doc.

## Spyder

- [spyder-ide.org](https://www.spyder-ide.org/)
    > Spyder is a powerful scientific environment written in Python, for Python, and designed by and for scientists, engineers and data analysts.
- IDE for running and debugging code interactively and presenting results.
- Spyder includes an [IPython](#ipython) console which renders output similar to [Jupyter](#jupyter)

Spyder can be installed using [Anaconda](#anaconda), covered below. Spyder can also be installed alone, either globally or inside a virtual environment.

### Spyder and virtual environments

Note that each new virtual environment you create with `conda` will not have Spyder installed. So when you switch to an environment in the terminal or Ananconda Navigator, you'll find Spyder missing. So to solve this, follow steps below to install Spyder in each new environment.

```sh
$ conda activate env_name
$ conda install spyder
$ spyder
```

Alternatively, you can update the environment config in Spyder. Update the paths where libraries are loaded to include a virtual environment. This is not ideal if you have many virtual environments and it will keep looking through each and find the first matched library. And this approach might not work with conda envs. But it does work on pip envs while the conda env is set to the base.

## Anaconda

### What is Anaconda?

Anaconda is a platform which makes it easy to setup an environment for running Python (and other languages like R).

It includes things to save you time:

- Anaconda Navigator
    - A GUI for installing and managing programs and environment, to let you to what you need without using the terminal.
    - [docs](https://docs.anaconda.com/anaconda/navigator/)
        > Anaconda Navigator is a desktop graphical user interface (GUI) included in Anaconda® distribution that allows you to launch applications and easily manage conda packages, environments, and channels without using command-line commands
- Open source Python libraries in base environment
- One-click installs of managed programs, including:
    - [Jupyter](#jupyter)
    - [Spyder](#spyder) IDE
    - VS Code (Visual Studio Code) IDE.
- Virtual environments
    - Manage through the Anaconda Navigator GUI, or
    - Use Conda in the shell.
        - Command-line tool for managing Python libraries inside virtual environments.
        - [docs.conda.io](https://docs.conda.io/en/latest/)
            > Package, dependency and environment management for any language—Python, R, Ruby, Lua, Scala, Java, JavaScript, C/ C++, FORTRAN, and more.

There is an enterprise version and a free version known as "Anaconda Distribution".

> Anaconda Distribution is a free, easy-to-install package manager, environment manager, and Python distribution with a collection of 1,500+ open source packages with free community support. Anaconda is platform-agnostic, so you can use it whether you are on Windows, macOS, or Linux. [source](https://docs.anaconda.com)

### Install

How to install Anaconda Distribution

- [Installation](https://docs.anaconda.com/anaconda/install/) doc


## Conda

Conda is for managing virtual environments. You can install it alone, without Anaconda.

Conda is similar to `pip`. Conda references its own index packages of mostly Data Science packages, while pip references PyPI.

_Note: I found it frustrating when trying install things with Conda that are missing but available on `pip`, so that's one reason I prefer `pip`, but there might be ways around this._

### Installation

- [Installation](https://docs.conda.io/projects/conda/en/latest/user-guide/install/index.html) instructions in the User guide doc.

### Usage

- [User guide](https://docs.conda.io/projects/conda/en/latest/user-guide/index.html) doc.

Below are some highlights from the [Getting Started](https://docs.conda.io/projects/conda/en/latest/user-guide/getting-started.html) page. Note, only the macOS / Linux instructions are covered below - the Windows instructions are slightly different.

#### Check installed version

```sh
$ conda --version
```

```sh
$ conda update conda
```

#### Why virtual environments?

A virtual environment is a disposable sandboxed location to install libraries, usually for a specific project. This means that you can recreate the same environment (set of Python libraries with locked version) on other machines, whether on your other laptop, a colleagues machine or production server.

This also avoids conflicts. For example, say you have two projects (Python applications) both use the base conda environment. The one needs `requests` version `2.0.0` and the other needs `3.0.0`. But you can only have one version of `requests` installed in an environment. So one of the projects will not work. So you can create two virtual environments - one with `2.0.0` and one with `3.0.0`. You change libraries in a virtual environment and only affect that one project.

#### Manage virtual environments

He we create a virtual environment with a given name and optional list of libaries to install, then activate it, check what is installed and then activate the base.

```sh
$ conda create --name snowflakes biopython
```

```sh
$ conda activate snowflakes
(snowflakes) $
(snowflakes) $ conda info --envs
conda environments:

    base           /home/username/Anaconda3
    snowflakes   * /home/username/Anaconda3/envs/snowflakes
```

Deactivate

```sh
$ conda activate
$
```

#### Manage Python

Optionall specify a version of Python to use:

```sh
$ conda create --name snakes python=3.5
```

```sh
$ conda activate snakes
(snakes) $

(snakes) $ conda info --envs
...

(snakes) $ python --version
...
```

Deactivate

```sh
(snakes) $ conda activate
$
```

#### Managing packages

Install a Python package/library with a virtual environment.

Optionally check for packages with a similar name and available versions in the libraries repository.

```sh
$ conda search beautifulsoup4
```

Install a package, using optional version. See [conda install](https://docs.conda.io/projects/conda/en/latest/commands/install.html) docs.

```sh
$ conda install beautifulsoup4

$ conda install bitarray=0.8
```

Show installed packages.

```sh
$ conda list
```
