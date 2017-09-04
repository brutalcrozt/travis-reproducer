<?php
  if (is_file('vendor'. DIRECTORY_SEPARATOR. 'autoload.php')) {
    echo "autoload.php was there". PHP_EOL;
  } else {
    echo "no autoload.php folder". PHP_EOL;
  }
?>
