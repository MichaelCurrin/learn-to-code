# Deno

- Name: Deno
- Homepage: https://deno.land/
- Install: https://deno.land/#installation
   ```sh
   $ curl -fsSL https://deno.land/x/install/install.sh | sh
   ```
- Getting started: https://deno.land/#getting-started
- Tagline:
    > A secure runtime for JavaScript and TypeScript.
- Description: Note this is not new programming language. It is a modern and more secure way of distributing and running Node apps - without a package file in development (packages are inferred from imports). "Deno is a simple, modern and secure runtime for JavaScript and TypeScript that uses V8 and is built in Rust." Version [1.0](https://deno.land/v1) was released in 2020. It is a runtime environment for running JavaScript and TypeScript and Deno can be downloaded as a single binary executable using curl or your OS package manager. I can recommend this 15 min intro video. https://youtu.be/zFf_fcn0cI0
- 100 second intro https://youtu.be/F0G9lZ7gecE

Pros:

- Faster than node
- Uses URL-based imports to mirror how the browser loads URLs, rather than nested node_modules
- Includes a webpack bundling step
- Supports Typescript out the box


See my [Deno cheatsheet](https://michaelcurrin.github.io/dev-cheatsheets/cheatsheets/javascript/deno/).

Deno has its own registry.

- https://deno.land/x

Not all the packages on NPM's registry are available on Deno's registry.

For example, React is not there. But you can use an approach which is not tied to a runtime.

You can load a script from [JSPM](https://jspm.org/), which provides a few line so you can import the packages you need from say NPM.

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
