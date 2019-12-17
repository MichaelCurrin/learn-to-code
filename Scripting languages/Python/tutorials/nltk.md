# NLTK

See [Natural Language Toolkit](http://www.nltk.org/) official site.

There is a Python package for natural language processing called `nltk`. It can be used for stopwords, splitting words or sentences and access large bodies of text (corpora), such as those of Shakespeare.

## Install nltk

```
$ pip install nltk
```

## Install resources

It doesn't work well straight out the box though. The imports might work but you will get errors when executing them.

```
$ python
>>> from nltk import word_tokenize
>>> from nltk.corpus import stopwords
>>> print stopwords.words('english')
LookupError:
**********************************************************************
  Resource u'corpora/stopwords' not found.  Please use the NLTK
  Downloader to obtain the resource:  >>> nltk.download()
  Searched in:
    - '/home/myUser/nltk_data'
    - '/usr/share/nltk_data'
    - '/usr/local/share/nltk_data'
    - '/usr/lib/nltk_data'
    - '/usr/local/lib/nltk_data'

>>> print word_tokenize('My sentence.')
LookupError:
**********************************************************************
  Resource u'tokenizers/punkt/english.pickle' not found.
```

Install the resources you need - the default location is `~/nltk_data`, at least on Linux when in a virtualenv. Note that the directory exists at the user level outside of a virtualenv, which means all new and existing virtualenvs with `nltk` package installed and using default data directory should be able to access the resources you intall now.

See the configuration section in this doc if you want to customise the resource locations.


Follow the prompts to see the list of available resources. And use the downloader to install them by name. 

```
$ python -m nltk.downloader
NLTK Downloader
---------------------------------------------------------------------------
    d) Download   l) List    u) Update   c) Config   h) Help   q) Quit
---------------------------------------------------------------------------
Downloader>
```

Or, you can do this instead.

```
$ python
>>> import nltk
>>> nltk.downloader()
```

## Use the resources

After dowloading resource `stopwords` for`nltk.corpous.stopwords()` and `punkt` for `nltk.word_tokenize()`, you can use those functions without a lookup error.

Further reading on implementation of stopwords and tokenization.
- https://stackoverflow.com/questions/17390326/getting-rid-of-stop-words-and-document-tokenization-using-nltk
- https://stackoverflow.com/questions/19130512/stopword-removal-with-nltk
- https://stackoverflow.com/questions/10464265/effects-of-stemming-on-the-term-frequency

## Configuration

Note that even if nltk is installed in your virtualenv, I found that the additional resources were installed in `~/nltk_data/` directory.

This can be changed by specifying a directory (based on instructions from [Installing NLTK Data](http://www.nltk.org/data.html) page).

```
$ # Download all resources, equivalent to using 'all' in the interactive downloader.
$ python -m nltk.downloader all

$ # Central installation, with custom directory specified.
$ sudo python -m nltk.downloader -d /usr/local/share/nltk_data all
```

Alternatively, use interactive downloader and use the prompts to get to configuration and setting a new data directory.

Check the paths where data can be read from and the path to your installed nltk package. 
```
>>> import nltk
>>> nltk.data.path
['/home/myUser/nltk_data', '/usr/share/nltk_data', '/usr/local/share/nltk_data', '/usr/lib/nltk_data', '/usr/local/lib/nltk_data']
>>> nltk.__path__
['/home/myUser/.local/virtualenvs/myVirtual/local/lib/python2.7/site-packages/nltk']
>>>
```
