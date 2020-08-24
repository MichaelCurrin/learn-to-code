# GitHub Packages

See [About GitHub Packages](https://help.github.com/en/packages/publishing-and-managing-packages/about-github-packages) article on GH docs.

See links in the docs sidebar for publishing, viewing and installing a package. Some content is covered below on this page.

> A package is a self-contained and reusable piece of software that includes code and metadata, such as current version number, name, and the package's dependencies, that a developer bundles together in a common place for others to use. 
>
> Packages simplify using and distributing solutions to common problems such as needing a common framework for developing a project, testing runners and linters to improve code quality, or introducing industry-standard machine learning tools to power your application.


## Supported package types

Package types of interest to me:

- Ruby - `Gemfile`
- JavaScript - `package.json`
- Docker - `Dockerfile`

I've not covered Java and Dotnet.

See the full list here:

- [Supported clients and formats](https://docs.github.com/en/packages/publishing-and-managing-packages/about-github-packages#supported-clients-and-formats)

## How to publish packages

See sections below with content copied from the "Packages" tab on my GH profile. 

Here is overarching doc page for the links below:

- [Using GitHub Packages with your project's ecosystem](https://docs.github.com/en/packages/using-github-packages-with-your-projects-ecosystem)

### NPM packages

Note that `npm` already supports installing a GH JS repo using the username and repo name (I don't think you even have to reference GitHub.com). But adding to the GH JS registry is more formal and means the package can be installed easier (although one has to reference the GH registry). The docs cover this.

[Configuring npm for use with GitHub Packages](https://docs.github.com/en/packages/using-github-packages-with-your-projects-ecosystem/configuring-npm-for-use-with-github-packages)

```sh
# Step 1: Use `publishConfig` option in your package.json
"publishConfig": { "registry": "https://npm.pkg.github.com/" }

# Step 2: Authenticate
$ npm login --registry=https://npm.pkg.github.com/

# Step 3: Publish
$ npm publish 
```


### RubyGems

[Configuring RubyGems for use with GitHub Packages](https://docs.github.com/en/packages/using-github-packages-with-your-projects-ecosystem/configuring-rubygems-for-use-with-github-packages)

```sh
# Step 1: Authenticate
$ echo ":github: Bearer GH_TOKEN" >> ~/.gem/credentials

# Step 2: Build
$ gem build repository-name.gemspec

# Step 3: Publish
$ gem push --key github --host https://rubygems.pkg.github.com/MichaelCurrin repository-name-1.0.0.gem 
```

### Docker packages

[Configuring Docker for use with GitHub Packages](https://docs.github.com/en/packages/using-github-packages-with-your-projects-ecosystem/configuring-docker-for-use-with-github-packages)

```sh
# Step 1: Authenticate
$ cat ~/GH_TOKEN.txt | docker login docker.pkg.github.com -u MichaelCurrin --password-stdin

# Step 2: Tag
$ docker tag IMAGE_ID docker.pkg.github.com/michaelcurrin/repository-name/IMAGE_NAME:VERSION

# Step 3: Publish
$ docker push docker.pkg.github.com/michaelcurrin/repository-name/IMAGE_NAME:VERSION
```
