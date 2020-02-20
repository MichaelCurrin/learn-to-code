# Data Science
> Python datas science guide focused on using Anaconda and conda for managing Python versions and libraries

## Anaconda

### What is Anaconda?

Anaconda is a platform which makes it easy to setup an environment for running Python (and other languages like R).

It includes things to save you install them, such as:

- Open source Python libraries
- Programs like Jupyter Notebooks / iPython Notebooks and Spyder
- `conda` command-line tool 

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

$ conda activate snowflakes
(snowflakes) $
(snowflakes) $ conda info --envs
conda environments:

    base           /home/username/Anaconda3
    snowflakes   * /home/username/Anaconda3/envs/snowflakes

$ conda activate
$
```

#### Manage Python

```sh
$ conda create --name snakes python=3.5

$ conda activate snakes
(snakes) $

(snakes) $  conda info --envs
...

(snakes) $ python --version
...

(snakes) $ conda activate
$
```

#### Managing packages

Install a Python package/library with a virtual environment. 

```sh
$ conda search beautifulsoup4
```

```sh
$ conda install beautifulsoup4
```

```sh
$ conda list
```
