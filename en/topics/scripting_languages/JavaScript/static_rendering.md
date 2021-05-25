# Static rendering


## Netlify add-on

In Netlify you can add enable prerendering and it renders the app as HTML, stores it in the cache for 24 hours and serves it to crawlers (SEO bots). So the page is faster and loads without JS.
You have to set your user-agent to `googlebot` etc. to do it. 


## Pre-render at build time

A more reusable way is to use an NPM package like `presite` or `prerender`. This works locally and with other CI (like GH Actions).

- [egoist/presite](https://github.com/egoist/presite) repo with docs.

Example setup for a React app.

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

And since no SSR is needed, I like this prerender approach a lot. You might need to specify routes on the site, but you can turn your site into a static rendered app.
