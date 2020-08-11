<?php
/*
* Content Type PHP
* https://github.com/gmasson/content-type
* License MIT
*/

// .svg
header('Content-type: image/svg+xml');

// Code
echo '<svg height="100" width="100">
  <circle cx="50" cy="50" r="40" stroke="black" stroke-width="3" fill="red" />  
</svg> ';