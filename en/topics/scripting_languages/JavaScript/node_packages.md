# Node packages
> How to manage your Node environment and Node packages

Command-line tools covered here:

- [NPM](#npm)
    - Install NodeJS dependencies.
- [Yarn](#yarn)
    - Install NodeJS dependencies the modern way.
- [NVM](#nvm)
    - Manage multiple NodeJS versions.

It is worth knowing how to use both NPM _and_ Yarn. Some projects will have a preferences towards the one, but often they are interchangeable within one project. Yarn has some benefits on top of NPM which makes it worth using.

## NPM

Node comes with the `npm` command.

- NPM home - [npmjs.com](https://npmjs.com/)
- NPM docs home - [/docs.npmjs.com/](https://docs.npmjs.com/)
- Posts
    - [An introduction to the npm package manager](https://flaviocopes.com/npm/) on a blog.

See also my [NPM cheatsheet](https://github.com/MichaelCurrin/cheatsheets/blob/master/cheatsheets/package_managers/npm.md) if you are already familiar with NPM.

### Initialize

Before you can install packages in a project, you need a `package.json` file.

If you don't have one, run this:

```sh
$ npm init
```

### Node modules directory

Running the install command will install node packages in a directory called `node_modules`.

In a project, this is at the project root.

For a global install, this is here on Unix systems:

```
/usr/local/lib/node_modules
```

You can check this with the `root` command.

```
# Project
npm root

# Global
npm root -g
```

### Project install

If install in a project, add that directory to your `.gitignore` file.

Install packages in the current project - if you omit a package name here, then the `package.json` file must exist.

```sh
$ npm install
```

```sh
$ npm install PACKAGE_NAME
```

If you want to `package.json` file to be updated, use the `--save` or `--save-dev` flags.

List installed packages:

```sh
$ npm list --depth=0
```

The depth limits showing subdepedencies and so makes the output shorter.

### Global install

Install a package globally, so that is available from any directory. Note that if you run a project on another machine, then that package might not be available, so typically on a few packages should be installed globally.

```sdh
$ npm install -g PACKAGE
```

View globally installed packages.

```sh
$ npm list
```

That is very verbose, so try this, based on [post](https://medium.com/@alberto.schiabel/npm-tricks-part-1-get-list-of-globally-installed-packages-39a240347ef0)

```sh
$ npm list -g --depth 0
├── bower@1.8.8
├── bower-away@1.1.2
├── docsify-cli@4.4.0
├── grunt-cli@1.3.2
├── http-server@0.11.1
├── npm@6.9.0
└── npx@10.2.0
```

## Yarn

### Features

- Can install packages from the local cache.
- Strongly binds package versions.
- Parallel packages installation.
- Active user community.

### How to use it

Yarn is built on NPM so mostly you can treat it the same.

- Requires `yarn` command to be installed globally or in your project, using NPM.
- It uses the same `package.json` as NPM.
- Uses `yarn.lock` instead of `package.lock.json`.
- Familiar NPM commands like `install` and `start` still work.


### Resources

- [yarnpkg.com](https://yarnpkg.com)
    > Safe, stable, reproducible projects
    >
    > Yarn is a package manager that doubles down as project manager. Whether you work on one-shot projects or large monorepos, as a hobbyist or an enterprise user, we've got you covered.
- [Install Yarn](https://classic.yarnpkg.com/en/docs/install)
- Tutorials
    - [Why and how to migrate from NPM to YARN](https://waverleysoftware.com/blog/yarn-vs-npm/)


## NVM

If you want to install multiple versions of Node and NPM on your machine, consider using NVM. 

This does not replace `npm` but allows you to switch between versions of `npm`. Some projects may not work with an older or newer version of `node` or `npm`.

You can switch between Node versions easily and you can install packages in a specific NPM environment.

If you run `npm install PACKAGE` with a certain version, packages will go here for example (on Unix systems).

```
~/.nvm/versions/node/v8.9.0/lib/node_modules
```

### Setup

Follow the instructions here:

- [nvm-sh/nvm](https://github.com/nvm-sh/nvm) Github repo
- [NVM, the Easiest Way to Switch Node.js Environments on Your Machine in a Flas](https://itnext.io/nvm-the-easiest-way-to-switch-node-js-environments-on-your-machine-in-a-flash-17babb7d5f1b?gi=74712a4b1ad)

Note you will have to install `nvm` command and also update your shell RC file to ensure it is picked up.

### Usage

After setup, you can use it to install and switch to a target Node version (and associated NPM version).

For example, here I install a new version of Node, without specifying the full version.

```sh
$ nvm install 13
Downloading and installing node v13.11.0...
...
$ nvm use 13
```

View available versions:

```
        v6.11.2
         v8.0.0
        v8.15.0
        v10.0.0
       v10.15.0
        v11.0.0
        v12.1.0
->     v13.11.0
         system
 ```   

You can switch between version in the terminal and set a global default.

