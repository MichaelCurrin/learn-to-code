
## Vue

A progressive framework for building user interfaces. It used for developing Single Page Applications (SPA).

> Unlike other monolithic frameworks, Vue is designed from the ground up to be incrementally adoptable.

### What is Vue?

Vue is a JavaScript framework for building web interfaces. If you've heard of React - Vue is similar to React, but Vue is newer, more popular (in GH stars) and easier to learn.

This project provides a quickstart Vue app, which doesn't do much but sets up the skeleton so you can create a Vue app. See for example the minimal [src/App.vue](/src/App.vue) script which includes an HTML template, JavaScript code and CSS code.

See the links at the top - view the live demo and then create your own repo from the template.

Or follow the [Create a fresh quickstart](#create-a-fresh-quickstart) section to create a new Vue app from scratch, using the Vue CLI.

If you are looking for a multi-page Vue app template, see this repo - [MichaelCurrin/vue-router-quickstart](https://github.com/MichaelCurrin/vue-router-quickstart).


### Resources

- Vue homepage - [vuejs.org](https://vuejs.org)
- Official site [vuejs.org](https://vuejs.org)
	- [Installation](https://vuejs.org/v2/guide/installation.html)
	- [Introduction](https://vuejs.org/v2/guide/index.html)
	- [Examples](https://vuejs.org/v2/examples/)
- [GitHub repo](https://github.com/vuejs/vue)
- Videos
    - _Vue.js: The Documentary_
        - [Trailer](https://www.youtube.com/watch?v=2EmYw-O-WLI)
        - [Full](https://www.youtube.com/watch?v=OrxmtDw4pVI)
- Courses
    - [Egghead](https://egghead.io/)
        - [Vue](https://egghead.io/browse/frameworks/vue) courses.
    - [Frontend Masters](https://frontendmasters.com)
        - [Vue path](https://frontendmasters.com/learn/vue/).
    - [Pluralsight](https://app.pluralsight.com/)
        - [Vue path](https://app.pluralsight.com/paths/skills/vue)
    - [Scotch.io](https://scotch.io)
        - [Getting Start with Vue](https://scotch.io/courses/getting-started-with-vuejs)
- Posts
    - [Upgrading from 2 to 3](https://dev.to/ellis22/vue-3-breaking-changes-new-features-steps-to-upgrade-from-vue-2-to-vue-3-5ee3)
- VS Code extensions
	- [Vetur](https://marketplace.visualstudio.com/items?itemName=octref.vetur) for `.vue` file syntax highlighting and other tooling.
- Vue CLI
    - CLI homepage [cli.vuejs.org](https://cli.vuejs.org/)
    - [Creating a Project](https://cli.vuejs.org/guide/creating-a-project.html) doc page, for if you want to start a fresh project.
        - [Create app](https://cli.vuejs.org/guide/creating-a-project.html#vue-create) command
            ```sh
            $ vue create hello-world
            ```
        - [Using the GUI](https://cli.vuejs.org/guide/creating-a-project.html#using-the-gui) command
            ```sh
            $ vue ui
            ```
    - [Plugins and presets](https://cli.vuejs.org/guide/plugins-and-presets.html) on Vue CLI docs
        - e.g.
            ```sh
            $ vue add eslint
            $ vue add router
            $ vue add vuetify
            ```
- Plugins
	- [Plugins guide](https://vuejs.org/v2/guide/plugins.html) on main Vue docs. See topics like routing, state-management and serve-side rendering.
	- [Vuex](https://vuex.vuejs.org/)
		- For storing and managing state. Similar to Flux or Redux of React.
	- Vue Router
	    - [Homepage](https://router.vuejs.org)
	    - [Getting Started](https://router.vuejs.org/guide/)
	    - [HTML5 History mode](https://router.vuejs.org/guide/essentials/history-mode.html)
	- Vuetify
	    - [Homepage](https://vuetifyjs.com/)
		> Material Design Component Framework
		>
		> Vuetify is a Vue UI Library with beautifully handcrafted Material Components. No design skills required — everything you need to create amazing applications is at your fingertips.

### Hello world

In this simplified example, all the CSS and JS are in the single HTML file.

Based on [tutorial](https://scrimba.com/p/pXKqta/cQ3QVcr).

<details>
<summary>Script</summary>

```html
<html>

<head>
    <style>
        html, body {
            margin: 5px;
            padding: 0;
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>

<body>
    <div id="app">
        {{ message }}
    </div>

    <script>
        var app = new Vue({
            el: '#app',
            data: {
                message: 'Hello, world!'
            }
        });
    </script>
</body>

</html>
```

</details>


### Vue CLI

You can build and run a Vue app without local dependencies - as Vue and plugins can be loaded in the browser.

However, it is common to use the Vue CLI as it has a lot of features useful for development.

#### Install Vue CLI

Install this NPM package globally:

- NPM
    ```sh
    $ npm install -g @vue/cli
    ```
- Yarn
    ```sh
    $ yarn global add @vue/cli
    ```

Then you can run commands from anywhere like:

```sh
$ vue --help
$ vue create
$ vue ui
```

#### Use the GUI

You can create and manage projects using a graphical interface this this command.

```sh
$ npx @vue/cli ui
```

The above command will open a browser window with a GUI that guides you through the project creation process.

#### Create a fresh quickstart

- [Creating a project](https://cli.vuejs.org/guide/creating-a-project.html) in the CLI docs

How use Vue's builtin quickstart CLI to create a new project. This flow was used originally as the base of this repo.

Ensure you have Node.js and optionally Yarn installed first.

Use this is install and run the vue CLI to create a new project.

```sh
$ npx @vue/cli create --default my-project
```
NPX will use packages that are installed or download packages needed (without persisting them).
