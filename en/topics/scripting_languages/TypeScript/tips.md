# Tips

Based on this article:

- [Let’s Talk About TypeScript’s Learning Curve](https://itnext.io/lets-talk-about-typescript-s-learning-curve-230d6f7eb328)

- Remember why you're doing it
    - TypeScript makes development slower by having to specify types, but it makes it safer. And that safety means when the codebase is large, you can find issues quickly and move confidently.
- Use strict mode
    - This forces you to always use types .
    - See [How strict is Typescript's strict mode?](https://dev.to/briwa/how-strict-is-typescript-s-strict-mode-311a)
- Use the 'any' keyword responsibly
    - Use it in development when you are experimenting but then get rid of it as soon as you can.
- TS config values
    - The ES module value below means you can use default imports like `import abc from 'abc'` instead of `import * as abc from 'abc'`.
    - The last two options below allow use of JSON files.
    - Sample `.tsconfig`
        ```json
        {
          "compilerOptions": {
            "esModuleInterop": true,
            "moduleResolution": "node",
            "resolveJsonModule": true
          }
        }
        ```
        
