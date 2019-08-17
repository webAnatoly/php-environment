<?php

// phpinfo();

namespace My\Project\Runner;

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

use Illuminate\Support\Collection;

require __DIR__ . '/../vendor/autoload.php';

function run()
{
    $collection = collect(['taylor', 'abigail', null])->map(function ($name) {
        return strtoupper($name);
    });

    return $collection;
}

$result = run();

echo "<pre>";
print_r($result);