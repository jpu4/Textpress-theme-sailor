# Textpress-theme-sailor

Bootstrapmade template converted to a theme for [Textpress](https://github.com/jpu4/TextPress)

Theme Name: Sailor

Theme URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/

Author: BootstrapMade

Author URL: https://bootstrapmade.com

All the original demo content and images are intact. 
HTML extensions have been changed to php and header and footer includes have been placed.

The sample content pages have been copied into "layout_" pages and can be used in the routes inside the config:

```
    'article' => array(
        'route'     => '/blog/:article',
        'template'  =>'article',
        'conditions'    => array(
                'year'     => '(19|20)\d\d'
            ,'month'    =>'([1-9]|[01][0-9])'
            ,'date'     =>'([1-9]|[0-3][0-9])'
        ),
        'layout'    => 'layout_post-rightsidebar',		//<--
    ),
    'about' => array(
        'route'     => '/about',
        'template'  => 'about',
        'layout'    => 'layout_fullwidth',    			//<--
    ),
    'blog-rightsidebar' => array( 
        'route'     => '/blog-rightsidebar',
        'template'  => 'blog-rightsidebar',
        'layout'    => false,
    ),
```