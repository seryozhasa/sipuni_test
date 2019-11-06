#!/usr/bin/env php
<?php

require __DIR__.'/vendor/autoload.php';

use App\Command\SortCommand;
use Symfony\Component\Console\Application;

$application = new Application();

$application->add(new SortCommand());

$application->run();