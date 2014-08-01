wp-skeleton
===========

Skeleton Wordpress Installation

- WP 3.9.1
- Plugins: custom-post-type-ui, wp-smushit, w3-total-cache, velvet-blues-update-urls, contact-form-7
- Bower Components: jquery, bootstrap-sass-twbs, normalize-css, sprockets-modernizr, html5shiv

Installation:
    - Git clone or download repo
    - Change name of root folder
    - Change name of wp-content/themes/skeleton
    - Change database values in wp-config.php
    - nagivate to folder in browser and installation should begin

Stuff to Know:

Assets:
    -All media goes in wp-content/themes/skeleton/assets
    -All bootstrap files are already located in wp-content/themes/skeleton/assets/bower_components/bootstrap-sass-twbs
    -Skeleton sass files are pre-configured and compile to assets/stylesheets/applications.css

Page Templates:
    -Home
    -Contact
    -About Us

Header:
    -includes assets/stylesheets/applications.css
    -includes favicon. Favicon goes in assets/images/favicon.ico
    -Opens body tag with body_class($class)
Footer:
    -includes:
        -assets/bower_components/sprockets-modernizr/modernizr.js
        -assets/bower_components/jquery/dist/jquery.min.js
        -assets/bower_components/html5shiv/dist/html5shiv.min.js
        -assets/javascripts/common.js

Sass Structure:
sass/
    modules/
        partials/
            _mixins.scss
            _navbar.scss
    _all.scss
    _fonts.scss
    _variables.scss
  partials/
    templates/
        _about.scss
        _contact.scss
        _home.scss
    _base.scss
    _footer.scss
    _header.scss
  applications.scss
