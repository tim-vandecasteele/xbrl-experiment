<?php

// brew install php71
// composer require lyquidity/xbrl:dev-master lyquidity/xpath2:dev-master lyquidity/utilities:dev-master lyquidity/xml:dev-master pear/log --prefer-dist


// This MUST be set before the autoload because the XBRL class autoloaded uses it
global $use_xbrl_functions; $use_xbrl_functions = true;
require_once __DIR__ . '/vendor/autoload.php';
include __DIR__ . "/vendor/lyquidity/xbrl/examples/examples.php";
