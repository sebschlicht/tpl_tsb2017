# TSB Homepage Layout 2017
This is a Joomla! template clone of the current TSB homepage layout.
The current TSB layout is a Wordpress theme developed by Tobias Diehl which bases on the Yoko theme.
The Yoko theme again is licensed as GNU GPL v2 - and so is this repository.

## Positions
* `topmenu`: section menu
* `mainmenu`: main menu within each section
  * modules need `nav-pill` class for horizontal item stacking
* `slider`: slider right below the main menu
* `sidebar`: sidebar to the left of/below the content
* `footer`: page footer for less commonly accessed links
  * modules need `col`-classes for horizontal stacking

## Overrides
* `com_content.article.news`: single news blog item
* `com_content.category.blog`: section news blog
* `mod_menu.handball`: layout for the handball team menu displayed above the handball section news
* `mod_banners.sef`: layout for banners which hides the tracking URL away from the user (sacrifies tracking of tab browsing)
* `modules.sidebar`: layout for modules displayed in the sidebar
* `modules.sidebar_*`: module layouts which override the module title (new title can be overridden via language overrides)
* `layout.joomla.content.readmore`: read-more button in news blog
* `layout.joomla.content.blog_info_block`: section news blog item details

## Required Extensions
* Smart Slider 3: [slider](https://github.com/sebschlicht/www-tsb2017/wiki/Slider) used at main entry points

## Technologies
* CSS 3: style elements and transition between their states
* Bootstrap 3: basic style directives and responsive design
* jQuery: add state classes to elements
