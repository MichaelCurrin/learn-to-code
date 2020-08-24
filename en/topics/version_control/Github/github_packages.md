# GitHub Packages

[About GitHub Packages](https://help.github.com/en/packages/publishing-and-managing-packages/about-github-packages) article on GH docs.

> A package is a self-contained and reusable piece of software that includes code and metadata, such as current version number, name, and the package's dependencies, that a developer bundles together in a common place for others to use. Packages simplify using and distributing solutions to common problems such as needing a common framework for developing a project, testing runners and linters to improve code quality, or introducing industry-standard machine learning tools to power your application.

See links in the docs for publishing, viewing and installing a package.

## Supported package types

[Supported clients and formats](https://docs.github.com/en/packages/publishing-and-managing-packages/about-github-packages#supported-clients-and-formats)

Of interest to me:

- Ruby - `Gemfile`
- JavaScript - `package.json`
- Docker - `Dockerfile`

Note that `npm` already supports installing a GH JS repo using the username and repo name (I don't think you even have to reference GitHub.com). But adding to the GH JS registry is more formal and means the package can be installed easier (although one has to reference the GH registry). The docs cover this.

