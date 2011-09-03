#!/usr/bin/php
<?php

/**
 * Basic PHP input in Console scripts
 *
 * Part of my conference talk and blog series PHP in the Dark
 *
 * @author Jeroen Keppens
 * @link http://www.amazium.com/blog/php-in-the-dark
 * @link https://github.com/Amazium/PHP-In-The-Dark/blob/master/1-Input-Output/01-basic-input.php
 */

echo '$_SERVER["argc"] = ' . $_SERVER['argc'] . PHP_EOL;
echo '$_SERVER["argv"] = ' . print_r($_SERVER['argv'], true) . PHP_EOL;