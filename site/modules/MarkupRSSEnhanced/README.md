# Markup RSS Enhanced

This Module is the enhanced version of [Ryan's Markup RSS Module](https://github.com/ryancramerdesign/ProcessWire/blob/master/wire/modules/Markup/MarkupRSS.module) and is completely compatible with it. In addition, this enhanced module supports the usage of [enclosures](http://en.wikipedia.org/wiki/RSS_enclosure) a way of attaching multimedia content to RSS feeds. Give the RSS enhanced module a PageArray of pages and it will render a RSS feed from it. The Module should be used directly from your template file.

In the examples the `$rss` variable is used for as instance of the module.

    $rss = $modules->get("MarkupRSSEnhanced");



### Basic usage

In case you only need 1 feed for your site, you need to setup the defaults in the Modules config. then you can use the code below.

    $items = $pages->find("limit=10, sort=-modified");    // $items, PageArray of Pages
    $rss = $modules->get("MarkupRSSEnhanced");            // load the module
    $rss->render($items);                                 // render the feed

### Setup channel elements

The channel element describes the RSS feed. There are 3 required channel elements:

1. **title** $rss->title
2. **link** $rss->url
3. **description** $rss->description

here's a list of all options:

    $rss->title = '';        // (string) Title of the feed.
    $rss->url = '';          // (string) URL of the website this feed lives. Example: http://www.your-domain.com/
    $rss->description = '';  // (string) Phrase or sentence describing the channel.
    $rss->copyright = '';    // (string) Copyright notice for content in the channel.
    $rss->ttl = '';          // (string/integer) Number of minutes that how long it can be cached.

### Setup item elements

Every page from the PageArray use the item element.

    $rss->itemTitleField = '';             // Fieldname to get value from
    $rss->itemDescriptionField = '';       // Fieldname to get value from
    $rss->itemDescriptionLength = '';      // Default 1024
    $rss->itemEnclosureField = '';         // Fieldname to get file/image from
    $rss->itemDateField = '';              // Fieldname to get data from
    $rss->itemLinkField = '';              // Fieldname to get URL from or don't set to use $page->httpUrl
    $rss->itemAuthorField = '';            // If email address is used, itemAuthorElement should be set to author
    $rss->itemAuthorElement = 'dc:creator' // may be 'dc:creator' or 'author'

### Item element enclosure

[RSS enclosures](http://en.wikipedia.org/wiki/RSS_enclosure) are a way of attaching multimedia content to RSS feeds. All files with proper mime types are supported. If you asign an image field to the _itemEnclosureField_ there are 3 extra options you could set.

1. **width** The width of the image.
2. **height** The height of the image.
3. **boundingbox** Checking boundingbox will scale the image so that the whole image will fit in the specified width & height. This prevents cropping the image


    $rss->boundingbox = 1 // (integer) 1 or 0, on or off
    $rss->width = 400;    // (integer) Max width of the image, 0 for proportional
    $rss->height = 300;   // (integer) Max height of the image, 0 for proportional

### Prettify the feed

Prettifying the feed is not supported bij all clients.

    $rss->xsl = ''; // path to xls file
    $rss->css = ''; // path to css
