<?php
/**
 * Created by heivin.
 * User: heivin
 * Date: 12/25/15
 * Time: 6:17 PM
 */

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use Heivin\Chinese;

echo Chinese::province();
echo Chinese::city();
echo Chinese::area();
echo Chinese::map('anhui');
