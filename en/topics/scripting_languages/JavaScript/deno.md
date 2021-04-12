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


## Security

Deno prides itself on being secure. You have to be explicit with permissions. I guess this comes up because of a poor history of NPM packages that have vulnerabilities or were malicious.

Before, you might install an NPM package with `npm i` and have its `postscript` section run some malicious code on your machine. Even worse if installing with `sudo npm i -g`.

### Maintaining packages

An argument against the need for Deno is that the community should be responsible for figuring out security issue like this. Then again, there are a **huge** number of packages on NPM, many not intentionally malicious but just not maintained around functionality or vulnerabilities. And no every package will be verified by a human to see that it is not malicious - so finding trusted and well-known packages helps for security but it reduces the number of packages to use (especially for a newer tool like Deno). Plus, it is work to be constantly updating the packages list of a project regularly - especially hard if a subdependency is vulnernable and there is no clear path to update the parent package which is the direct dependency.

### Other tools

Look at other languages. Go and Rust are similar to Deno (in fact Deno was built on Go and then on Rust). But Go and Rust don't mention security as one of their advantages. It is just expected. Maybe JS, Node and NPM have more of reputation for security issues over the decades so that is why it was brought up here.

### Containers for security

I also saw an argument point that if you want security for your Node app, then put it in a **container**. It adds some overhead to the project, but it does address security concerns well. Putting your Node app in a container limits how much damage a package can do, even when used with `sudo`, because it runs in an isolated scope. If it tries to delete or spy on your files or install something, there's a limited area for it to act inside a container. Of course, if the package is mining crytocurrency, that is still going to happen.

### Installing from anywhere

Another comment I saw was that Deno lets you install from any URL, not just their registry. 

This adds flexibility.

But adds risk. As it is harder for automated scans and the community to verify packages if they are not in the known registry space. Someone might put a package on their website or S3.

Even if you only install from Deno land or GitHub, one of those packages might install from some other external URL.

Though, Python and Ruby let you specify custom registries, so maybe the risk is there too.
