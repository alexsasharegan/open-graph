# Open Graph

##### Scriptably create open graph meta tags using PHP, then echo them out onto the page.

### Usage

```php
<?php

$og = new OpenGraph;
$og->setUrl('http://canonicalurl.com')
   ->setDeterminer('The')
   ->setTitle('University of Awesome')
   ->setSiteName('University of Awesome')
   ->setType('website')
   ->setDescription('This awesome university will take you to school.')
   ->setVideo('https://www.youtube.com/watch?v=videolink')
   ->setImage('http://canonicalurl.com/images/brand.jpg')
   ->setLocale('en_US');

echo $og; 
// alternatively
$og->render();

/*
<meta property="og:title" content="University of Awesome">
<meta property="og:type" content="website">
<meta property="og:image" content="http://canonicalurl.com/images/brand.jpg">
<meta property="og:url" content="http://canonicalurl.com">
<meta property="og:video" content="https://www.youtube.com/watch?v=videolink">
<meta property="og:site_name" content="University of Awesome">
<meta property="og:locale" content="en_US">
<meta property="og:determiner" content="The">
<meta property="og:description" content="This awesome university will take you to school.">
*/
```