# Deno

- Name: Deno
- Homepage: https://deno.land/
- Install: https://deno.land/#installation
    - Linux
        ```sh
        $ curl -fsSL https://deno.land/x/install/install.sh | sh
        ```
    - macOS
        ```sh
        $ brew install deno
        ```
- Getting started: https://deno.land/#getting-started
- Tagline:
    > A secure runtime for JavaScript and TypeScript.
- Description: Deno is a JS runtime to replace Node. It is a modern and more secure way of distributing and running JavaScript apps - without a package file in development (packages are inferred from imports). "Deno is a simple, modern and secure runtime for JavaScript and TypeScript that uses V8 and is built in Rust." Version [1.0](https://deno.land/v1) was released in 2020. It is a runtime environment for running JavaScript and TypeScript and Deno can be downloaded as a single binary executable using curl or your OS package manager. I can recommend this 15 min intro video. https://youtu.be/zFf_fcn0cI0
- 100 second intro: https://youtu.be/F0G9lZ7gecE
- Deno was originally written in Go and then in Rust. 
- Deno's CLI commands and approach to installing modules is much like Go. The Deno docs make reference to how the Deno standard lib matches the Go standard lib. This all makes sense given the Go origin. 


## Resources

See my [Deno cheatsheet](https://michaelcurrin.github.io/dev-cheatsheets/cheatsheets/javascript/deno/).

See my [Deno Project Template](https://github.com/MichaelCurrin/deno-project-template). This gives you an idea of the structure of a minimal application. The docs and the `Makefile` shows how to perform command tasks using Deno CLI.


## Pros

- Aims to replace Node and solve some of its problems.
- Faster than Node (some sources say 25% faster, some say it is slower at 2/3 the speed).
- Supports modern ES6 module.
- Uses URL-based imports to mirror how the browser loads URLs, rather than nested NPM packages.
- Secure by design (unlike NPM) - when installing and running, Deno only runs with the permissions you give it.
- Fewer packages and decisions are needed - it supports Typescript, testing, bundling and linting already.
- Install Deno as a single binary.
- You can compile your project to a single JS (to be run with Deno) or a single binary executable (Deno v1.6+).


## Packages

### Denoland

Deno has its own packages registry.

- https://deno.land/x

Not all the packages on NPM's registry are available on Deno's registry.

For example, React is not there. But you can use an approach below which is not tied to a runtime.

### JSPM

You can load a script from [JSPM](https://jspm.org/), which provides a few lines so you can import the packages you need from say NPM.

> jspm provides a module CDN allowing any package from npm to be directly loaded
in the browser and other JS environments as a fully optimized native JavaScript module.

e.g. I learnt this in a tutorial on Deno.

```javascript
import React from "https://dev.jspm.io/react";
```

If you go to that URL [dev.jspm.io/react](https://dev.jspm.io/react), you'll see a few lines of JS content. Which is suitable for Deno or running on an HTML page (see the instructions on the JSPM site).

When I visited that URL, the content of that requested file was:

```javascript
import { dew } from "/npm:react@17.0.1/index.dew.js";
export default dew();
import "/npm:react@17.0.1/cjs/react.development.dew.js";
import "/npm:object-assign@4?dew";
```

So you can use any NPM registry package in Deno if it supported on JSPM. Without using the `npm` command. Also, this more secure, as when Deno installs the package is only uses the access you give it. While an NPM package with a post-install script command might be doing something system wide that is insecure or even malicious and the permissions are not restricted.

### Skypack

An alternative to JSPM.

- [skypack.dev](https://www.skypack.dev/)

> Skypack is the world’s first CDN designed and optimized for modern JavaScript applications. To use it, just use a Skypack URL whenever you want to load a package:

```javascript
import React from 'https://cdn.skypack.dev/react';
```

Specifically for Deno, use `?dts` in the URL.

e.g.

```typescript
import confetti from "https://cdn.skypack.dev/confetti?dts"
```
