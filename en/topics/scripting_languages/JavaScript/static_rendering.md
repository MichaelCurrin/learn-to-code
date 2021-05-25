# Static rendering


You have two options if you want to make your SPA to discoverable on search engines:

- Server-Side Rendering (SSR) - running Node app needed.
- Prerendering - done at build/deploy time.

This page covers the prerendering approach.


## Netlify add-on

In the config for your [Netlify](netlify.com/) site, you can add enable prerendering and it renders the app as HTML, stores it in the cache for 24 hours and serves it to crawlers (SEO bots). So the page is faster and loads without JS.

You have to set your user-agent to `googlebot` etc. to do it. 


## Pre-render using presite package

A more reusable way is to use an NPM package like `presite` or `prerender`. This works locally and with other CI (like GH Actions).

Repo:

[![egoist - presite](https://img.shields.io/static/v1?label=egoist&message=presite&color=blue&logo=github)](https://github.com/egoist/presite)
[![stars - presite](https://img.shields.io/github/stars/egoist/presite?style=social)](https://github.com/egoist/presite)
[![forks - presite](https://img.shields.io/github/forks/egoist/presite?style=social)](https://github.com/egoist/presite)

Example setup for a React app. 

You don't need to change the code in your app.

1. Get `presite` is installed.
    ```sh
    $ npm install -D presite
    ```
2. Update `package.json`.
    ```diff
    {
      "scripts": {
    -    "build": "react-scripts build"
    +    "build": "react-scripts build && presite ./build"
      }
    }
    ```

That will work in any build where you generated static output for a Single Page Application. Such as for Vue or React.

Unlike Netlify approach, this generates a prerendered site that will be served to users and bots, for a speed benefit for humans.

What happens is the user gets the frozen HTML which has no JS running (so the buttons do nothing). Then the JS scripts loads as usual to replace your root div with identical content as before but it is now animated.

It worked great when I tested locally. It's the same as the React app approach of SSR of HTML and `React.hydrate` on the frontend.

This means that you don't have to do any server-side rendering for React, such as using a static site generator like Next or using a React Node server (a server would adds extra overhead and complexity). If your content is static and only changes when you commit and deploy, then prerending works great. 

I like this prerender approach a lot. You might need to specify routes on the site, but you can turn your site into a static rendered app.


## Pre-render using prerender package

Homepage for rendering service.

https://prerender.io/

See also https://prerender.com crawler.

Repo: 

[![prerender - prerender](https://img.shields.io/static/v1?label=prerender&message=prerender&color=blue&logo=github)](https://github.com/prerender/prerender)
[![stars - prerender](https://img.shields.io/github/stars/prerender/prerender?style=social)](https://github.com/prerender/prerender)
[![forks - prerender](https://img.shields.io/github/forks/prerender/prerender?style=social)](https://github.com/prerender/prerender)

> Node server that uses Headless Chrome to render a javascript-rendered page as HTML. To be used in conjunction with prerender middleware. 

[![prerender - prerender-node](https://img.shields.io/static/v1?label=prerender&message=prerender-node&color=blue&logo=github)](https://github.com/prerender/prerender-node)
[![stars - prerender-node](https://img.shields.io/github/stars/prerender/prerender-node?style=social)](https://github.com/prerender/prerender-node)
[![forks - prerender-node](https://img.shields.io/github/forks/prerender/prerender-node?style=social)](https://github.com/prerender/prerender-node)

Note that this is a paid service. See [Billing](https://docs.prerender.io/article/30-how-does-prerender-bill).

- [Getting Started](https://docs.prerender.io/article/15-getting-started) docs.
    > The Prerender.io middleware that you install on your server will check each request to see if it's a request from a crawler. 
    > 
    > If it is a request from a crawler, the middleware will send a request to Prerender.io for the static HTML of that page. If not, the request will continue on to your normal server routes. The crawler never knows that you are using Prerender.io since the response always goes through your server. The Prerender.io middleware that you install on your server will check each request to see if it's a request from a crawler. If it is a request from a crawler, the middleware will send a request to Prerender.io for the static HTML of that page. If not, the request will continue on to your normal server routes. The crawler never knows that you are using Prerender.io since the response always goes through your server.

You could mabybe run prerender directly, so just use that at build time like presite.
