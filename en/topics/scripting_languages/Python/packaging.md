# Python packaging guide


- [packaging.python.org/](https://packaging.python.org/)
    - [Tutorials](https://packaging.python.org/tutorials/)
    - [Guides](https://packaging.python.org/guides/)


## How to package your project

Make your project installable using `pip`. Through a downloaded directory, zip file, PyPI name or GitHub URL.

Links:

- [How to Publish Your Own Python Package to PyPI](https://realpython.com/courses/how-to-publish-your-own-python-package-pypi/) guide on RealPython.com site.
- [Packaging Python Projects](https://packaging.python.org/tutorials/packaging-projects/) tutorial on [packaging.python.org/](https://packaging.python.org/).



## Data directory

Use a directory like this.

```
~/.my-app/
```

There is a library which can handle this for you and appropriate for OS.

See also `~/.local/` and `~/.config/`.

And put your configs, database and logs in there. Those can be used by the app and either accessed directly by a user (through IDE or file viewer) or if you add an interface layer to your application.

That directory setup can be created automatically on installation.

But persist it on uninstall - this means that you can upgrade the package or reinstall it and the app data will remain.
