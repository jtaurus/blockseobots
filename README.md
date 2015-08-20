# blockseobots

This package blocks SEO link analytics crawlers from accessing your website. 
Use it if you don't want the competition snooping around your website or if you just want to save some bandwidth.

It block crawlers of:

* Ahrefs
* MajesticSEO
* Seomoz

##Installation:

add 

>"jtaurus/blockseobots": "dev-master" 

to require in your composer.json file

in command line, run:

>composer update

Next, add:

>Jtaurus\BlockSeoBots\ServiceProviders\BlockSeoBotsServiceProvider::class

to providers array inside config/app.php

The final step is to add:

>\Jtaurus\BlockSeoBots\Middleware\BlockSeoBotsMiddleware::class

into the the middleware array inside kernel.php

## Config:

The array of forbidden user agents is located inside BlockSeoBots class. If you want to block another crawler, simply add a part of its user agent there.

>protected $forbiddenUserAgentSubstrings = array(
>'ahrefsBot',
>'mjseo',
>'seomoz',
>'rogerbot');
