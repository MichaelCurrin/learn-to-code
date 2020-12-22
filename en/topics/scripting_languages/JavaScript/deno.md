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
