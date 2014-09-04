# AquanautBrewery.com
Require PHP 5.2+

## theme: Strange Aquanaut

### JS Libs in Plugins.js
* Fastclick.js
* jQuery Equal Heights Plugin

### WordPress Plugins: 
* acf-options-page       
* acf-repeater           
* advanced-custom-fields 
* better-wp-security  (iThemes Security)   
* duplicate-post                    
* wordpress-importer     
* wp-open-graph          
* wp-retina-2x

### A Note on Retina Images
This site uses the WP Retina 2x plugin to generate regular and hi-DPI versions of 
all image uploaded with the caveat being that each image must be at least 2x the 
size you intend for it to appear.

For example, the default thumbnail size for this theme is 308x308. The generated 
Retina version will end up being 616x616 in dimention, so long as the uploaded 
image is at leats that size. It needs an image big enough to size down, as it 
cannot effectivelt size up an image without great loss of quality.

On the client side, retina.js is used. This will detect devices with hi-DPI displays 
and attempt to load '-@2x' suffixed version of all image on the page, if available, 
falling back to lo-DPI version.

### A Note of BEM syntax support in SASS.
In some place in the SCSS for this theme, the new BEM syntax is used, which required minimum version 3.3 of SCSS. 

See more information [here](http://mikefowler.me/2013/10/17/support-for-bem-modules-sass-3.3/)
