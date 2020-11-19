# Pandas

See [Pandas cheatsheet](https://github.com/MichaelCurrin/cheatsheets/blob/master/cheatsheets/python_libraries/pandas.md).


## Resources

- [pandas.pydata.org](https://pandas.pydata.org/) official site.
	- [Getting Started](https://pandas.pydata.org/docs/getting_started/index.html)
	- [Docs](https://pandas.pydata.org/docs/)
		- [API reference](https://pandas.pydata.org/docs/reference/index.html)
- [pandas-dev/pandas](https://github.com/pandas-dev/pandas) on GitHub.
- [Pandas 0.25](https://devdocs.io/pandas~0.25/) on DevDocs
- Tutorials
	- [Pandas cookbook](https://pandas.pydata.org/pandas-docs/stable/cookbook.html#)
	- [10 minutes to Pandas](https://pandas.pydata.org/pandas-docs/stable/getting_started/10min.html) on official site.
	- [Pandas basics](https://www.learnpython.org/en/Pandas_Basics)
	- [Introduction to Pandas](http://pythonforengineers.com/introduction-to-pandas/)
	- [Pandas](https://www.w3resource.com/pandas/index.php) on W3 Resource.
	- [An Introduction to Pandas in Python](https://towardsdatascience.com/an-introduction-to-pandas-in-python-b06d2dd51aba)
	- [Pandas](https://www.codecademy.com/learn/data-processing-pandas/modules/dspath-intro-pandas) pro course on Codecademy.
	- [Python Pandas Tutorial: A Complete Introduction for Beginners](https://www.learndatasci.com/tutorials/python-pandas-tutorial-complete-introduction-for-beginners/)
	- CSV and dataframes
		- [Import CSV with Pandas](https://chrisalbon.com/python/data_wrangling/pandas_dataframe_importing_csv/)
		- [Converting strings to floats in a dataframe](https://stackoverflow.com/questions/16729483/converting-strings-to-floats-in-a-dataframe)


## HTML

Notes on reading HTML.

[HTML](https://pandas.pydata.org/docs/user_guide/io.html#html) section.

> We highly encourage you to read the HTML Table Parsing gotchas below regarding the issues surrounding the BeautifulSoup4/html5lib/lxml parsers.

> The top-level read_html() function can accept an HTML string/file/URL and will parse HTML tables into list of pandas DataFrames. Let’s look at a few examples.
>
> read_html returns a list of DataFrame objects, even if there is only a single table contained in the HTML content.

[Gotchas](https://pandas.pydata.org/docs/user_guide/io.html#io-html-gotchas) on the IO page.

That compares the following HTML parsing libraries:

- [lxml](https://lxml.de/) on its own as as a backend for BeautifulSoup.
- [html5lib](https://github.com/html5lib/html5lib-python) as a backend for BeautifulSoup.
- [BeautifulSoup](https://www.crummy.com/software/BeautifulSoup)
