<?php

// You need this file if you don't have anything in the _config folder. If that folder exists
// and is not empty then you can delete this file.

use SilverStripe\Control\Director;

if (! Director::isDev()) {
    echo '
    ~~~This should only be included in dev mode~~~
    ';
}
