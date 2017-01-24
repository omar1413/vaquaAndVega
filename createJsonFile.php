<?php
/**
 * Created by PhpStorm.
 * User: Omar
 * Date: 1/23/2017
 * Time: 11:16 PM
 */

$response = $_POST["data"];

$fp = fopen('results.json', 'w');
fwrite($fp, json_encode($response));
fclose($fp);