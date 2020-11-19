# Administering a repo

## Releases

- [About releases](https://help.github.com/en/github/administering-a-repository/about-releases) on GitHub docs.
- [Git tag basics](https://git-scm.com/book/en/v2/Git-Basics-Tagging)

A release is a way of bundling a snapshot of your software and packaging and distributing it for other people to use.

From the docs:

> You can create a release to package software, along with release notes and links to binary files, for other people to use.
>
> Releases are deployable software iterations you can package and make available for a wider audience to download and use.
>
> Releases are based on _Git tags_, which mark a specific point in your repository's history. A tag date may be different than a release date since they can be created at different times. ...

## Renaming

- [Rename a repo](https://help.github.com/en/github/administering-a-repository/renaming-a-repository) doc

When a renaming a repo, the following will be maintained:

- Wiki
- Issues
- Stars
- Followers

Using the _old_ repo name will redirect to the new one (unless you actually create a new repo which fills the space of the old name). Any forks will continue to point to the old repo name.

GitHub docs recommending updating any local repo's remote URLs to point to the new URL.
