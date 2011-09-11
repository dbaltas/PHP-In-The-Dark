#!/usr/bin/php 
<?php
/**
 * Pear Console Progressbar example
 * http://pear.php.net/package/Console_ProgressBar
 *
 * Part of my conference talk and blog series PHP in the Dark
 *
 * @author Jeroen Keppens
 * @link http://www.amazium.com/blog/php-in-the-dark-layout
 * @link https://github.com/Amazium/PHP-In-The-Dark/blob/master/2-Layout/05-console-progressbar.php
 */

require 'Console/ProgressBar.php';

echo PHP_EOL;

$format = '[%bar%] %percent% (%current%/%max%) ';
$filler = '=>';
$empty  = ' ';
$width  = 70;
$size   = 125;
$bar = new Console_ProgressBar($format, $filler, $empty, $width, $size);

for ($i = 0; $i <= $size; $i++) {
    $bar->update($i);
    sleep(1);
}

echo PHP_EOL . PHP_EOL;
