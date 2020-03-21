# Stock Images
> How to embed free stock images in your website

You can browse and search the Unsplash site, which provides images which are free to use but that require links back to the author. You can download high resolution images, collect content by other users and also upload your own.

- [unsplash.com](https://unsplash.com) site
- [license](https://unsplash.com) page

Options for embedding images:

- [Source](#source) - basic.
- [API](#api) - advanced.


## Original

Format of links on the main site domain. These are not for embedding but you can visit them.


### Search 

- https://unsplash.com/s/photos/nature

### Lookup photo 

- https://unsplash.com/photos/6nRierJz200

### Lookup user

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

Example:

```markdown
<img src="https://source.unsplash.com/user/erondu/300x300">
```

<img src="https://source.unsplash.com/user/erondu/300x300">


### Random image

https://source.unsplash.com/random

### Random image by a user

```
https://source.unsplash.com/user/{USERNAME}
```

https://source.unsplash.com/user/erondu

### Search

Pick a random word from a search of one or more keywords.

```
https://source.unsplash.com/featured/?{KEYWORDS}
```

https://source.unsplash.com/featured/?nature,water


Specify dimensions for the search:

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
