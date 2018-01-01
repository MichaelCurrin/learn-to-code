# Zipping

Basic way to download a binary file in the gz (gzip) format and decompress it to text file.
```
$ curl https://za.pinterest.com/v2_sitemaps/za_v2_pins_map_2017-08-14_0-0.xml.gz > sitemap.xml.gz
$ gzip --decompress sitemap.xml.gz
$ view sitemap.xml
```
