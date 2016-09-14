# Open Graph

##### Scriptably create open graph meta tags using PHP, then echo them out onto the page.

### Usage

```php
<?php

$og = new OpenGraph();
$og->setUrl('http://canonicalurl.com');
$og->setDeterminer('The');
$og->setTitle('University of Awesome');
$og->setSiteName('University of Awesome');
$og->setType('website');
$og->setDescription('This awesome university will take you to school.');
$og->setVideo('https://www.youtube.com/watch?v=videolink');
$og->setImage('http://canonicalurl.com/images/brand.jpg');
$og->setLocale('en_US');

echo $og;
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