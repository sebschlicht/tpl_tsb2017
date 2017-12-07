# TSB Homepage Layout 2017
This is a Joomla! template clone of the current TSB homepage layout.
The current TSB layout is a Wordpress theme developed by Tobias Diehl which bases on the Yoko theme.
The Yoko theme again is licensed as GNU GPL v2 - and so is this repository.

## Positions
* `topmenu`: section menu
* `mainmenu`: main menu within each section
  * modules need the ` navbar-nav` menu class suffix for horizontal item stacking
* `slider`: slider right below the main menu
* `sidebar`: sidebar to the left of/below the content
* `footer`: page footer for less commonly accessed links
  * modules need `col`-classes for horizontal stacking

## Overrides
* `com_content.article`: single article view displaying e.g. static pages
* `com_content.article.news`: single article displaying a news blog item
* `com_content.article.handballteam`: single article item displaying a handball team
* `com_content.category.blog`: section news blog
* `mod_menu.handball`: layout for the handball team menu displayed above the handball section news
* `mod_banners.sef`: layout for banners which hides the tracking URL away from the user (sacrifies tracking of tab browsing)
* `mod_banners.partnerlist`: layout for SEF banners as a list to display all partners
* `mod_banners.footerpartner`: layout for SEF banners, horizontally stacked like in the footer
* `modules.sidebar`: layout for modules displayed in the sidebar
* `modules.sidebar_*`: module layouts which override the module title (new title can be overridden via language overrides)
* `layout.joomla.content.readmore`: read-more button in news blog
* `layout.joomla.content.blog_info_block`: news blog item details
* `layout.joomla.content.info_block`: news item details (article view)

## Required Extensions
* Smart Slider 3: [slider](https://github.com/sebschlicht/www-tsb2017/wiki/Slider) used at main entry points
* [Balbooa 6gallery](https://www.balbooa.com/joomla-gallery-documentation/basics) (**paid**): image gallery with albums and categories

## Frontend-Technologies
* CSS 3: style elements and transition between their states
* Bootstrap 3: basic style directives and responsive design
* jQuery: add state classes to elements

## Development
The LESS compilation is automatized using the `Brackets` plugin `LESS AutoCompile`.

## License
Except for images, this template is licensed under GNU GPL v2 - just like the cloned Wordpress template.
