<?php
echo "Running tests...".PHP_EOL;

if (file_exists('../../vendor/autoload.php')) {
    include_once '../../vendor/autoload.php';
}

//echo var_export(ini_get('xdebug.profiler_enable'),true)."\n";
//echo var_export(ini_get('xdebug.remote_host'),true)."\n";
//echo var_export(ini_get('xdebug.idekey'),true)."\n";
/*set_include_path(
    "../../" . PATH_SEPARATOR . get_include_path()
);*/
