#!/usr/bin/php
<?php

/**
 * Showing the Zend_Console_Getopt in console scripts
 *
 * Part of my conference talk and blog series PHP in the Dark
 *
 * @author Jeroen Keppens
 * @link http://www.amazium.com/blog/php-in-the-dark
 * @link https://github.com/Amazium/PHP-In-The-Dark/blob/master/1-Input-Output/03-pear-getopt.php
 */

// Include the Zend_Console_Getopt class
set_include_path('../Library' . PATH_SEPARATOR . get_include_path());
require_once 'Zend/Console/Getopt.php';

// Define short option
$config = array(
    'help|h'        => 'Show help',
    'verbose|v'     => 'Verbose mode',
    'user|u=s'      => 'Username (string)',
    'password|p-s'  => 'Password (string) (optional)'
);

try {
    $options = new Zend_Console_Getopt($config);
    $options->parse();
    if (!empty($options->help)) {
        echo $options->getUsageMessage();
    } else {
        $username = $options->user; // other aliases: $options->u and $options->getOption('user')
        $password = $options->password;
        $verbose  = !empty($options->verbose);
        echo 'Log in [' . $username . ' / ' . $password . ']';
        if ($verbose) {
            echo ' in verbose mode';
        }
        echo PHP_EOL;
    }
} catch (Zend_Console_Getopt_Exception $e) {
    echo $options->getUsageMessage();
}