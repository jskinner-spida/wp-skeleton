<img src="http://www.spidadesign.com/wp-content/themes/spida/assets/images/logo-m.png">
<h1>Spida Design Wordpress Skeleton</h1>

<h2>Features</h2>
<ul>
    <li>Wordpress 3.9.1</li>
    <li>Plugins
        <ul>
              <li>custom-post-type-ui</li>
              <li>wp-smushit</li>
              <li>w3-total-cache</li>
              <li>velvet-blues-update-urls</li>
              <li>contact-form-7</li>
          </ul>
        </li>
    <li>Bower Components
        <ul>
            <li>jquery</li>
            <li>bootstrap-sass-twbs</li>
            <li>normalize-css</li>
            <li>sprockets-modernizr</li>
            <li>html5shiv</li>
        </ul>
    </li>
</ul>

<h2>Installation:</h2>
<ul>
    <li>Git clone or download repo</li>
    <li>Change name of root folder</li>
    <li>Change name of wp-content/themes/skeleton</li>
    <li>Change database values in wp-config.php</li>
    <li>nagivate to folder in browser and installation should begin</li>
</ul>

<h2>Stuff to Know:</h2>
<ul>
    <li>Assets
        <ul>
            <li>All media goes in wp-content/themes/skeleton/assets</li>
            <li>All bootstrap files are already located in wp-content/themes/skeleton/assets/bower_components/bootstrap-sass-twbs</li>
            <li>Skeleton sass files are relatively pre-configured and compile to assets/stylesheets/applications.css</li>
        </ul>
    </li>
    <li>Page Templates
        <ul>
            <li>Home</li>
            <li>Contact</li>
            <li>About Us</li>
        </ul>
    </li>
    <li>Header
        <ul>
            <li>includes assets/stylesheets/applications.css</li>
            <li>includes favicon. Favicon goes in assets/images/favicon.ico</li>
            <li>Opens body tag with body_class($class)</li>
        </ul>
    </li>
    <li>
        Footer
        <ul>
            <li>Includes
                <ul>
                    <li>assets/bower_components/sprockets-modernizr/modernizr.js</li>
                    <li>assets/bower_components/jquery/dist/jquery.min.js</li>
                    <li>assets/bower_components/html5shiv/dist/html5shiv.min.js</li>
                    <li>assets/javascripts/common.js</li>
                </ul>
            </li>
        </ul>
    </li>
</ul>
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
