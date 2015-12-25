<?php
/**
 * Created by heivin.
 * User: heivin
 * Date: 12/25/15
 * Time: 6:17 PM
 */

require_once __DIR__ . '/../../vendor/autoload.php'; // Autoload files using Composer autoload

use Heivin\Chinese;


echo Chinese::province(); // Array
echo Chinese::city('json'); // Json
echo Chinese::area(); // Array
var_dump(json_encode(Chinese::map('anhui')));
