# SEO


## Robots file

See [Robots exclusion standard](https://en.wikipedia.org/wiki/Robots_exclusion_standard).

- *Disallow*: stop crawlers from reading
- *Allow*: lets you tell a robot that it is okay to see a file in a folder that has been "Disallowed" by other instructions
- *Noindex*: Noindex means it will not show up in Search Results, but Google can still crawl. 

Note these values are paths relative to root directory and include a forward-slash at the start.

Example:

```
User-agent: *

Disallow: /profile/private
Allow: /foo/*/bar
Noindex: /search
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

```
 # Allow/disallow rules and points to sitemap.xml and all sitemap-index-{area}.xml files.
/robots.txt
# Point to pages on site not covered by areas.
/sitemaps/sitemap.xml
 # Point to gz files for foo.
/sitemaps/sitemap-index-foo.xml
# First page of foo. Limited by crawlers  to 50 000 URIs or 50MB.
/sitemaps/sitemap-foo-001.xml.gz # Point to URIs in area A.
# Second page.
/sitemaps/sitemap-foo-002.xml.gz
```

### Domains

- *Protocol*. All URI listed in a sitemap file must match the  **protocol** of the host where the sitemap is served.
- *Subdomains*. A sitemap may **not** include any reference to subdomains.
