<?php
  # PDF:
  header('Content-Type: application/pdf');
  echo file_get_contents('file.pdf');
?>
