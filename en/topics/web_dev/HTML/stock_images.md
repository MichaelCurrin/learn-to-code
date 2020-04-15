# Stock Images
> How to embed free stock images in your website using Unsplash

You can browse and search the _Unsplash_ site, which provides images which are free to use but that require links back to the author. The site prides itself on not just showing cheesy stock images, but more authentic and often artistic images.

You can download high resolution images, collect content by other users and also upload your own. 

- [unsplash.com](https://unsplash.com) site
- [license](https://unsplash.com) page

Options for embedding images:

- [Source](#source) - basic.
- [API](#api) - advanced.


## Original

Format of links on the main site domain. These are not for embedding but you can visit them.


### Search 

Keyword search

- https://unsplash.com/s/photos/nature

Using the _Explore_ tab and find keyword tags, in a hierarchy.

- https://unsplash.com/images/nature/solar-eclipse

### Lookup a specific image

- https://unsplash.com/photos/6nRierJz200

### Lookup a specific user's profile

- https://unsplash.com/@crawford


## Source

For simple embedding, use the _source_ domain.

- [Source](https://source.unsplash.com/) page.

That includes instructions and is the domain for serving images as covered below.

Their docs are more complete, but some cases are covered here.


### Load a specific image

Set the dimensions to resize the server on CDN to give fast load time. If you choose a different aspect ratio to the original, the image will be cropepd but not distorted. A square also works well.

```
https://source.unsplash.com/{IMAGE_ID}/{WIDTH}x{HEIGHT}
```

https://source.unsplash.com/3DOybxD2hMo/1600x900


### Random image

https://source.unsplash.com/random

Note if using the browser to view that in a separate tab. you will get redirected to a specific image which is fixed. If you embed the URL in an image tag, you can refresh the page to get a new random choice. 


### Random image by a user

#### Unrestricted dimensions

```
https://source.unsplash.com/user/{USERNAME}
```

https://source.unsplash.com/user/erondu

#### Set dimensions

```
https://source.unsplash.com/user/{USERNAME}/{WIDTH}x{HEIGHT}
```

Example:

```markdown
<img src="https://source.unsplash.com/user/erondu/300x300">
```

<img src="https://source.unsplash.com/user/erondu/300x300">


### Search

Use one or more comma-separated keywords using lowercase. These map to keyword pages on the site.

Avoid using badly-typed or obscure words as you will get few results, or even no results which results in an image showing including an error notice.

Error page:

- https://images.unsplash.com/source-404

Note that keywords are optional - if no value is provided for keywords below, then any _random_ image will be returned.


#### Unrestricted dimensions

```
https://source.unsplash.com/featured/?{KEYWORDS}
```

e.g.

https://source.unsplash.com/featured/?nature

https://source.unsplash.com/featured/?nature,water



### Set dimensions

Specify dimensions for the search and the image will be cropped.

```
https://source.unsplash.com/{WIDTH}x{HEIGHT}/?{KEYWORDS}
```

https://source.unsplash.com/600x600/?water


## API

For more advanced usage, use the API.

- [API](https://unsplash.com/developers) docs.

> Welcome to the Official Unsplash API. Create with the largest open collection of high-quality photos. For free.

Queries are done via:

- [api.unsplash.com/](https://api.unsplash.com/)


## Site structure

This section deals with looking at the structure of the website using the sitemaps, in order to find the known pages or images available. This is useful in order to provide searches or collections from a droplist, rather than letting a user use free text that might have few or no image results.

- [/robots.txt](https://unsplash.com/robots.txt) - this points to the main sitemap.
- [/sitemaps/sitemap.xml](https://unsplash.com/sitemaps/sitemap.xml) - a list of sitemaps.

Examples of usual pages from the above:

- [/sitemaps/collections/popular.xml](https://unsplash.com/sitemaps/collections/popular.xml) - popular collections.
- [/sitemaps/searches/popular.xml](https://unsplash.com/sitemaps/searches/popular.xml) - popular searches.
    - [/s/photos/aboriginal](https://unsplash.com/s/photos/aboriginal) - one of the items under popular searches.

