# SEO


## Robots file

See [Robots exclusion standard](https://en.wikipedia.org/wiki/Robots_exclusion_standard).

- *Disallow*: stop crawlers from reading
- *Allow*: lets you tell a robot that it is okay to see a file in a folder that has been "Disallowed" by other instructions
- *Noindex*: Noindex means it will not show up in Search Results, but Google can still crawl. 

Note these values are paths relative to root directory and include a forward-slash at the start.

Example:

```
# Private user content.
User-agent: *
Disallow: /profile/*/drafts

# Search result pages.
User-agent: *
Disallow: /search

# This page redirects to / path.
User-agent: *
Noindex: /home

# Sitemaps section.
Sitemap: https://example.com/sitemaps/sitemap.xml
Sitemap: https://example.com/sitemaps/sitemap-index-foo.xml
Sitemap: https://example.com/sitemaps/sitemap-index-bar.xml
Sitemap: https://example.com/sitemaps/sitemap-index-baz.xml
```

There is a way to list multiple user-agents before a single disallow statement and this should work for Google. However, it is safer to keep a separate block for each user-agent to keep with the original standard, as stated on a Stack Overflow answer [here](https://stackoverflow.com/questions/20294485/is-it-possible-to-list-multiple-user-agents-in-one-line).


### Sitemaps in robots files

Multiple sitemaps can be included in `robots.txt`. Note they are full URIs, not relative. Spaces are not required between lines.

Example:

```
Sitemap: https://example.com/path/to/sitemaps/sitemap.xml

Sitemap: https://example.com/path/to/sitemaps/sitemap-areas.xml
```


## Sitemaps

See [Sitemaps XML format](https://www.sitemaps.org/protocol.html).

### Example structure

How to structure files on your site.

```
 # Allow/disallow rules and points to sitemap.xml and all sitemap-index-XXX.xml files.
/robots.txt

# Pages on site not covered by foo, bar, etc.
/sitemaps/sitemap.xml

# Point to gz files for foo.
/sitemaps/sitemap-index-foo.xml
# First page of foo. Limited by crawlers  to 50 000 URIs or 50MB.
/sitemaps/sitemap-foo-001.xml.gz # Point to URIs in area A.
# Second page.
/sitemaps/sitemap-foo-002.xml.gz

# Repeat for foo as for baz.
```
 
### Domains

- *Protocol*. All URI listed in a sitemap file must match the  **protocol** of the host where the sitemap is served.
- *Subdomains*. A sitemap may **not** include any reference to subdomains.


### Samples

`sitemap.xml`

```xml
<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
    xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"
    xmlns:xhtml="http://www.w3.org/1999/xhtml">

    <url>
        <loc>https://example.com/</loc>
        <lastmod>2020-01-01</lastmod>
        <changefreq>monthly</changefreq>
    </url>

</urlset>
```

`sitemap-index-foo.xml`

```xml
<?xml version="1.0" encoding="UTF-8"?>
<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

    <sitemap>
        <loc>https://example.com/sitemaps/sitemap-foo-2020-03-01-001.xml.gz</loc>
        <lastmod>2019-10-01</lastmod>
        <changefreq>monthly</changefreq>
    </sitemap>

    <!-- More xml.gz links here if we cannot fit them all in the previous link -->

    <sitemap>
        <loc>https://example.com/sitemaps/sitemap-foo-2020-03-01-002.xml.gz</loc>
        <lastmod>2019-10-01</lastmod>
        <changefreq>monthly</changefreq>
    </sitemap>

</sitemapindex>
```

`sitemap-foo-001.xml`

```xml
<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
    xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"
    xmlns:xhtml="http://www.w3.org/1999/xhtml">

    <url>
        <loc>https://example.com/foo/1</loc>
        </image:image>
        <lastmod>2018-01-01</lastmod>
        <changefreq>monthly</changefreq>
    </url>

    <!-- And so on -->

</urlset>
```
