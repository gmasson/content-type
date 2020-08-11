<?php
/*
* Content Type PHP
* https://github.com/gmasson/content-type
* License MIT
*/

// .jpg:
header('Content-Type: image/jpeg');

// .png:
#header('Content-Type: image/png');

// .bmp:
#header('Content-Type: image/bmp');

// File
echo file_get_contents('example.jpg');