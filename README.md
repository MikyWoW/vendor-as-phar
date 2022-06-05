#Using PHAR for composer libraries
Insted of copy vendor folder to hosting you just copy vendor.phar. All libraries are build in to one phar file. Better for fast FTP transfer speed. On your development machine you need to set <b>phar.readonly=Off</b> in <b>php.ini</b> to be able to build phar file.

##Installation

    composer install
    php build.php

You need to run phar build always after composer commands to update phar file.

##Overview
<b>app</b> - Folder with your PHP aplication.
<b>www</b> - Folder with static files and index.php to boot app.
<b>build.php</b> - Build script to convert vendor folder to phar file.

##Important

By default phar files are readable as normal text files. You need configure server to block this. Otherwise anybody could read source code inside phar file.

Before uploading phar to production do not forget to composer install with all optimizations and then build phar file again. For examle:

    composer install --no-ansi --no-dev --no-interaction --no-progress --no-scripts --optimize-autoloader