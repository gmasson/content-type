<?php
/*
* Content Type PHP
* https://github.com/gmasson/content-type
* License MIT
*/

// .pdf
header('Content-Type: application/pdf');

// Show File
readfile('example.pdf');