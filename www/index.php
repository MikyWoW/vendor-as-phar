<?php

// Tradicinal vendor
//require __DIR__ . '/vendor/autoload.php';

// Use phar vendor
require 'phar://' . __DIR__ . '/../vendor.phar/autoload.php';

require __DIR__ . '/../app/boot.php';

Boot::Run();