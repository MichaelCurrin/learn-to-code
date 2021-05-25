# Rendering

## Approaches

- [Single-Page Application](#single-page-application)
- [Server-Side Rendering](#server-side-rendering)
- [Pre-rendering](#pre-rendering)

### Which approach to use?

The Server-Side Rendering may not be right for you. If you want to improve the performance of your app or improve SEO rankings, considering adding a pre-rendering tool at built time like `presite`, or use a static site generator that is built on React.

The SSR approach is more complex - it needs restructuring of your app and then you need to have a Node server running.

he pre-rendering approach can be done easily by checking an option or adding a step in your deploy pipeline, without rewriting your app. And it works great with static hosting.


## Single-Page Application

The traditional flow - using a build step but without pre-rendering or generatic a static site.

A React app typically just an empty div tag in HTML and a JavaScript file that hasn't run yet. 

This takes time to process as it means that browser has to piece together the DOM for the user after the entire JS file has been downloaded (if bundled well, it will include your own code plus dependencies but excluding package code you don't need). Rather than just getting prepared HTML from the server. So this can be slower - leaving the user with a white page while they wait.

Additionally, SEO crawlers are poor at handling JS-based apps. Even though some like Googlebot _can_ process JS, this consumes your "crawl budget" much faster than HTML pages too, leading to SEO crawlers indexing fewer of your pages and therefore getting you ranked lower if at all in search results.

So the alternatives below tackle this problem by taking the burden off of the browser to rendering the app and putting it on the process which deploys the app. Whether you run it locally or in remote CI.


## Server-Side Rendering

Or "SSR".

Have a Node app running continously to serve HTML.

### Why add Server-Side Rendering for a SPA like React?

With this flow, you are serving static content that doesn't need JS, then when the JS file gets loaded it will then make the page interactive. If there is a difference between the server-side content and what the SPA logic wants to render, you will get an **error** in the JS console that there is a difference.

Why use SSR?

- Better performance for initial page load (for human users).
- SEO crawlers can now see your app without having to run JS (JS is not supported by all bots and even Google's bot has a severe limitation for how many SPA pages it can crawl while HTML pages no issue).
- The docs say that the SSR approach can also be used for rendering your React app as static pages (outputting as HTML files). Gatsby is an example of a static site generator built on React that had to turn browser-rendered app content into flat static HTML files.
- It opens you up a to a server-side part to your app, where you serve templated files or API API requests to users based on the content in a database, maybe even giving edit access.
    - In same way you might use PHP, Flask or Express to insert user profile info or gallery images from the DB into the HTML before returning to a user, or send an receive JSON data. 
    - But, you might want to use a tool besides React or a tool that builds on React such as Next (allows hybrid of static, server and API) or Gatsby (static).
- You get more control over a fast-reloading dev server that doesn't need an HTML page. This doesn't make sense though when the Create React App flow for a SPA approach which let's you use the fast-reloading dev server but also do a build command to render static assets (which is slower but creates a better experience for a deployed prod site).


## Pre-rendering

At deploy time, convert the static directory of your built app from a SPA to rendered content. i.e. HTML that produces a fully rendered app but without JS needed.

### Netlify add-on

In the config for your [Netlify](netlify.com/) site, you can add enable prerendering and it renders the app as HTML, stores it in the cache for 24 hours and serves it to crawlers (SEO bots). So the page is faster and loads without JS.

You have to set your user-agent to `googlebot` etc. to do it. 

### Pre-render using presite package

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

### Pre-render using prerender package

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
