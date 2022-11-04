<?php
/**
 * Maud's Back office for WordPress
 *
 * Plugin Name:  Maud's BO
 * Description:  Pull in place of every necessary things to manage Maud's Back office.
 * Version:      1.0.0
 * Author:       Raffi
 *
 */

require __DIR__ . '/vendor-bo-maud/autoload.php';

$boMaud = new BO_Maud\Plugin();
