<?php
if (ini_get("phar.readonly") != 0) {
    die("<b>Error:</b> phar.readonly must by off in <b>php.ini</b> to complete build!");
}

$pharFile = 'vendor.phar';
if (file_exists($pharFile)) { unlink($pharFile); }

$phar = new Phar($pharFile);
$phar->buildFromDirectory("vendor");

echo "{$pharFile} created!";