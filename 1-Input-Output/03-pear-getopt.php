#!/usr/bin/php
<?php

/**
 * Showing the pear Console_Getopt::getopt() method in console scripts
 *
 * Part of my conference talk and blog series PHP in the Dark
 *
 * @author Jeroen Keppens
 * @link http://www.amazium.com/blog/php-in-the-dark-input-output
 * @link https://github.com/Amazium/PHP-In-The-Dark/blob/master/1-Input-Output/03-pear-getopt.php
 */

// Define short options
$shortopts = "";
$shortopts.= "hv";  // No values
$shortopts.= "u:";  // Required value
$shortopts.= "p::"; // Optional value

// Define long options
$longopts  = array(
    "user=",       // Required value
    "password==",  // Optional value
    "help",        // No value
    "verbose",     // No value
);

// Get an instance of new Console_Getopt
require_once 'Console/Getopt.php';
$getopt = new Console_Getopt();

// Get the arguments & remove the filename from the list
$args = $getopt->readPHPArgv();
array_shift($args);

// Parse the options

$options = $getopt->getopt2($args, $shortopts, $longopts);
if (PEAR::isError($options)) {
    echo 'Got error: ' . $options->getMessage() . PHP_EOL;
} else {
    print_r($options);
}